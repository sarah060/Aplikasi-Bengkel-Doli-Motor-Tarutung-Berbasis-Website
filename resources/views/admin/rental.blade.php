<x-admin-layout>
    @section('title', 'Rental')
        
        <div class="page-header">
            <h1 class="page-title">Layanan</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Layanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rental</li>
                </ol>
            </div>
        </div>

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Rental</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                <thead class="border-top">
                                    <tr>
                                        <th class="bg-transparent border-bottom-0"
                                            style="width: 5%;">ID Pemesanan</th>
                                        <th
                                            class="bg-transparent border-bottom-0">
                                            Nama Lengkap</th>
                                        <th
                                            class="bg-transparent border-bottom-0">
                                            Tanggal Rental</th>
                                        <th
                                            class="bg-transparent border-bottom-0">
                                            Tanggal Pengembalian</th>
                                        <th
                                            class="bg-transparent border-bottom-0">
                                            Mobil</th>
                                        <th class="bg-transparent border-bottom-0"
                                            style="width: 10%;">Status</th>
                                        <th class="bg-transparent border-bottom-0"
                                            style="width: 5%;">Action</th>
                                        <th
                                            class="bg-transparent border-bottom-0">
                                            Nomor Telepon</th>
                                        <th
                                            class="bg-transparent border-bottom-0">
                                            Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($rental as $r)
                                    <tr class="border-bottom">
                                        <td class="text-center"><span class="mt-sm-2 d-block">{{ $r->id }}</span></td>
                                        <td class="text-center"><span class="mt-sm-2 d-block">{{ $r->namalengkap }}</span></td>
                                        <td class="text-center"><span class="mt-sm-2 d-block">{{ $r->tanggalrental }}</span></td>
                                        <td class="text-center"><span class="mt-sm-2 d-block">{{ $r->tanggalpengembalian }}</span></td>
                                        <td class="text-center"><span class="mt-sm-2 d-block">{{ $r->type }}</span></td>
                                        <td>
                                            <div class="mt-sm-1 d-block">
                                                <span class="badge 
                                                {{ $r->status == 'Disetujui' ? 'bg-success-transparent' : ($r->status == 'Ditolak' ? 'bg-danger-transparent' : 'bg-warning-transparent') }}
                                                rounded-pill 
                                                {{ $r->status == 'Disetujui' ? 'text-success' : ($r->status == 'Ditolak' ? 'text-danger' : 'text-warning') }}
                                                p-2 px-3">{{ $r->status }}</span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="g-2">
                                                <div class="btn-group mt-2 mb-2">
                                                    <button type="button" class="btn btn-google btn-pill dropdown-toggle" data-bs-toggle="dropdown">
                                                            <i class="fe fe-edit fs-14"></i> <span class="caret"></span>
                                                        </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="dropdown-plus-title">
                                                            Edit
                                                        </li>
                                                        <li><a href="{{ route('rental.update_status', [$r->id, 'Disetujui']) }}">Setujui</a></li>
                                                        <li><a href="{{ route('rental.update_status', [$r->id, 'Ditolak']) }}">Tolak</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group mt-2 mb-2">
                                                    <form action="{{ route('rental.destroy', $r->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-pinterest btn-pill">
                                                        <i class="fe fe-trash-2 fs-14"></i><span class="caret"></span>
                                                    </button>
                                                    </form>   
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center"><span class="mt-sm-2 d-block">{{ $r->nomortelepon }}</span></td>
                                        <td class="text-center"><span class="mt-sm-2 d-block">{{ $r->alamat }}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

</x-admin-layout>