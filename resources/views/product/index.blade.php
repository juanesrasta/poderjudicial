@extends('layouts.app-layout')
@section('content')

    <div class=" container-fluid d-flex justify-content-between mt-4">
        <h3>Productos</h3>
        @if(auth()->user()->role_id == 1)
        <a class="btn btn-success btn-sm" href="{{ route('product.create') }}">Nuevo Producto</a>
        @endif
    </div>

    @if(session()->has('success'))
        <label class="alert alert-success w-100">{{session('success')}}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{session('error')}}</label>
    @endif

    @foreach($products as $product)
        <div class="container-fluid ">
        <div class="card col-sm-4 " id="card">
            <div class="row justify-content-center">
                <img src="{{URL::asset('/images/products/'.$product->product_imagen)}}" class="card-img-top" alt="...">
            </div>
            <div class="card-body mt-2" >
                <h5 class="card-title">{{$product->product}}</h5>
                <p class="card-text">Precio {{$product->price}}</p>
                <small class="card-text" style="color:red">Impuesto {{$product->tax}}%</small>
                <div class="row justify-content-center mt-4" >
                    <div class="col-sm-8">
					
						<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<input type="hidden" value="{{ $product->id }}" name="id">
							<input type="hidden" value="{{ $product->product }}" name="name">
							<input type="hidden" value="{{ $product->price }}" name="price">
							<input type="hidden" value="{{ $product->tax }}" name="tax">
							<input type="hidden" value="{{ $product->product_imagen }}"  name="image">
							<input type="hidden" value="{{ auth()->user()->id }}"  name="user_id">
							<input type="hidden" value="1" name="quantity">
							<button class="btn btn-primary ">
							Agregar <i class="fa-solid fa-cart-shopping"></i>
							</button>
						</form>	
                    </div>
                    @if(auth()->user()->role_id == 1)
                    <div class="col-sm-4">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('product.edit',['id' => $product->id]) }}">Editar</a>
                            <a class="dropdown-item">
                                <form 
                                    action="{{ route('product.remove', ['id' => $product->id]) }}" 
                                    method="POST" class="d-inline-block">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>
                            </a>
                            
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection