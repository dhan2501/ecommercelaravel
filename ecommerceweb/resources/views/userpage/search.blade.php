@extends("userpage/master") @section("content")

<div class="container custom-product">
    <div class="row">
   <div class="col-sm-4">
        <a href="">Filter</a>
   </div>
   <div class="col-sm-4">
   <div class="trending-wrapping">
        <div class="heading container-fluid">
            <span style="color: white;margin: 10px 0 0 -5px;  font-family: 'Quicksand', sans-serif;position: relative;top: 6px">Result for Product</span>
        </div>
        <div class="">
            @foreach($products as $item)
            <div class="searched-item">
                <a href="detail/{{$item['id']}}">
                    <img class="trending-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
                </a>
                <div class="">
                    <h4>{{$item['name']}}</h4>
                    <h4>{{$item['description']}}</h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
   </div>
   </div>
</div>

@endsection