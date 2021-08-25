<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-product">
                <div class="card-body">
                    <img src="{{ url('assets/sepatu') }}/{{ $product->gambar }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2><strong>{{ $product->nama }}</strong></h2>
            <h5>
                Rp. {{ number_format($product->harga) }}
                @if($product->is_ready == 1)
                <span class="badge badge-success"> <i class="fas fa-check"></i> Ready Stok</span>
                @else
                <span class="badge badge-danger"> <i class="fas fa-times"></i> Stok Habis</span>
                @endif
            </h5>
            <hr>

            <div class="row">
                <div class="col">
                    <form wire:submit.prevent="masukkanKeranjang">
                    <table class="table" style="border-top : hidden">
                    <tr>
                        <td>Jenis</td>
                        <td>:</td>
                        <td>{{ $product->jenis }} </td>
                    </tr>
                    <tr>
                        <td>Berat</td>
                        <td>:</td>
                        <td>{{ $product->berat }} Kg</td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td>
                            <input id="jumlah_pesanan" type="text" class="form-control @error('jumlah_pesanan') is-invalid @enderror" wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" autofocus>

                                @error('jumlah_pesanan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" wire:model="nomor">
                                    <option value="0" {{old('nomor') == 0 ? 'selected' : ''}}>Pilih</option>
                                    <option value="39" {{old('nomor') == 39 ? 'selected' : ''}}>39</option>
                                    <option value="40" {{old('nomor') == 40 ? 'selected' : ''}}>40</option>
                                    <option value="41" {{old('nomor') == 41 ? 'selected' : ''}}>41</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit" class="btn btn-success btn-block" @if($product->is_ready !== 1) disabled @endif>Masukkan Keranjang</button>
                        </td>
                    </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>