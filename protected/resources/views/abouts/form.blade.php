<div class="form-group">
  {!! Form::label('title', 'Title Name English') !!}

  {!! Form::text('title1', null, ['class' => 'form-control', 'placeholder' => 'Enter title name']) !!}

  <p class="help-block">Masukan nama judul.</p>
</div>

<div class="form-group">
  {!! Form::label('title2', 'Title Name Bahasa Indonesia') !!}

  {!! Form::text('title2', null, ['class' => 'form-control', 'placeholder' => 'Enter title name']) !!}

  <p class="help-block">Masukan nama judul.</p>
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

<a href="{{ url('/abouts') }}" class="btn btn-default">CANCEL</a>
