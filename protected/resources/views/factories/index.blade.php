@extends('app')

@section('htmlheader_title')
    Factories
@endsection

@section('content_header')
  <h1>
      Factories
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Factories</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Factories</h3>
          <div class="pull-right box-tools">
            
            <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div><!-- /. tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          

            @foreach($factories as $factory)

            
            <div class="row">

            <div class="col-xs-6 col-md-6 ">
              <div class="box box-default">
                  <div class="box-header with-border">
                    <i class="fa fa-crosshairs"></i>
                    <h3 class="box-title">Maps</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    Lat. {{ $factory->latitude }}<br/>
                    Long. {{ $factory->longitude }}
                  </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-6 ">
              <div class="box box-default">
                  <div class="box-header with-border">
                    <i class="fa fa-street-view"></i>
                    <h3 class="box-title">Factory Stores</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    {!! $factory->factory_stores !!}
                  </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-6 ">
              <div class="box box-default">
                  <div class="box-header with-border">
                    <i class="fa fa-clock-o"></i>
                    <h3 class="box-title">Open Hour</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    {!! $factory->open_hour !!}
                  </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-6 ">
              <div class="box box-default">
                  <div class="box-header with-border">
                    <i class="fa fa-mobile-phone"></i>
                    <h3 class="box-title">Contact</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    {!! $factory->contact !!}
                  </div>
                </div>
            </div>

            </div>

            <div class="form-inline">
                  <div class="form-group">
                    <a href="{{ url('factories', $factory->id) }}/edit" class="btn btn-primary">Edit</a>
                  </div>
                  <!-- <div class="form-group">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['factories.destroy', $factory->id]]) !!}

                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

                    {!! Form::close() !!}
                  </div> -->
                </div>

            @endforeach

        </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->

@endsection
