<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>

            <form action="{{url('search')}}" method="get"
              class="form-inline" style="float: right; padding: 10px;">

            @csrf

              <input class="form-control" type="search" name="search"  placeholder="Search">
              <input type="Submit" value="Search" class="btn btn-success">

            </form>
          </div>
        </div>

        @foreach ($data as $product )

        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="/productimage/{{$product->image}}" alt="" width="150px" height="300px"></a>
            <div class="down-content">
              <a href="#"><h4>{{$product->title}}</h4></a>
              <h6>${{$product->price}}</h6>
              <p>{{$product->description}}</p>

              <form action="{{url('addcart',$product->id)}}" method="POST">

                @csrf

                <input type="number" value="1" min="1" class="form-control" name="quantity" style="width: 100px">
                <br>

                <input class="btn btn-primary" type="submit" value="Add Cart">

              </form>

              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
             <!-- <span>Reviews (32)</span> We might implement it later-->
            </div>
          </div>
        </div>

        @endforeach

        @if(method_exists($data,'links'))
        <!--page slide -->
        <div class="d-flex justify-content-center">
            {!!$data->links()!!}
        </div>

        @endif

      </div>
    </div>
  </div>
