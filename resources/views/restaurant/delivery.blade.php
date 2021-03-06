@extends('layouts.admin')
@section('content')
<div class="mb-4">
    <h2 >Available Deliveries</h2>  
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Address</th>
        <th scope="col">Location</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($deliverys as $item)
            <tr>
            <td scope="row">{{$item->id}}</td>
                <td>{{$item->itemname}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->address}}</td>
                <td><button type="submit" class="btn btn-outline-primary"><a href="/delivery/{{$item->id}}/showMap">Show</a></button></td>  
                <td><button type="submit" class="btn btn-outline-success"><a href="/delivery/{{$item->id}}/pick">Pick</a></button></td>  
            </tr>      
        @endforeach
    </tbody>
  </table>

@endsection