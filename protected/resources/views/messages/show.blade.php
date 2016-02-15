@extends('app')

@section('htmlheader_title')
    Message
@endsection

@section('content_header')
  <h1>
      {{ $message->subject }}
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ url('/messages') }}"><i class="fa fa-messages"></i> Message</a></li>
      <li class="active"><i class="fa fa-send"></i> {{ $message->subject }}</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Message</h3>
          <div class="pull-right box-tools">
           
            <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div><!-- /. tools -->
        </div><!-- /.box-header -->
        <div class="box-body">

        <!-- The time line -->
              <ul class="timeline">
                <!-- timeline time label -->
                <li class="time-label">
                  <span class="bg-red">
                    {{ $message->created_at }}
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-envelope bg-blue"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{ $message->created_at }}</span>
                    <h3 class="timeline-header"><a href="#">{{ $message->name }}</a> ({{ $message->email }})</h3>
                    <div class="timeline-body">
                      <h3>{{ $message->subject }}</h3>
                      {{ $message->messages }}
                    </div>
                    <div class="timeline-footer">
                      <span class="fa fa-phone"></span>  {{ $message->phone }}
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
              </ul>
          

        </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->

@endsection
