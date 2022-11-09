<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")
   

    <div style="margin-top: 80px; right:0px">
    <h1 style="color: white; font-size: 25px;">Create Product</h1>
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input style="color: black"  class="form-control" type="text" name="title" placeholder="Food title" required>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input style="color: black"   class="form-control" type="number" name="price" placeholder="Food price" required>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file"  class="form-control" name="image" required>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input style="color: black" type="text"  class="form-control" name="description" placeholder="Food description" required>
            </div>
            <div class="form-group">
                <button>
                <input style="background-color: white; color: black" class="form-control"  type="submit"   value="Save">
                </button>
            </div>
        </form>

        <div>

        <table  class="table table-bordered" style="  width: 140%;">
            <tr>
                <th style="padding: 30px">Food Name</th>
                <th style="padding: 30px">Food Price</th>
                <th style="padding: 30px">Food Description</th>
                <th style="padding: 30px">Food Image</th>
                <th style="padding: 30px">Action</th>
                <th style="padding: 30px">Action2</th>
            </tr>

            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td><img style="width: 120px ;height:120px;" src="/foodimage/{{$data->image}}"></td>
                <td><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
                <td><a href="{{url('/updateview', $data->id)}}">Update</a></td>
            </tr>
            @endforeach
        </table>

        </div>

    </div>

    </div>
    @include("admin.adminjs")

  </body>
</html>