@extends('layouts.header')
@section('main')
<div class="container">
    <h1>Product Lists</h1>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>S.no.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td>{{ $loop->index+1 }}</td>
            <td><a href="products/{{ $product->id }}/show" class="text-dark">{{ $product->name }}</a></td>
            <td><img src="products/{{ $product->image }}" class="rounded-circle" width="50px" height="50px" alt=""></td>
            <td>
              <a href="products/{{ $product->id }}/edit" class="btn btn-success">Edit</a>
              <a href="products/{{ $product->id }}/delete" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection

@extends('layouts.footer')