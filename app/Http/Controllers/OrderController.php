<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Item;
use App\Models\Order;
use App\Repositories\OrderRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Auth;

class OrderController extends AppBaseController
{
    private $orderRepository;

    public function __construct(OrderRepository $orderRepo)
    {
        $this->orderRepository = $orderRepo;
    }

    public function index()
    {
        $orders = Order::sortable()->paginate(10);

        return view('orders.index', compact('orders'));
    }

    public function create(Request $request)
    {
        $item = Item::where('id', $request->item_id)->first();

        if (Auth::check() && Auth::user()->role_id == 1) {
            return view('orders.create', compact('item'));
        } else {
            return view('orders.create_frontend', compact('item'));
        }
    }

    public function store(CreateOrderRequest $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'firstName' => 'required|min:3|max:30',
            'lastName' => 'required|min:3|max:30',
            'email' => 'required|string|email|max:30',
            'country' => 'required|string'
        ]);

        $customer = Customer::where('email', $request->email)->first();
        if ($customer) {
            $input['customer_id'] = $customer->id;
        } else {
            $customer = Customer::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'email' => $request->email,
                'country' => $request->country,
            ]);
            $input['customer_id'] = $customer->id;
        }

        $order = $this->orderRepository->create($input);

        if ($order->item->specialPrice) {
            $itemPrice = $order->item->specialPrice;
        } else {
            $itemPrice = $order->item->price;
        }
        $invoice = Invoice::create([
            'order_id' => $order->id,
            'customerName' => $customer->firstName . " " . $customer->lastName,
            'itemName' => $order->item->name,
            'itemPrice' => $itemPrice,
            'itemQuantity' => $order->quantity,
            'total' => $order->quantity * $itemPrice,
            'issue_date' => now()->format('Y-m-d'),
            'due_date' => now()->addDays(30)->format('Y-m-d'),
        ]);

        $customer->totalRevenue += $invoice->total;
        $customer->save();

        Flash::success('Thank you for your order.');

        return redirect(route('invoices.show', $invoice->id));
    }

    public function show($id)
    {
        $order = $this->orderRepository->findWithoutFail($id);

        if (empty($order)) {
            Flash::error('Order not found');

            return redirect(route('orders.index'));
        }

        return view('orders.show', compact('order'));
    }

    public function edit($id)
    {
        $order = $this->orderRepository->findWithoutFail($id);

        if (empty($order)) {
            Flash::error('Order not found');

            return redirect(route('orders.index'));
        }

        return view('orders.edit', compact('order'));
    }

    public function update($id, UpdateOrderRequest $request)
    {
        $order = $this->orderRepository->findWithoutFail($id);

        if (empty($order)) {
            Flash::error('Order not found');

            return redirect(route('orders.index'));
        }

        $this->orderRepository->update($request->all(), $id);

        Flash::success('Order updated successfully.');

        return redirect(route('orders.index'));
    }

    public function destroy($id)
    {
        $order = $this->orderRepository->findWithoutFail($id);

        if (empty($order)) {
            Flash::error('Order not found');

            return redirect(route('orders.index'));
        }

        $this->orderRepository->delete($id);

        Flash::success('Order deleted successfully.');

        return redirect(route('orders.index'));
    }

    public function search(Request $request)
    {
        $q = $request->q;

        if (filled($q)) {
            $orders = Order::where('id', 'LIKE', '%' . $q . '%')
                ->orWhere('quantity', 'LIKE', '%' . $q . '%')
                ->orWhere('created_at', 'LIKE', '%' . $q . '%')
                ->sortable()->paginate(10);
            $searchResult = $orders;

            $customers = Customer::where('firstName', 'LIKE', '%' . $q . '%')
                ->orWhere('lastName', 'LIKE', '%' . $q . '%')
                ->sortable()->paginate(10);

            if ($customers) {
                foreach ($customers as $customer) {
                    $customersearches = Order::where('customer_id', $customer->id)->sortable()->paginate(10);
                    if ($customersearches) {
                        foreach ($customersearches as $customersearch) {
                            $searchResult->push($customersearch);
                        }
                    }
                }
            }

            $items = Item::where('name', 'LIKE', '%' . $q . '%')
                ->sortable()->paginate(10);

            if ($items) {
                foreach ($items as $item) {
                    $itemsearches = Order::where('item_id', $item->id)->sortable()->paginate(10);
                    if ($itemsearches) {
                        foreach ($itemsearches as $itemsearch) {
                            $searchResult->push($itemsearch);
                        }
                    }
                }
            }

            $orders = $searchResult;

            Flash::success('Search results  "' . $q . '"');
        } else {
            $orders = Order::sortable()->paginate(10);
        }

        return view('orders.index', compact('orders', 'q'));
    }
}
