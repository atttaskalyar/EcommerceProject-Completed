<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style>
       .title{
        color: white;padding-top:25px; font-size:25px
       }

       .text-color-black{
           color:black;
           min-width: 300px;
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

        <form action="{{url('uploadproduct')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px">
            <label for="">Product title</label>
            <input required class='text-color-black' type="text" name="title" placeholder="Product Title">
        </div>

        <div style="padding: 15px">
            <label for="">Price</label>
            <input required class='text-color-black' type="number" min="0" max="99999999" name="price" placeholder="Product Price">
        </div>

        <div style="padding: 15px">
            <label for="">Description</label>
            <input required class='text-color-black' type="text" name="des" placeholder="Product Description">
        </div>

        <div style="padding: 15px">
            <label for="">Product quantity</label>
            <input required class='text-color-black' type="number" min="0" max="99999999" name="quantity" placeholder="Product quantity">
        </div>


        <div style="padding: 15px">
            <input type="file" name="file">
        </div>

        <div style="padding: 15px">
            <input type="submit" class="btn btn-success">
        </div>
        </form>
        </div><!-- main-panel ends -->
      @include('admin.scripts')
  </body>
</html>
