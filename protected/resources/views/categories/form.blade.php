<div class="form-group">
  {!! Form::label('firstname', 'First Name') !!}

  {!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'Enter nama depan category']) !!}

  <p class="help-block">Masukan nama depan category.</p>
</div>

<div class="form-group">
  {!! Form::label('lastname', 'Last Name') !!}

  {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Enter nama akhir category']) !!}

  <p class="help-block">Masukan nama akhir category.</p>
</div>

<div class="form-group">
  <label for="exampleInputFile">Image</label>

  {!! Form::file('image', ['class' => 'form-control']) !!}

  <p class="help-block">Min Size 378 x 209, 2MB</p>
</div>


<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>

<a href="{{ url('/categories') }}" class="btn btn-default">CANCEL</a>
