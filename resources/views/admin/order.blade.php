<x-admin-layout>
    @section('title', 'Order')
    
    <div class="page-header">
        <h1 class="page-title">Order</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Order</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                            <thead>
                                <tr>
                                    <th>ID Pesanan</th>
                                    <th>Nama Pemesan</th>
                                    <th>Harga Pesanan</th>
                                    <th>Bukti Pembayaran</th>
                                <th name="bstable-actions">Actions</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bella</td>
                                    <td>Chloe</td>
                                    <td>System Developer</td>
                                    <td style="text-align: center;">
                                        <div class="mini-cart-img">
                                            <a><img src="{{ asset('app-assets/images/rental/avanzalama.png') }}" alt="Image" style="max-width: 200px; max-height: 200px;"></a>
                                            <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                                        </div>
                                    </td>
                                    <td name="bstable-actions">
                                        <div class="btn-list">
                                            <div class="btn-group mt-2 mb-2" data-bs-toggle="dropdown">
                                                <button id="bEdit" type="button" class="btn btn-sm btn-primary">
                                                    <span class="fe fe-edit"> </span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li class="dropdown-plus-title">
                                                        Edit
                                                    </li>
                                                    <li><a href="javascript:void(0)">Setujui</a></li>
                                                    <li><a href="javascript:void(0)">Tolak</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group mt-2 mb-2 ms-2">
                                            <button id="bDel" type="button" class="btn  btn-sm btn-danger">
                                                <span class="fe fe-trash-2"> </span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>