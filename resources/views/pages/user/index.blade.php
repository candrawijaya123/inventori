@extends('layouts.app', ['title' => 'Daftar User'])

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar User</h4>
                <a href="" class="btn btn-primary mb-3"><i class="mdi mdi-account-plus"></i>
                    Tambah User</a>
                <table class="table table-striped" id="tbl-user">
                    <thead>
                        <tr>
                            <th> Nama </th>
                            <th> Email </th>
                            <th> Role </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Chandra Wijaya </td>
                            <td> 0V5v8@example.com </td>
                            <td> Admin </td>
                            <td> <a href="" class="btn btn-success btn-sm">
                                    <i class="mdi mdi-pencil-box mdi-18px"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm">
                                    <i class="mdi mdi-delete mdi-18px"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endSection
