@extends('app')

@section('htmlheader_title')
    Slides
@endsection

@section('content_header')
  <h1>
      Slides
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Slides</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Slides</h3>
          <div class="pull-right box-tools">
            <a href="{{ url('slides', 'create') }}"><button class="btn btn-info btn-sm" data-toggle="tooltip" title="Tambah Slide Baru">Add Slide</button></a>

            <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div><!-- /. tools -->
        </div><!-- /.box-header -->
        <div class="box-body">

        <div class="row">

          @foreach($slides as $slide)

          
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src="{{ asset('/file_upload/slides/') }}/{{ $slide->image }}" alt="...">
                <div class="caption">
                  <h3>{{ $slide->name }}</h3>
                  <p>
                     <div class="form-group">
                      {!! Form::open(['method' => 'DELETE', 'route' => ['slides.destroy', $slide->id]]) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("Are you sure you want to delete?")']) !!}

                      {!! Form::close() !!}
                    </div>
                  </p>
                </div>
              </div>
            </div>
          
           @endforeach

        </div>

        </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->

@endsection
