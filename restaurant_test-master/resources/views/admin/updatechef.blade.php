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

  <div style="margin-top: 95px ; width : 80%;">
  <h1 style="color: white; font-size: 25px;">Update Chef</h1>
  <form action="{{url('/updatefoodchef', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Chef Name</label>
            <input style="color: black;"  class="form-control" type="text" name="name" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label>Chef Speciality</label>
            <input style="color: black;"  class="form-control" type="text" name="speciality" value="{{$data->speciality}}">
        </div>
        <div class="form-group">
            <label>Old Image</label>
            <img src="/chefimage/{{$data->image}}" height="200" width="200">
        </div>
        <div class="form-group">
            <label>New Image</label>
            <input type="file"  class="form-control"  name="image">
        </div>
        <div class="form-group">
            <input style="background-color: white; color: black;"  class="form-control"  type="submit" value="Update Chef">
        </div>


    </form>
  </div>

    </div>
    @include("admin.adminjs")

  </body>
</html>