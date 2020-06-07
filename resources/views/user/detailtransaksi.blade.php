@extends('layout.admin')
@section('content')
<div class="content">
<div class="container">
    <div class="col-lg-12">
        <div class="panel-body">
            <div class="mt-5 form-group">
            


     
            <div class="col-xl-12 col-md-6 mb-1 mt-4 ">
                <div class="card border-left-primary shadow h-100 py-2 bg-primary text-white text-center">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div>
                                <center>
                                <h1>
                                    Tas Sewa otong
                                </h1>
                                </center>
                                </div>
                               
                            </div>
                            <div class="col-auto">
                            <svg class="bi bi-bag" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 001 1h10a1 1 0 001-1V5zM1 4v10a2 2 0 002 2h10a2 2 0 002-2V4H1z" clip-rule="evenodd"/>
                            <path d="M8 1.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                            </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-1 mt-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Nama Kamera</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Sony
                                </div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Seri</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">A9</div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Harga Sewa</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 300.000</div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Sewa</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <style>
                    .button {
                    background-color: #44A9D9; /* Green */
                    border: none;
                    color: white;
                    padding: 20px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 12px;
                    margin: 4px 1px;
                    cursor: pointer;
                    }

                    
                    .button {border-radius: 12px;}
                    
            </style>
        <div class="col-lg-12">
        <div class="row">

            <div class="col-xl-4 mt-5 form-group">
                <button class="botton button" type=" submit">Tambah Lagi
                </button>
            </div>

            <div class="mt-5 form-group">
                <button class="botton button" type=" submit">Checkout
                </button>
            </div>

        </div>
        </div>

        </div>
    </div>
</div>
</div>


@endsection

