<x-app title="Categorias">
    <section class="container">
        <div class="d-flex justify-content-center my-4">
            <h1></h1>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
				<div class="m-2">
                <a><img src="{{ $product->file->route }}" class="card-img-top" alt="Portada producto"></a>
				</div>
                <div class="card-body">
                    <h3 class="card-title">{{ $product->title }}</h3>
					<p>{{$product->description}}</p>
                    <p class="card-text">${{ number_format($product->price) }}</p>
					<p>{{$product->stock}} Unidad(es)</p>
					<form action="{{route('add')}}" method="post">
						@csrf
					<input type="hidden" name="id" value="{{$product->id}}">
					<input type="submit" name="btn" class="btn btn-primary w-100" value="Añadir al carrito">
					</form>
                </div>
            </div>
        </div>

    </section>
</x-app>
