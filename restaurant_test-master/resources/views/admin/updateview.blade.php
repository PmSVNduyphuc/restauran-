<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller">
    
    @include("admin.navbar")

    <div style="position: relative; top: 60px ; width: 80%;">
        <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">
        <h1 style="color: white; font-size: 25px;">Update Product</h1>
            @csrf
           <div class="form-group">
                <label for="">Title</label>
                <input style="color: black" class="form-control" type="text" name="title" value="{{$data->title}}" required>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input style="color: black" class="form-control" type="number" name="price" value="{{$data->price}}" required>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input style="color: black" class="form-control" type="text" name="description" value="{{$data->description}}" required>
            </div>

            <div>
            <label> Old Image</label>
                <img src="/foodimage/{{$data->image}}" height="200" width="200">

            </div>
                
            <div class="form-group">
                <label for="">New Image</label>
                <input type="file" class="form-control" name="image" required>
            </div>
            <div class="form-group">
                <input style="background-color: white; color: black" class="form-control" type="submit" value="Save">
            </div>
        </form>

    </div>

    </div>
    @include("admin.adminjs")

  </body>
</html>