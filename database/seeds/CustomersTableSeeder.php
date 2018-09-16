<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Invoice;
use Faker\Factory;
use App\Models\Order;
use App\Models\Item;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1, 50) as $i) {
            $customer = Customer::create([
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'email' => $faker->unique()->email,
                'country' => $faker->randomElement(['Lithuania', 'Latvia', 'Estonia', 'Poland', 'Germany'])
            ]);
            foreach (range(1, mt_rand(2, 4)) as $j) {
                $order = Order::create([
                    'customer_id' => $customer->id,
                    'item_id' => rand(1, 3),
                    'quantity' => rand(1, 5)
                ]);

                $invoice = Invoice::create([
                    'order_id' => $order->id,
                    'customerName' => $order->customer->firstName . " " . $order->customer->lastName,
                    'itemName' => $order->item->name,
                    'itemPrice' => $order->item->price,
                    'itemQuantity' => $order->quantity,
                    'issue_date' => now()->subDays(mt_rand(1, 60))->format('Y-m-d'),
                    'due_date' => now()->addDays(mt_rand(1, 99))->format('Y-m-d'),
                    'total' => $order->quantity * $order->item->price
                ]);
                $customer->totalRevenue += $invoice->total;
                $customer->save();
            }
        }
    }
}
