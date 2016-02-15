@extends('app')

@section('htmlheader_title')
    Abouts
@endsection

@section('content_header')
  <h1>
      Abouts
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Abouts</li>
  </ol>
@endsection


@section('main-content') 

<div class="row">
  <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Abouts</h3>
          <div class="pull-right box-tools">
            
            <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div><!-- /. tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          
            <div class="row">

            {{--*/ $title[0] = trans('dashboard.about_us') /*--}}
            {{--*/ $title[1] = trans('dashboard.vision') /*--}}
            {{--*/ $no_title = 0 /*--}}
            @foreach($abouts as $about)

            <?php
                $title_baru = explode('indogdp', $about->title);
                $des_baru = explode('indogdp', $about->description);
            ?>

            <div class="col-xs-6 col-md-6 ">
              <div class="box box-default">
                  <div class="box-header with-border">
                    <i class="fa fa-users"></i>
                    <h3 class="box-title">{{ $title[$no_title] }}</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <h2>{{ $title_baru[0] }}</h2>
                    {!! $des_baru[0] !!}

                    <br/><br/>
                    <h2>{{ $title_baru[1] }}</h2>
                    {!! $des_baru[1]  !!}
                  </div>
                  <div class="box-footer">
                    <div class="form-inline">
                  <div class="form-group">
                    <a href="{{ url('abouts', $about->id) }}/edit" class="btn btn-primary">Edit</a>
                      </div>
                      <!-- <div class="form-group">
                        {!! Form::open(['method' => 'DELETE', 'route' => ['abouts.destroy', $about->id]]) !!}

                          {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

                        {!! Form::close() !!}
                      </div> -->
                    </div>
                  </div>
                </div>
            </div>

            {{--*/ $no_title++ /*--}}
            @endforeach

            </tr>

          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->

@endsection
