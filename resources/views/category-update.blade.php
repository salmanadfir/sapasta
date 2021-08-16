@extends('layouts.main')
{{-- @section('title','Category')
@section('header')
<h1>Category</h1>
@endsection
@section('breadcrumb')
<li class="breadcrumb-item">Category</a></li>
<li class="breadcrumb-item active">Create Category</li>
@endsection --}}
@section('content')
<section class="content">
     {{-- <form method="POST" action="{{url('/home/create')}}" enctype="multipart/form-data"> --}}
        <form method="POST" action="{{url('/home/edit/')}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
    <div class="row">
        <div class="col-md-12">
          <div class="box">
{{-- @extends('layouts.newlayout')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
<div id="content">
    <article id="class" class="kartu">
        <section class="class">
           <div class="container">
            {{-- <div class="card-body"> --}}

                    <div class="form-group row">
                        <label for="nama_makanan" class="col-md-4 col-form-label text-md-right">Nama Makanan</label>

                        <div class="col-md-6">
                        <input id="nama_makanan" type="text" class="form-control" name="nama_makanan" required autocomplete="nama_makanan" autofocus value="{{$makanan->nama_makanan}}">

                            {{-- @error('nama_app')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="harga" class="col-md-4 col-form-label text-md-right">Harga</label>

                        <div class="col-md-6">
                            <input id="harga" type="text" class="form-control" name="harga" required autocomplete="harga" value="{{$$makanan->harga}}">

                            {{-- @error('url_app')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="detail" class="col-md-4 col-form-label text-md-right">Detail</label>

                        <div class="col-md-6">
                            <input id="detail" type="text" class="form-control" name="detail" required autocomplete="db_app" value="{{$$makanan->detail}}">

                            {{-- @error('url_app')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="buttonz">
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
