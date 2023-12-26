@extends("userpage/master")
@section("content")

<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
        <div class="col-md-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>

        <div class="col-md-6">
            <a href="/">Go Back</a>
            <h3 class="product-title">{{$product['name']}}</h3>
            <div class="rating">
                <div class="stars">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <span class="review-no">41 reviews</span>
            </div>
            <h4 class="price">Price: &#x20B9; <span>{{$product['price']}} </span></h4>
            <p class="product-description">{{$product['description']}}</p>
            <h6>Category: {{$product['category']}}</h6>
            <br></br>
            <!-- <button class="btn btn-success">Add To Cart</button>
            
            <button class="btn btn-primary">Buy Now</button> -->
            <div class="action">
							<button class="add-to-cart btn btn-success" type="button">Add to cart</button>
                            <button class="btn btn-primary">Buy Now</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
        </div>
    </div>
</div>
</dix>
   
</div>
@endsection