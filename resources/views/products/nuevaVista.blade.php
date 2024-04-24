<x-app title="Inicio">
    <section class="container">
		<div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <a><img src="{{ $product->file->route }}" class="card-img-top" alt="Portada producto"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">${{ $product->price }}</p>
                            </div>
                        </div>
                    </div>
              @endforeach
    </section>
</x-app>
