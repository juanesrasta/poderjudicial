@extends('layouts.app-layout')

@section('content')
<div class="bg-light p-5 pt-4 rounded">
<div class="d-flex justify-content-between mb-4 mt-4">
    <h3>Crear Producto</h3>
    <a class="btn btn-success btn-sm" href="{{ route('product.list') }}">Productos</a>
</div>

    @if(session()->has('success'))
        <label class="alert alert-success w-100">{{session('success')}}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{session('error')}}</label>
    @endif

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label>Nombre</label>
            <input 
                type="text" 
                name="product_name" 
                class="form-control" 
                placeholder="Nombre del producto"
                required>
        </div>
        <div class="row mb-4 mt-4">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Precio</label>
                            <input 
                                type="float" 
                                name="product_price" 
                                class="form-control" 
                                placeholder="Precio del producto"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Impuesto</label>
                            <input 
                                type="float" 
                                name="product_tax" 
                                class="form-control" 
                                placeholder="Impuesto al producto"
                                required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Foto del producto</label>
                            <input type="file" name="product_imagen" class="form-control" placeholder="Imagen del producto">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection