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


    <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data" style="width:80% ; margin-top: 120px;margin-right:-320px;">
    <h1 style="color: white; font-size: 25px;">Create Chef</h1>
    @csrf
        <div class="form-group">
            <label>Name</label>
            <input style="color: black" class="form-control" type="text" name="name" placeholder="Enter chef name" required>
        </div>
        <div class="form-group">
            <label>Speciality</label>
            <input style="color: black" class="form-control" type="text" name="speciality" placeholder="Enter speciality" required>
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="image" required>
        </div>

        <button style="color: white;"><input style="background-color: ogange; color: black" type="submit" value="Save"></button>

    </form>


    <div style="margin-top: 390px;margin-left: -870px;">
    <table class="table table-bordered" style="width: 180%;" >

<tr>
  <th>#</th>
  <th>Chef Name</th>
  <th>Speaciality</th>
  <th>Image</th>
  <th>Action</th>
  <th>Action 2</th>
</tr>
@foreach($data as $data)
<tr align="center">
  <td style="padding-left: 5px;">{{$data->id}}</td>
  <td style="margin-left: -15px;">{{$data->name}}</td>
  <td>{{$data->speciality}}</td>
  <td><img style="height: 120px; width : 120px;" src="/chefimage/{{$data->image}}"></td>
  <td><a href="{{url('updatechef', $data->id)}}">Update</a></td>
  <td><a href="{{url('deletechef', $data->id)}}">Delete</a></td>
</tr>
@endforeach
</table>
    </div>


    </div>
    @include("admin.adminjs")

  </body>
</html>