@extends("userpage/master") @section("content")

<div class="container-fluid custom-product">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}} custom-css">
                <a href="detail/{{$item['id']}}">
                <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
                <div class="carousel-caption slider-text">
                    <h3>{{$item['name']}}</h3>
                    <p>{{$item['description']}}</p>
                </div>
                </a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
    </div>

    <div class="container">
        <div class="trending-wrapping">
        <div class="heading container-fluid">
            <span style="color: white;margin: 10px 0 0 -5px;  font-family: 'Quicksand', sans-serif;position: relative;top: 6px">Trading Product</span>
        </div>
            <div class="">
                @foreach($products as $item)
                <div class="trending-item">
                <a href="detail/{{$item['id']}}">
                    <img class="trending-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
</a>
                    <div class="">
                        <h4>{{$item['name']}}</h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>




    </div>

   
</div>


@endsection