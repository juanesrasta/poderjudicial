<header class="p-3 bg-dark text-white">
    <div class="container-fluid">
		<div class="row">
		<div class="col-sm-8 d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto ">
			@auth
			<li>
				<a href="{{ route('home.index') }}" class="nav-link px-2 text-secondary">
					Inicio
				</a>
			</li>
			<li>
				<a href="{{ route('home.candidato') }}" class="nav-link px-2 text-white">
					Candidato
				</a>
			</li>
			<li>
				<a href="{{ route('product.list') }}" class="nav-link px-2 text-white">
					Productos
				</a>
			</li>
			@if(auth()->user()->role_id == 1)
			<li>
				<a href="{{ route('order.list') }}" class="nav-link px-2 text-white">
					Compras
				</a>
			</li>
			@endif
			@endauth
        </ul>
	</div>
	
	<div class="col-sm-4 float-right ">
		@auth
			<div class="btn-group" style="float: right">
				<button type="button" class="btn btn-outline-light">{{auth()->user()->username}}</button>
				<button type="button" class="btn btn-outline-light me-2 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
					<span class="visually-hidden">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu">
					<li>
						<a href="{{ route('logout.perform') }}" class="dropdown-item">Salir</a>
					</li>
				</ul>
			</div>
			<a href="{{ route('cart.list') }}" style="float: right; margin-right:4%; margin-top:3%">
				<span class="text-red-700">{{ Cart::getTotalQuantity()}}</span>
				<i class="fa-solid fa-cart-shopping"></i>
			</a>
		@endauth
		@guest
		<div class="text-end">
		  <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Iniciar Sesión</a>
		  <a href="{{ route('register.perform') }}" class="btn btn-warning">Registrarse</a>
		</div>
	  @endguest
	</div>
</div>
 
    </div>
  </header>