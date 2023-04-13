@extends('layouts.app-layout')

@section('content')
<div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
    @if ($message = Session::get('success'))
        <div class="p-4 mb-3 bg-green-400 rounded">
            <p class="text-green-800">{{ $message }}</p>
        </div>
    @endif
</div>
    <div class="bg-light p-3 rounded mt-4" >
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info panel-shadow">
	
                    <div class="panel-heading mb-2">
                        <h3>
                            Lista de Compra
                        </h3>
                    </div>
                    <div class="panel-body"> 
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>INC</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
								@php 
									$sum_total = 0;  
									$prod_total = 0;  
									$inc_total = 0;  
								@endphp

								@foreach ($cartItems as $item)
									@php
										$sum_total += number_format($item->price * $item->quantity, 2);
										$prod_total += $item->quantity;
										$inc_total += number_format($item->price * ($item->attributes->tax /100), 2) * $item->quantity;
									@endphp
									
                                <tr>
                                    <td><img src="{{URL::asset('/images/products/'.$item->attributes->image)}}" class="img-cart"></td>
                                    <td>
										<strong>{{$item->name}}</strong>
									</td>
                                    <td>
										<form action="{{ route('cart.update') }}" method="POST" class="d-inline-block">
											@csrf
											<span class="d-inline-block">
												<input 
													type="hidden" 
													name="id" 
													value="{{ $item->id}}" >
												<input 
													class="form-control" 
													type="number" 
													name="quantity"
													value="{{$item->quantity}}">
											</span>
											<button rel="tooltip" class="btn btn-default">
												<i class="fa fa-pencil"></i>
											</button>											
										</form>
										<form action="{{ route('cart.remove') }}" method="POST" class="d-inline-block">
											@csrf
											<input type="hidden" value="{{ $item->id }}" name="id">
											<button class="btn btn-primary"">
												<i class="fa fa-trash"></i>
											</button>
										</form>
                                    </td>
                                    <td>{{$item->price}}</td>
                                    <td><small style="color:silver; font-size:.7rem;">({{$item->attributes->tax}}%) = </small> {{number_format($item->price * ($item->attributes->tax /100), 2) * $item->quantity}}</td>
                                    <td>{{number_format($item->price * $item->quantity, 2)}}</td>
                                </tr>  
								@endforeach
								<tr>
                                    <td colspan="6">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-right">Productos</td>
                                    <td>{{$prod_total}}</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-right">Total INC</td>
                                    <td>{{$inc_total}}</td>
                                </tr>
								<tr>
                                    <td colspan="5" class="text-right">Sub Total</td>
                                    <td>{{number_format($sum_total,2)}}</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-right"><strong>Total</strong></td>
                                    <td>{{number_format($sum_total + $inc_total,2)}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                
                
				<div class="d-flex justify-content-between mt-4">
					<a href="{{ route('product.list') }}" class="btn btn-success">
						<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Ir a productos
					</a>
					<a href="{{ route('cart.shop') }}" class="btn btn-primary pull-right">Continuar
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>				
				</div>
			</div>
        </div>
    </div>
@endsection