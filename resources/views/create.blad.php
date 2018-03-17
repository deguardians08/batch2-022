@extends('template',['title'=>'Tambah Data Users'])
@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data Users
        </div>
        <div class="card-body">
            @include('errors.validation')
            <form action="{{URL('users')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="{{old('username')}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="{{old('nama')}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{old('stock')}}">
                    </div>
                </div>

                <div class="form-group">
                    <label>Profile</label>
                    <input type="file" name="profile" class="form-control">
                </div>

                <div class="text-right">
                    <a href="{{url('users')}}" class="btn btn-danger">
                        <i class="fa fa-times"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="far fa-save"></i> Save Data
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
