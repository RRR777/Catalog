<div class="wrapper">
    <section class="invoice">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> Laser Shop
                    <small class="pull-right">Date: {{ $invoice->issue_date->format('Y-m-d') }}</small>
                </h2>
            </div>
        </div>
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong>Laser Shop</strong><br>
                    Kaunas<br>
                    Lithuania<br>
                    Phone: (370) 678 80295<br>
                    Email: ritaj777@gmail.com
                </address>
            </div>
            <div class="col-sm-4 invoice-col">
                To
                <address>
                <strong>{{ $invoice->customerName }}</strong><br>
                    Country: {{ $invoice->order->customer->country }}<br>
                    Phone: <br>
                    Email: {{ $invoice->order->customer->email }}<br>
                </address>
            </div>
            <div class="col-sm-4 invoice-col">
                <b>Invoice #{{ substr(sprintf('%06d', $invoice->id),0,6) }}</b><br>
                <br>
                <b>Order ID:</b> {{ substr(sprintf('%04d', $invoice->order_id),0,4) }}<br>
                <b>Invoice Date:</b> {{ $invoice->issue_date->format('Y-m-d') }}<br>
                <b>Payment Due:</b> {{ $invoice->due_date->format('Y-m-d') }}<br>
                <b>Account:</b> ####.####.####
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $invoice->itemName }}</td>
                        <td>{{ $invoice->itemQuantity }}</td>
                        <td>{{ $invoice->itemPrice }}</td>
                        <td>{{ $invoice->total }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <p class="lead">Payment Methods:</p>
                <img src="{{ asset('/images/credit/visa.png') }}" alt="Visa">
                <img src="{{ asset('/images/credit/mastercard.png') }}" alt="Mastercard">
                <img src="{{ asset('/images/credit/american-express.png') }}" alt="American Express">
                <img src="{{ asset('/images/credit/paypal2.png') }}" alt="Paypal">
                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                </p>
          </div>
          <div class="col-xs-6">
              <p class="lead">Amount Due {{ $invoice->due_date->format('Y-m-d') }}</p>
              <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Subtotal (without tax):</th>
                            <td>{{ number_format(($invoice->total / 1.21), 2) }}</td>
                        </tr>
                        <tr>
                            <th>Tax (21%)</th>
                            <td>{{ number_format(($invoice->total * 21 / 100), 2) }}</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>{{ number_format($invoice->total, 2) }}</td>
                        </tr>
                    </table>
              </div>
          </div>
        </div>
    </section>
</div>
