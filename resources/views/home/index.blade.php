@extends('layouts.app-layout')

@section('content')
    <div class="bg-light p-5 pt-4 rounded">
		@auth
		<div class="container p-3 shadow">
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
						Actividad Propuesta
					</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
						Solución Desarrollada
					</button>
                </div>
            </nav>
            <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <embed src="{{URL::asset('/documents/prueba-laravel-whrtd.pdf')}}" type="application/pdf" width="100%" height="600px" />
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <embed src="{{URL::asset('/documents/solucion.pdf')}}" type="application/pdf" width="100%" height="600px" />
                </div>
            </div>
        </div>
		@endauth
        @guest
        <h1>Prueba Técnica</h1>
		<div class="container p-3 shadow">
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
						Actividad Propuesta
					</button>
                </div>
            </nav>
            <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <embed src="{{URL::asset('/documents/prueba-laravel-whrtd.pdf')}}" type="application/pdf" width="100%" height="600px" />
                </div>
            </div>
        </div>
        @endguest
    </div>
@endsection