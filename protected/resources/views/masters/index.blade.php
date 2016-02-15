@extends('app')

@section('htmlheader_title')
    Masters
@endsection

@section('content_header')
  <h1>
      Masters
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Masters</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Masters</h3>
          <div class="pull-right box-tools">
           
            <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div><!-- /. tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          

          @foreach($masters as $master)



          <div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Term of Use</a></li>
              <!-- <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sitemap</a></li> -->
              <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Privacy Policy</a></li>
              <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Sosial Media</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
                  
                <div class="form-group"><br/>
                  <div class="box box-default">
                  <div class="box-header with-border">
                    <i class="fa fa-globe"></i>
                    <h3 class="box-title">Term Of Site</h3>
                  </div><!-- /.box-header -->
                    <div class="box-body">
                      {!! $master->term !!}
                    </div>
                  </div>
                </div>

              </div>
<!-- 
              <div role="tabpanel" class="tab-pane" id="profile">

                <div class="form-group"><br/>
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-sitemap"></i>
                      <h3 class="box-title">Sitemap</h3>
                    </div><!-- /.box-header 
                    <div class="box-body">
                      {!! $master->sitemap !!}
                    </div>
                  </div>
                </div>


              </div>
               -->
              <div role="tabpanel" class="tab-pane" id="messages">
                
                <div class="form-group"><br/>
                  <div class="box box-default">
                      <div class="box-header with-border">
                        <i class="fa fa-cab"></i>
                        <h3 class="box-title">Privacy</h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        {!! $master->privacy !!}
                      </div>
                  </div>
                </div>

              </div>
              <div role="tabpanel" class="tab-pane" id="settings">
                <br/>
                <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-users"></i>
                      <h3 class="box-title">Sosial Media</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      {!! $master->facebook !!} <br/>
                      {!! $master->twitter !!}
                    </div>
                </div>
              </div>
            </div>

          </div>


          <a href="{{ url('masters', $master->id) }}/edit" class="btn btn-primary">Edit</a>



          @endforeach

          



        </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->

@endsection
