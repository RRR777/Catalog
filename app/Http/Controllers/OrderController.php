<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
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
use Response;

class OrderController extends AppBaseController
{
    /** @var  OrderRepository */
    private $orderRepository;

    public function __construct(OrderRepository $orderRepo)
    {
        $this->orderRepository = $orderRepo;
    }

    /**
     * Display a listing of the Order.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->orderRepository->pushCriteria(new RequestCriteria($request));
        $orders = Order::sortable()->paginate(10);

        return view('orders.index')
            ->with('orders', $orders);
    }

    /**
     * Show the form for creating a new Order.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $item = Item::where('id', $request->item_id)->first();
        return view('orders.create', compact('item'));
    }

    /**
     * Store a newly created Order in storage.
     *
     * @param CreateOrderRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderRequest $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'firstName' => 'required|min:3|max:30',
            'lastName' => 'required|min:3|max:30',
            'email' => 'required|string|email|max:30',
            'country' => 'required|string',
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

        $invoice = Invoice::create([
            'order_id' => $order->id,
            'customerName' => $customer->firstName . " " . $customer->lastName,
            'itemName' => $order->item->name,
            'itemPrice' => $order->item->price,
            'itemQuantity' => $order->quantity,
            'total' => $order->quantity * $order->item->price,
            'issue_date' => now()->subDays(mt_rand(1, 60))->format('Y-m-d'),
            'due_date' => now()->addDays(mt_rand(1, 99))->format('Y-m-d'),
        ]);

        $customer->totalRevenue += $invoice->total;
        $customer->save();

        Flash::success('Thank you for your order.');

        return redirect(route('invoices.show', $invoice->id));
    }

    /**
     * Display the specified Order.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $order = $this->orderRepository->findWithoutFail($id);

        if (empty($order)) {
            Flash::error('Order not found');

            return redirect(route('orders.index'));
        }

        return view('orders.show')->with('order', $order);
    }

    /**
     * Show the form for editing the specified Order.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $order = $this->orderRepository->findWithoutFail($id);

        if (empty($order)) {
            Flash::error('Order not found');

            return redirect(route('orders.index'));
        }

        return view('orders.edit')->with('order', $order);
    }

    /**
     * Update the specified Order in storage.
     *
     * @param  int              $id
     * @param UpdateOrderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderRequest $request)
    {
        $order = $this->orderRepository->findWithoutFail($id);

        if (empty($order)) {
            Flash::error('Order not found');

            return redirect(route('orders.index'));
        }

        $order = $this->orderRepository->update($request->all(), $id);

        Flash::success('Order updated successfully.');

        return redirect(route('orders.index'));
    }

    /**
     * Remove the specified Order from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
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
                ->orWhere('customer_id', 'LIKE', '%' . $q . '%')
                ->orWhere('item_id', 'LIKE', '%' . $q . '%')
                ->orWhere('quantity', 'LIKE', '%' . $q . '%')
                ->orWhere('created_at', 'LIKE', '%' . $q . '%')
                ->sortable()->paginate(10);
            Flash::success('Search results  "' . $q . '"');
        } else {
            $orders = Order::sortable()->paginate(10);
        }

        return view('orders.index', compact('orders', 'q'));
    }
}
