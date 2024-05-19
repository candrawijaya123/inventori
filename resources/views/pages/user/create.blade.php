@extends('layouts.app', ['title' => 'Tambah User'])

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah User</h4>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="name">Nama User</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Isi Nama User..">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email"
                            placeholder="Isi Email User..">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-light">Batal</button>
                </form>
            </div>
        </div>
    </div>
@endsection
