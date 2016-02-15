@extends('app')

@section('htmlheader_title')
    Products
@endsection

@section('content_header')
  <h1>
      Messages
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Messages</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-2">
              <!-- <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Compose</a> -->
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Folders</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">

                    {{--*/ $jum = 0 /*--}}
                      @foreach($messages as $message)

                      {{--*/ $jum++ /*--}}
                      @endforeach

                    <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-primary pull-right">{{ $jum }}</span></a></li>
                    <!-- <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                    <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                    <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a></li>
                    <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li> -->
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              
            </div><!-- /.col -->
            <div class="col-md-10">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Inbox</h3>
                  <div class="box-tools pull-right">
                    <div class="has-feedback">
                      <!-- <input type="text" class="form-control input-sm" placeholder="Search Mail"> -->
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  
                  <div class="table-responsive mailbox-messages">
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th></th>
                        <th></th>
                        <th style="width: 100px"></th>
                      </tr>
                    </thead>
                      <tbody>

                      {{--*/ $no = 1 /*--}}
                      @foreach($messages as $message)

                      
                        <tr>
                          <td><!-- <input type="checkbox"> -->{{ $no }}</td>
                          <!-- <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td> -->
                          <td class="mailbox-name">{{ $message->name }}<br/><a href="read-mail.html">{{ $message->email }}</a></td>
                          <td class="mailbox-subject">{!! str_limit($message->messages, $limit = 50, $end = '...') !!}</td>
                          <td class="mailbox-date">
                            <?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($message->created_at))->diffForHumans() ?>
                          </td>
                          <td>
                              

                              <div class="form-inline">
                                <div class="form-group">
                                  <a href="{{ url('messages') }}/{{ $message->id }}" class="btn btn-primary btn-xs">Lihat</a>
                                </div>
                                <div class="form-group">
                                  {!! Form::open(['method' => 'DELETE', 'route' => ['messages.destroy', $message->id]]) !!}

                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("Are you sure you want to delete?")']) !!}

                                  {!! Form::close() !!}
                                </div>
                              </div>

                          </td>
                        </tr>

                      {{--*/ $no++ /*--}}
                      @endforeach
                        
                      </tbody>
                    </table><!-- /.table -->
                    </div>

                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <!-- <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button> -->
                    <div class="btn-group">
                      <!-- <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button> -->
                      <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                    </div><!-- /.btn-group -->
                    <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                    <div class="pull-right">
                      
                    </div><!-- /.pull-right -->
                  </div>
                </div>
              </div><!-- /. box -->


            @foreach($factories as $factory)
            
            <div class="row">

              <div class="col-xs-12 col-md-12 ">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-file-text-o"></i>
                      <h3 class="box-title">Description</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                      <?php
                          $title_baru = explode('indogdp', $factory->title_signup);
                          $des_baru = explode('indogdp', $factory->description);
                      ?>


                      <h2>{{ $title_baru[0] }}</h2>
                      {!! $des_baru[0] !!}

                      <br/>

                      <h2>{{ $title_baru[1] }}</h2>
                      {!! $des_baru[1] !!}


                      <div class="form-inline">
                        <div class="form-group">
                          <a href="{{ url('messages', $factory->id) }}/editdes" class="btn btn-primary">Edit</a>
                        </div>
                        <!-- <div class="form-group">
                          {!! Form::open(['method' => 'DELETE', 'route' => ['factories.destroy', $factory->id]]) !!}

                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

                          {!! Form::close() !!}
                        </div> -->
                      </div>
                    </div>
                </div>
              </div>
            </div>

              

            @endforeach


            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

    </div><!-- /.col -->

  </div><!-- /.row -->

@endsection
