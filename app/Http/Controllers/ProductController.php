<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Helpers\Tools;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        if(count($products)>0){
            return view('product.index', compact('products'));
        }else{
            return redirect()->route('product.create');
        }
        
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_tax' => 'required',
        ]);
        
        $imageName = time().'-'.$_FILES['product_imagen']['name'];

        Product::create([
            'product' => $request->product_name,
            'price' => $request->product_price,
            'tax' => $request->product_tax,
            'product_imagen' => $imageName,
        ]);

        $tools = Tools::upload_file(public_path("images/products"), $imageName, $_FILES);
        
        return redirect()->route('product.create')
        ->with('success','Se ha creado el producto.');

    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_tax' => 'required',
        ]);

        $product = Product::find($id);
        $product->product = $request->product_name;
        $product->price = $request->product_price;
        $product->tax = $request->product_tax;
        if(isset($_FILES['product_imagen']['name']) && !empty($_FILES['product_imagen']['name'])){
            $imageName = time().'-'.$_FILES['product_imagen']['name'];
            $tools = Tools::upload_file(public_path("images/products"), $imageName, $_FILES);
            $product->product_imagen = $imageName;
        }
        $product->save();
        
        return redirect()->back()->with('success', 'Producto actualizado.');
    
    }

    public function destroy($id){
        
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->back();
    }
	
	public function candidato(){
		return view('home.candidato');
	}
}
