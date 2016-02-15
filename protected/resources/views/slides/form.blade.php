<div class="form-group">
  {!! Form::label('name', 'Product Name') !!}

  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter slide name']) !!}

  <p class="help-block">Masukan nama slide.</p>
</div>


@if($submitButtonText == 'Save')


<div class="form-group">
  <label for="exampleInputFile">Image</label>

  {!! Form::file('image', ['class' => 'form-control']) !!}

  <p class="help-block">Min Size 1920 x 1080, 2MB</p>
</div>


@endif


<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>

<a href="{{ url('/slides') }}" class="btn btn-default">CANCEL</a>