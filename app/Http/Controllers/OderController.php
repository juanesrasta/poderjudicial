<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Order;

use App\Models\Shop;

use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class OderController extends Controller
{
    public function index(){

        $orders = Order::all();
        
        if(count($orders)>0){
            $data = [];
            foreach($orders as $ord){
                $data[] = array(
                    'order_id'=> $ord->id,
                    'user_id'=> $ord->user_id,
                    'created_at'=> $ord->created_at,
                    'username'=> User::findOrFail($ord->user_id)->username,
                    'email'=> User::findOrFail($ord->user_id)->email,
                    'products' => Shop::select(
                        "product_name", "price", "quantity", "tax"
                        )->where('order_id', $ord->id)->get(),
                );
            }

        }

        return view('order.index', compact('data'));
        
    }

    public function generateInvoice(Order $order){

        $buyer = User::findOrFail($order->user_id);
        $customer = new Buyer([
            'name'          => $buyer->username,
            'custom_fields' => [
                'email' => $buyer->email,
            ],
        ]);

        $seller = new Buyer([
            'name'          => 'Poder Judicial Virtual México',
            'custom_fields' => [
                'email' => 'poderjudicialvirtual@gmail.com',
            ],
        ]);

        $shops = Shop::select("product_name", "price", "quantity", "tax")->where('order_id', $order->id)->get();

        foreach($shops as $product){
            $items[] = (new InvoiceItem())
                ->title($product['product_name'])
                ->pricePerUnit($product['price'])
                ->quantity($product['quantity'])
                ->tax($product['tax'], true)
                ;
        }        

        $invoice = Invoice::make()
            ->buyer($customer)
            ->seller($seller)
            ->currencySymbol('$')
            ->currencyCode('$')
            ->discountByPercent(0)
            //->taxRate()
            //->shipping(1.99)
            ->addItems($items);

            return $invoice->stream();
    }
}
