<x-admin-layout>
    @section('title', 'Add Shop')
    
    <div class="page-header">
        <h1 class="page-title">Tambahkan Barang</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Shop</li>
            </ol>
        </div>
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12">
            @if($data->id)
            <form method="POST" class="card" action="{{ route('shop.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-header">
                    <h3 class="card-title">Detail Barang</h3>
                </div>
                <div class=" card-body">
                    <div class="form-group">
                        <label for="namabarang" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $data->nama }}" id="exampleInputEmail1" placeholder="Nama Barang" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-0">Gambar</label>
                        <input class="form-control @error('gambar') is-invalid @enderror" type="file" value="{{ $data->gambar }}" name="gambar" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="hargabarang" class="form-label">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $data->harga }}" id="exampleInputEmail1" placeholder="Harga Barang" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="stockbarang" class="form-label">Stock</label>
                        <input type="text" name="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ $data->stok }}" id="exampleInputEmail1" placeholder="Stock Barang" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">                    
                    <button type="submit"  class="btn btn-primary" style="display: block; margin: 0 auto; width: 100px; height: 40px;">Edit</button>                    
                  </div>
                {{-- <button class="btn btn-primary" style="width: 100px; height: 50px;">Submit</button> --}}
            </form>
            @else
            <form method="POST" class="card" action="{{ route('shop.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h3 class="card-title">Detail Barang</h3>
                </div>
                <div class=" card-body">
                    <div class="form-group">
                        <label for="namabarang" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" placeholder="Nama Barang" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-0">Gambar</label>
                        <input class="form-control @error('gambar') is-invalid @enderror" type="file" name="gambar" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="hargabarang" class="form-label">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" id="exampleInputEmail1" placeholder="Harga Barang" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="stockbarang" class="form-label">Stock</label>
                        <input type="text" name="stok" class="form-control @error('stok') is-invalid @enderror" id="exampleInputEmail1" placeholder="Stock Barang" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">                    
                    <button type="submit"  class="btn btn-primary" style="display: block; margin: 0 auto; width: 100px; height: 40px;">Tambahkan</button>                    
                  </div>
                {{-- <button class="btn btn-primary" style="width: 100px; height: 50px;">Submit</button> --}}
            </form>
            @endif
        </div>
    </div>
</x-admin-layout>