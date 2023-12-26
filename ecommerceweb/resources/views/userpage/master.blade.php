<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ecommerce Project</title>
    <style>
      img.slider-img{
        height : 400px !important;
      }
      .custom-product{
        height: 600px !important;
        margin-top:10px;
      }
      .slider-text{
        background-color : #24465454 !important;
      }
      button.carousel-control-prev {
          border: none;
          display: none;
      }
      button.carousel-control-next {
        border:none;
        display: none;
      }
      .trending-img{
        height:100px;
      }
      .trending-item{
        float:left;
        width:20%;
      }
      .trending-wrapping{
        margin:20px;
      }

      .detail-img{
        height:350px;
      }
      .product-title, .rating, .product-description, .price, .vote, .sizes {
        margin-bottom: 15px; 
      }
      .card {
        margin-top: 50px;
        background: #eee;
        padding: 3em;
        line-height: 1.5em; 
      }
    </style>
  </head>
  <body>
{{ View::make('userpage/header') }}

@yield('content')

{{ View::make('userpage/footer') }}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>