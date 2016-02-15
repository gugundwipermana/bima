<div class="form-group">
  {!! Form::label('title_signup1', 'Title signup English') !!}

  {!! Form::text('title_signup1', null, ['class' => 'form-control', 'placeholder' => 'Title Signup']) !!}

  <p class="help-block">Masukan judul untuk signup.</p>
</div>

<div class="form-group">
  {!! Form::label('title_signup2', 'Title signup Bahasa Indonesia') !!}

  {!! Form::text('title_signup2', null, ['class' => 'form-control', 'placeholder' => 'Title Signup']) !!}

  <p class="help-block">Masukan judul untuk signup.</p>
</div>


<div class="form-group">
  <label for="exampleInputEmail1">Description English</label>

  {!! Form::textarea('description1', null, ['id' => 'editor1', 'rows' => '10', 'cols' => '80']) !!}
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Description Bahasa Indonesia</label>

  {!! Form::textarea('description2', null, ['id' => 'editor2', 'rows' => '10', 'cols' => '80']) !!}
</div>



<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>

<a href="{{ url('/messages') }}" class="btn btn-default">CANCEL</a>