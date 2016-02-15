

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
      <br/>
      <div class="form-group">
        <label for="exampleInputEmail1">Term of Use English</label>

        {!! Form::textarea('term1', null, ['id' => 'editor1', 'rows' => '10', 'cols' => '80']) !!}
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Term of Use Bahasa Indonesia</label>

        {!! Form::textarea('term2', null, ['id' => 'editor2', 'rows' => '10', 'cols' => '80']) !!}
      </div>

    </div>
<!-- 
    <div role="tabpanel" class="tab-pane" id="profile">

      <div class="form-group">
        <label for="exampleInputEmail1">Sitemap</label>

        {!! Form::textarea('sitemap', null, ['id' => 'editor2', 'rows' => '10', 'cols' => '80']) !!}
      </div>


    </div> -->

    <div role="tabpanel" class="tab-pane" id="messages">
      <br/>
      <div class="form-group">
        <label for="exampleInputEmail1">Privacy Policy English</label>

        {!! Form::textarea('privacy1', null, ['id' => 'editor3', 'rows' => '10', 'cols' => '80']) !!}
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Privacy Policy Bahasa Indonesia</label>

        {!! Form::textarea('privacy2', null, ['id' => 'editor4', 'rows' => '10', 'cols' => '80']) !!}
      </div>

    </div>


    <div role="tabpanel" class="tab-pane" id="settings">
      
      <div class="form-group">
        {!! Form::label('facebook', 'Facebook') !!}

        {!! Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'http://www.facebook.com/YOUR FB']) !!}

        <p class="help-block">Masukan alamat facebook.</p>
      </div>

      <div class="form-group">
        {!! Form::label('twitter', 'Twitter') !!}

        {!! Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => 'http://www.twitter.com/YOUR TWITTER']) !!}

        <p class="help-block">Masukan alamat twitter.</p>
      </div>

    </div>
  </div>

</div>


<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>

<a href="{{ url('/masters') }}" class="btn btn-default">CANCEL</a>