<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
     rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
     integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"/>

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('User.header')

    <div style="padding: 100px" align="center">
        <table>
            <tr style="background-color: black">
                <td style="padding: 10px; font-size: 20px; color: white;">Product Name</td>
                <td style="padding: 10px; font-size: 20px; color: white;">Quantity</td>
                <td style="padding: 10px; font-size: 20px; color: white;">Price</td>
                <td style="padding: 10px; font-size: 20px; color: white;">Action</td>

            </tr>

            <form action="{{url('order')}}" method="POST">

              @csrf

              @foreach($cart as $carts)

              <tr style="background-color: black">
                  <td style="padding:10px; color: white;">
                    <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden="">
                      {{$carts->product_title}}
                  </td>
                  <td style="padding:10px; color: white;">
                    <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">
                      {{$carts->quantity}}
                  </td>

                  <td style="padding:10px; color: white;">
                    <input type="text" name="price[]" value="{{$carts->price}}" hidden="">
                      {{$carts->price}}
                  </td>

                  <td style="padding:10px; color: white;">
                      <a class="btn btn-danger" href="{{url('delete',$carts->id)}}">
                          Remove
                      </a>
                  </td>
              </tr>

              @endforeach

        </table>

        <button class="btn btn-success">Confirm Order</button>

          </form>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
