<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shop;

use App\Models\Order;

class CartController extends Controller
{
    public function cartList()
    {
		
        $cartItems = \Cart::getContent();
        // dd($cartItems);
		return view('cart.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
                'tax' => $request->tax,
                'user_id' => $request->user_id,
            )
        ]);
        
		//session()->flash('success', 'Se agregó al carrito !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        //session()->flash('success', 'Producto actualizado !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        
		//session()->flash('success', 'Producto eliminado !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        //session()->flash('success', 'Se ha limpiado la lista de compras !');

        return redirect()->route('cart.list');
    }
	
	public function shop(){
		
		$items = \Cart::getContent();
		
		$user_id = auth()->user()->id;
		
		if($items){
			$order = Order::create([
				'user_id' => $user_id,
			]);
			foreach($items as $row) {
				
				Shop::create([
					'order_id' => $order->id,
					'product_id' => $row->id,
					'product_name' => $row->name,
					'quantity' => $row->quantity,
					'price' => $row->price,
					'tax' => $row->attributes['tax'],
					'product_imagen' => $row->attributes['image'],
				]);
			}
		}
		
		session()->flash('success', 'Se ha generado su orden de compra !');
		$this->clearAllCart();
        return redirect()->route('cart.list');
	}
}
