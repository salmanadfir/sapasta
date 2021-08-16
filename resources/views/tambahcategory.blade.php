@extends('layouts.main')
@section('content')
@include('sweetalert::alert')
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
<div id="content">
    <article id="class" class="kartu">
        <section class="class">
           <div class="container">
            {{-- <div class="card-body"> --}}
            <form method="POST" action="{{url('/home/create')}}" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('patch') --}}

                    <div class="form-group row">
                        <label for="nama_makanan" class="col-md-4 col-form-label text-md-right">Nama Makanan</label>

                        <div class="col-md-6">
                            <input id="nama_makanan" type="text" class="form-control" name="nama_makanan" required autocomplete="nama_makanan" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="harga" class="col-md-4 col-form-label text-md-right">Harga</label>

                        <div class="col-md-6">
                            <input id="harga" type="text" class="form-control" name="harga" required autocomplete="harga">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="detail" class="col-md-4 col-form-label text-md-right">Detail</label>

                        <div class="col-md-6">
                            <select name="detail" id="detail" class="form-control" required autocomplete="detail">
                                <option value="Spagetthi Saus Bolognese">Spagetthi Saus Bolognese</option>
                                <option value="Fetucini">Fetucini</option>
                                <option value="Lasagna">Lasagna</option>
                                <option value="Makaroni Pasta">Makaroni Pasta</option>
                                <option value="Carbonara">Carbonara</option>
                            </select>
                        </div>
                    </div>

                    <div class="buttonz">
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Tambah') }}
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
