<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style>
       @media only screen and (max-width: 600px) {
  tr{
      display: flex;
  }
}
   </style>
  <body>
@include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class='container' style="margin: auto">
                <table>
                    <tr style="background-color: grey;">
                        <td style="padding: 20px;">Customer Name</td>
                        <td style="padding: 20px;">Phone</td>
                        <td style="padding: 20px;">Address</td>
                        <td style="padding: 20px;">Product Title</td>
                        <td style="padding: 20px;">Price</td>
                        <td style="padding: 20px;">Quantity</td>
                        <td style="padding: 20px;">Status</td>
                        <td style="padding: 20px;">Action</td>
                    </tr>

                    @foreach($order as $orders)

                    <tr align="center" style="background-color: black;">
                        <td style="padding: 20px;">{{$orders->phone}}</td>
                        <td style="padding: 20px;">{{$orders->name}}</td>
                        <td style="padding: 20px;">{{$orders->address}}</td>
                        <td style="padding: 20px;">{{$orders->product_name}}</td>
                        <td style="padding: 20px;">{{$orders->price}}</td>
                        <td style="padding: 20px;">{{$orders->quantity}}</td>
                        <td style="padding: 20px;">{{$orders->status}}</td>
                        <td style="padding: 20px;">
                            <a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">
                                Delivered
                            </a>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>
        <!-- main-panel ends -->
      @include('admin.scripts')
  </body>
</html>
