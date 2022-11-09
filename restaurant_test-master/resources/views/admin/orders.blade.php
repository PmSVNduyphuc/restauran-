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
    
  
    <div>
   
      <table  class="table table-bordered" style="width: 200%;margin-top: 40px;">
      <h1 style="color: white; font-size: 25px;margin-top: 90px; ">List Oder</h1>  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Food Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
    </tr>
    @foreach($data as $data)
  </thead>
  <tbody>
    <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->foodname}}</td>
            <td>{{$data->price}}$</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->price * $data->quantity}}$</td>
    </tr>
    @endforeach
    </tbody>
      </table>
</div>
    </div>


    
    
    @include("admin.adminjs")


</html>