<div class="form-group">
  {!! Form::label('latitude', 'Latitude') !!}

  {!! Form::text('latitude', null, ['class' => 'form-control', 'placeholder' => 'Enter latitude']) !!}

  <p class="help-block">Masukan latitude alamat.</p>
</div>

<div class="form-group">
  {!! Form::label('longitude', 'Longitude') !!}

  {!! Form::text('longitude', null, ['class' => 'form-control', 'placeholder' => 'Enter longitude']) !!}

  <p class="help-block">Masukan longitude alamat.</p>
</div>



<div class="form-group">
  <label for="exampleInputEmail1">Factory Stores</label>

  {!! Form::textarea('factory_stores', null, ['id' => 'editor1', 'rows' => '10', 'cols' => '80']) !!}
</div>


<div class="form-group">
  <label for="exampleInputEmail1">Open Hour</label>

  {!! Form::textarea('open_hour', null, ['id' => 'editor2', 'rows' => '10', 'cols' => '80']) !!}
</div>


<div class="form-group">
  <label for="exampleInputEmail1">Contact</label>

  {!! Form::textarea('contact', null, ['id' => 'editor3', 'rows' => '10', 'cols' => '80']) !!}
</div>


<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>

<a href="{{ url('/factories') }}" class="btn btn-default">CANCEL</a>