@extends("userpage/master") @section("content")

<div class="container custom-product">

<h1>Order now</h1>
<div class="col-sm-6">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>Price</td>
                <td>{{$total}} Rupees</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>0 Rupees</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>100 Rupees</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>{{$total + 100}} Rupees</td>
            </tr>
        </tbody>
    </table>
    <form action="">
        <div class="form-group">
            <textarea name="" id="" cols="20" rows="5" class="form-control">
                
            </textarea>
        </div>
        <div class="form-group">
            <label for="">Payment Method</label>
            <p><input type="radio" name="payment"><span> Online Payment</span></p>
            <p><input type="radio" name="payment"><span> EMI Payment</span></p>
            <p><input type="radio" name="payment"><span> Payment on Delivery</span></p>
        </div>
        <a href="/orderplace"><button type="submit" c;ass="btn btn-default">Order Now</button></a>
    </form>
</div>

</div>

@endsection