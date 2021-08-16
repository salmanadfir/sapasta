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
     <form method="POST" action="{{url('/home/create')}}" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
<div class="judul">
    <h2 class="page-header"><center>{{$makanan->nama_makanan}}</center></h2>
</div>

<div id="content">
    {{-- <article id="class" class="kartu"> --}}
        <section class="class">
                {{-- < class="card-body">--}}

                    <div class="form-group row">
                        <label for="harga" class="col-md-4 col-form-label text-md-right">Harga</label>

                        <div class="col-md-6">
                            <p class="form-control">{{$makanan->harga}}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="detail" class="col-md-4 col-form-label text-md-right">Detail</label>

                        <div class="col-md-6">
                            <p class="form-control">{{$makanan->detail}}</p>
                        </div>
                    </div>
                <br><br>

                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>
                  </div>
            </div>
@endsection
