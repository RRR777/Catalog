<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Invoice;
use App\Repositories\InvoiceRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;

class InvoiceController extends AppBaseController
{
    private $invoiceRepository;

    public function __construct(InvoiceRepository $invoiceRepo)
    {
        $this->invoiceRepository = $invoiceRepo;
    }

    public function index(Request $request)
    {
        $this->invoiceRepository->pushCriteria(new RequestCriteria($request));
        $invoices = Invoice::sortable()->paginate(15);

        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(CreateInvoiceRequest $request)
    {
        $input = $request->all();

        $invoice = $this->invoiceRepository->create($input);

        Flash::success('Invoice saved successfully.');

        return redirect(route('invoices.index'));
    }


    public function show($id)
    {
        $invoice = $this->invoiceRepository->findWithoutFail($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        if (Auth::check() && Auth::user()->role->name == "Admin") {
            return view('invoices.show', compact('invoice'));
        } else {
            return view('invoices.show_frontend')->with('invoice', $invoice);
        }
    }

    public function edit($id)
    {
        $invoice = $this->invoiceRepository->findWithoutFail($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        return view('invoices.edit')->with('invoice', $invoice);
    }

    public function update($id, UpdateInvoiceRequest $request)
    {
        $invoice = $this->invoiceRepository->findWithoutFail($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        $invoice = $this->invoiceRepository->update($request->all(), $id);

        Flash::success('Invoice updated successfully.');

        return redirect(route('invoices.index'));
    }

    public function destroy($id)
    {
        $invoice = $this->invoiceRepository->findWithoutFail($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        $this->invoiceRepository->delete($id);

        Flash::success('Invoice deleted successfully.');

        return redirect(route('invoices.index'));
    }

    public function search(Request $request)
    {
        $q = $request->q;
        if (filled($q)) {
            $invoices = Invoice::where('id', 'LIKE', '%' . $q . '%')
                ->orWhere('order_id', 'LIKE', '%' . $q . '%')
                ->orWhere('customerName', 'LIKE', '%' . $q . '%')
                ->orWhere('itemName', 'LIKE', '%' . $q . '%')
                ->orWhere('itemPrice', 'LIKE', '%' . $q . '%')
                ->orWhere('itemQuantity', 'LIKE', '%' . $q . '%')
                ->orWhere('total', 'LIKE', '%' . $q . '%')
                ->orWhere('issue_date', 'LIKE', '%' . $q . '%')
                ->orWhere('due_date', 'LIKE', '%' . $q . '%')
                ->sortable()->paginate(10);
            Flash::success('Search results "' . $q . '"');
        } else {
            $invoices = Invoice::sortable()->paginate(10);
        }

        return view('invoices.index', compact('invoices', 'q'));
    }
}
