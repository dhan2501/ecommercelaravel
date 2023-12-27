@extends("userpage/master") @section("content")

<div class="container custom-product">
   <!-- <div class="trending-wrapping">
        <div class="heading container-fluid">
            <span style="color: white;margin: 10px 0 0 -5px;  font-family: 'Quicksand', sans-serif;position: relative;top: 6px">Cart List</span>
        </div>
            @foreach($products as $item)
            <div class="row searched-item">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}" class="d-block w-100" alt="...">
                    </a>
                </div>
                <div class="col-sm-3">
                    <div class="">
                        <h4>{{$item->name}}</h4>
                        <h4>{{$item->description}}</h4>
                    </div>
                    
                </div>
                <div class="col-sm-3">
                    <div class="">
                        <button class="btn btn-warrning">Remove From Cart</button>
                    </div>
                </div>
            </div>
            @endforeach
   </div> -->

   <div class="text-center">
            <h5>Cart Items</h5>
        </div>
   <div class="divTable div-hover">
       
        <div class="rowTable bg-primary text-white pb-2 listing">
            <div class="divTableCol">Product</div>
            <!-- <div class="divTableCol">Authorized</div> -->
            <!-- <div class="divTableCol">Quantity</div> -->
            <div class="divTableCol">Price</div>
            <!-- <div class="divTableCol">Total</div> -->
            <div class="divTableCol">Actions</div>
        </div>
    
        @foreach($products as $item)
        <div class="rowTable">
            <div class="divTableCol">
                <div class="media">
                    <a class=" pull-left mr-2 ml-0" href="detail/{{$item->id}}"> <img class="img-fluid" src="{{$item->gallery}}" style="width: 92px; height: 72px; margin-left: 0" /></a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="detail/{{$item->id}}">{{$item->name}}</a></h4>
                        <!-- <h5 class="media-heading">via Catalfini, Roma <a href="#">Noto Hotel </a></h5>
                        <span>Status: </span><span class="text-warning"><strong>Pending request</strong></span> -->
                    </div>
                </div>
            </div>
            <!-- <div class="divTableCol"><strong class="label label-warning">Pending</strong></div> -->
            <!-- <div class="divTableCol">
                <input type="email" class="form-control" id="exampleInputEmail1" value="3" />
            </div> -->
            <div class="divTableCol"><strong>&#x20B9; {{$item->price}}</strong></div>
            <!-- <div class="divTableCol"><strong>€170.01</strong></div> -->
            <div class="divTableCol">
                <button type="button" class="btn btn-danger"><span class="fa fa-remove"></span> Remove</button>
            </div>
        </div>
        @endforeach
        
</div>

</div>

@endsection