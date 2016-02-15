<div class="form-group">
  {!! Form::label('title', 'Product Name') !!}

  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter product name']) !!}

  <p class="help-block">Masukan nama produk.</p>
</div>

<div class="form-group">

  {!! Form::label('category_id', 'Category') !!}

  {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
  {!! Form::label('title', 'Caption') !!}

  {!! Form::text('caption', null, ['class' => 'form-control', 'placeholder' => 'Enter product caption']) !!}

  <p class="help-block">Masukan nama produk.</p>
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Description</label>

  {!! Form::textarea('description', null, ['id' => 'editor1', 'rows' => '10', 'cols' => '80']) !!}
</div>

<div class="form-group">
  <label for="exampleInputFile">Image</label>

  {!! Form::file('image', ['class' => 'form-control']) !!}

  <p class="help-block">Size must 500 x 375, 2MB</p>
</div>

<div class="form-group">
  <label for="exampleInputFile">Catalogue</label>

  {!! Form::file('catalogue', ['class' => 'form-control']) !!}

  <p class="help-block">Please input your catalogue file here.</p>
</div>



<button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>

<a href="{{ url('/products') }}" class="btn btn-default">CANCEL</a>