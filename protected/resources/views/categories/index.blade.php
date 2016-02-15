@extends('app')

@section('htmlheader_title')
    Categories
@endsection

@section('content_header')
  <h1>
      Categories
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Categories</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Categories</h3>
          <div class="pull-right box-tools">
            <a href="{{ url('categories', 'create') }}"><button class="btn btn-info btn-sm" data-toggle="tooltip" title="Tambah Category Baru">Add Category</button></a>

            <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div><!-- /. tools -->
        </div><!-- /.box-header -->
        <div class="box-body">

          
         
          @foreach(array_chunk($categories->all(), 4) as $row)

           <div class="row">

            @foreach($row as $category)

            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="{{ asset('/file_upload/') }}/{{ $category->image }}" alt="...">
                <div class="caption">
                  <h3>{{ $category->firstname }} {{ $category->lastname }}</h3>
                  <p>
                     <div class="form-inline">
                        <div class="form-group">
                          <a href="{{ url('categories', $category->id) }}/edit" class="btn btn-primary btn-xs">Edit</a>
                        </div>
                        <div class="form-group">
                          {!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->id]]) !!}

                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("Are you sure you want to delete?")']) !!}

                          {!! Form::close() !!}
                        </div>
                      </div>
                    </td>
                  </p>
                </div>
              </div>
            </div>

            @endforeach

          </div>

          @endforeach
         
        </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->

@endsection
