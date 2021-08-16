@extends('layouts.main')
@section('content')
<section class="content">
    {{-- <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

      <a href="{{url('/home/tambah')}}" class="btn btn-block btn-primary" style="width: 200px;">Makanan</a><br>

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Makanan</h3>
          </div> --}}
          <div class="card" style="border-top: 3px solid #ff5a0b">
            <body>
            <div class="container mt-2">
            <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2>Data Category</h2>
            </div>
            <div class="pull-right mb-2">
            <a class="btn" style="background-color: #f76148;
            color: #fff" href="{{ url('/home/create') }}"> Create Category</a>
            </div>
            </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered" id="datatable-crud" cellspacing="3">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Nama Makanan</th>
                <th>Harga</th>
                <th>Detail</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($makanan as $m)
                <tr>
                  <td>{{$m->nama_makanan}}</td>
                  <td>{{$m->harga}}</td>
                  <td>{{$m->detail}}</td>
                  <td>
                    <a href="{{url('/home/detail/'.$m->id)}}" class="btn bg-purple btn-sm">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    {{-- <a href="{{route('category-update',[$m['id']])}}" class="btn btn-warning btn-sm">
                        <i class="fa fa-edit"></i>
                    </a> --}}
                    <form action="{{route('home',[$m['id']])}}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm" type="submit">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
                </td>
                    {{-- <a href="{{url('/home/edit/'.$m->id)}}" class="btn btn-warning btn-sm">
                          <i class="fa fa-edit"></i>
                      </a>
                    <form action="{{url('/home/'.$m->id)}}" method="POST" class="formDelete">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm" type="submit" >
                      <i class="fa fa-trash"></i>
                    </button>
                    </form> --}}
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          {{-- <div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div>
          <div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div> --}}
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
            </body>
  </div>

@endsection
