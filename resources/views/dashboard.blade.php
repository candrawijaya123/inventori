@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
    <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="mdi mdi-package mb-2 icon-md text-dark"></i>
                        <h4 class="text-dark">0 Barang</h4>
                        <h5>Total Barang</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="mdi mdi-package-down mb-2 icon-md text-danger"></i>
                        <h4 class="text-danger">0 Barang</h4>
                        <h5>Total Penerimaan Barang</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="mdi mdi-package-up mb-2 icon-md text-primary"></i>
                        <h4 class="text-primary">0 Barang</h4>
                        <h5>Total Pengeluaran Barang</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection
