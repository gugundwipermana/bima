@extends('app')

@section('htmlheader_title')
    Slides
@endsection

@section('content_header')
  <h1>
      Create New Slides
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ url('slides') }}"><i class="fa fa-send"></i> Slides</a></li>
      <li class="active">New</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">

    <div class='box box-info'>
      <div class='box-header'>
        <h3 class='box-title'>CK Editor <small>Advanced and full of features</small></h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div><!-- /. tools -->
      </div><!-- /.box-header -->
      <div class='box-body pad'>

      <div class="register-box-body">
      
        @include('errors.list')

        {!! Form::open(['url' => 'slides', 'files' => true]) !!}

          @include('slides.form', ['submitButtonText' => 'Save'])

        {!! Form::close() !!}

      </div>

      </div>
    </div><!-- /.box -->

  </div><!-- /.col -->
</div><!-- /.row -->

@endsection
