<x-app title="Inicio">

    <section class="container">
        @foreach ($products->groupBy('category.name') as $category => $categoryProducts)
            <div class="mb-4">
                <div class="d-inline ">
                    <h2 class="d-inline">{{ $category }}</h2>
                    <a class="d-inline text-decoration-none text-warning font-weight-bold" href="{{ route('products.productosPorCategoria', ['nameCategory' => $category]) }}">
                        <p class=" d-inline mx-4 font-weight-bold">Ver más</p>
                    </a>
                </div>
            </div>

            <div class="row">
                @foreach ($categoryProducts->splice(0, 4) as $product)
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
            </div>
        @endforeach
    </section>
</x-app>
