@extends('layouts.main')
@section('content')
<section class="content">
    <div class="card" style="border-top: 3px solid #ff5a0b">
        <body>
        <div class="container mt-2">
        <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
<center>
    <h1 style="color: #fa6900">{{ __('Video Tutorial Membuat Pasta') }}</h1>
</center>
<div class="card-body">
    <table class="table table-bordered" id="datatable-crud" cellspacing="3">
<table id="example2" class="table table-bordered table-hover">
  <thead>
  <tr>
    <th>Judul Tutorial Resep</th>
    <th>Link Video</th>
  </tr>
  </thead>
  <tbody>
    <tr>
        <td><h6>Resep Spaghetti Bolognese</h6></td>
        <td><iframe width="450" height="250" src="https://www.youtube.com/embed/OieOiiHCa-w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
    </tr>
    <tr>
        <td><h6>Resep Pasta Fettucini Carbonara</h6></td>
        <td><iframe width="450" height="250" src="https://www.youtube.com/embed/sBx-vf5pP_w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
    </tr>
    <tr>
        <td><h6>Resep Lasagna</h6></td>
        <td><iframe width="450" height="250" src="https://www.youtube.com/embed/dE87LJR0ULE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
    </tr>
    <tr>
        <td><h6>Resep Makaroni Pasta</h6></td>
        <td><iframe width="450" height="250" src="https://www.youtube.com/embed/MjsD54K-BVg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</body>
</div>
@endsection
