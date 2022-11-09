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

    <div style="margin-top: 120px; right:0px">
        <table class="table table-dark" style="  width: 280%;" >
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach($data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>

                @if($data->usertype=="0")

                <td><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>

                @else

                <td>Not Allowed</td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>

    </div>
    @include("admin.adminjs")

  </body>
</html>