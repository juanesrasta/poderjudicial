@extends('layouts.app-layout')

@section('content')
    <div class="bg-light p-5 pt-4 rounded">
        @auth
        <h1>Perfil Laboral</h1>
        <div class="container p-3 shadow">
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Hoja de vida</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Portafolio</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Mi Web Site</button>
                </div>
            </nav>
            <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <embed src="{{URL::asset('/documents/CV.pdf')}}" type="application/pdf" width="100%" height="600px" />
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <embed src="{{URL::asset('/documents/PORTAFOLIO.pdf')}}" type="application/pdf" width="100%" height="600px" />
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <iframe width="100%" height="600px" src="http://localhost/poderjudicial/public/documents/analisisit"></iframe>
                </div>
            </div>
        </div>
        @endauth
    </div>
@endsection