<div class="container">
    <div class="banner">
        <img src="{{ url('assets/slider/slider2.png')}}" alt="">
    </div>

    {{-- Product --}}
    <section class="pilih-product mt-5 mb-5">
        <h3><strong>Products</strong></h3>
        <div class="row mt-4">
            @foreach ($products as $product )
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/sepatu') }}/{{ $product->gambar }}">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h5><strong>{{ $product->nama }}</strong></h5>
                                    <h5>Rp. {{ number_format($product->harga) }}</h5>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <a href="{{ route('products.detail', $product->id)}}" class="btn btn-dark btn-block">Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
