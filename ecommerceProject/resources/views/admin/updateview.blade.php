<!DOCTYPE html>
<html lang="en">
  <head>
    <base href = "/public">
    @include('admin.css')

    <style>
       .title{
        color: white;padding-top:25px; font-size:25px
       }

       label{
           display: inline-block;
           width: 200px;
       }

       input{
           color: black;
       }
   </style>

  <body>
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class='container' style="margin: auto">
        <h1 class="title">Add Product</h1>

        @if(session()->has('message'))
        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss='alert'>x</button>

            {{session()->get('message')}}
        </div>

        @endif

        <form action="{{url('updateproduct', $data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px">
            <label for="">Product title</label>
            <input type="text" name="title" value="{{$data->title}}" required="">
        </div>

        <div style="padding: 15px">
            <label for="">Price</label>
            <input type="number" name="price" value="{{$data->price}}" required=""">
        </div>

        <div style="padding: 15px">
            <label for="">Description</label>
            <input type="text" name="des" value="{{$data->description}}" required="">
        </div>

        <div style="padding: 15px">
            <label for="">Product quantity</label>
            <input type="text" name="quantity" value="{{$data->quantity}}" required="">
        </div>

        <div style="padding: 15px">
            <label for="">Current Image</label>
            <img height="100px" width="100px" src= "/productimage/{{$data->image}}">
        </div>

        <div style="padding: 15px">
            <label>Change Image</label>
            <input type="file" name="file">
        </div>

        <div style="padding: 15px">
            <input type="submit" class="btn btn-success">
        </div>
        </form>
        </div>

        <!-- main-panel ends -->
      @include('admin.scripts')
  </body>
</html>
