@extends('layouts.app-layout')

@section('content')
    <div class="bg-light p-3 rounded mt-4" >
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info panel-shadow">
	
                    <div class="panel-heading mb-2">
                        <h3>
                            Orden de Compra
                        </h3>
                    </div>
                    <div class="panel-body"> 
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Fecha de compra</th>
                                <th>Cliente</th>
                                <th>Email cliente</th>
                                <th>Productos</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $dt)
								<tr>
                                    <td>
                                        {{$dt['created_at']}}
                                    </td>
                                    <td>
                                        {{$dt['username']}}
                                    </td>
                                    <td>
                                        {{$dt['email']}}
                                    </td>
                                    <td>
                                        @foreach ($dt['products'] as $product)
                                            <ul>
                                                <li>
                                                    <small>
                                                    {{$product['product_name']}} <span style="font-size:.7rem;">({{$product['quantity']}} x {{$product['price']}})<span>
                                                    </small>
                                                </li>
                                            </ul>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a style="padding: 3px;" target="_blank" href="{{ route('order.generate', ['order' => $dt['order_id']]) }}" class="btn btn-success">
                                            Generar Factura
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                
                
				<div class="d-flex justify-content-between mt-4">
				</div>
			</div>
        </div>
    </div>
@endsection