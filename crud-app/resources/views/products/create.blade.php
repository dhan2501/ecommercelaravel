@extends('layouts.header')
@section('main')
    <div class="container">
    <h1 class="text-center">Add New Product</h1>
      <div class="row">
        <div class="col-sm-6 offset-3">
          <div class="card">
            <div class="card-body">
              <form action="/products/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                  @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="description">Product Description</label>
                  <textarea name="description" rows="5" value="{{ old('name') }}" class="form-control"></textarea>
                  @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="image">Product Image</label>
                  <input type="file" name="image" id="" class="form-control">
                  @if($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image ') }}</span>
                  @endif
                </div>
                <button type="submit" name="submit" class="btn btn-dark">Add Product</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection

@extends('layouts.footer')