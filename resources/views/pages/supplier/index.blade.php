@extends('layouts.app', ['title' => 'Daftar Supplier'])

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Supplier</h4>
                <a href="" class="btn btn-primary mb-3"><i class="mdi mdi-account-plus"></i>
                    Tambah Supplier</a>
                <table class="table table-striped" id="tbl-user">
                    <thead>
                        <tr>
                            <th> Nama Supplier </th>
                            <th> Telpon </th>
                            <th> Alamat </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td> {{ $supplier->nama_supplier }} </td>
                                <td> {{ $supplier->telpon }} </td>
                                <td> {{ $supplier->alamat }} </td>
                                <td> <a href="" class="btn btn-success btn-sm">
                                        <i class="mdi mdi-pencil-box mdi-18px"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm">
                                        <i class="mdi mdi-delete mdi-18px"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endSection
