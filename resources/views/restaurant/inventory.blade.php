@extends('layouts.admin')
@section('content')
<!--form-->
  <h1>Inventory</h1>
  <br>
  <!-- Search button -->
  <form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="col-xs-11">
      <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search Products">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
      </div>
    </div>
  </form>
<br>
  <!-- Add Item Button -->
  <div align="right">
    <br>
    <a href="/addItem"><button class="button button1" type="button" name="Add_Product" >+Add Product</button></a>
  </div><br>
  <!-- Inventory table -->
  @if(count($inventory) > 0)
      <div class="well">
        <table class="zui-table" style="width:100%" >
          <thead>
          <tr>
            <th><h5>ID</h5></th>
            <th><h5>Product Name</h5></th>
            <th><h5>Brand Name</h5></th>
            <th><h5>Quantity</h5></th>
            <th><h5>Category</h5></th>
            <th><h5>Ordered Date</h5></th>
            <th><h5>Arrived Date</h5></th>
            <th><h5>Expire Date</h5></th>
            <th><h5>Manufactured Date</h5></th>
          </tr>
        </thead>
        @foreach($inventory as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td><a href="inventory/{{$item->id}}">{{$item->Product_Name}}</a></td>
            <td>{{$item->Brand_Name}}</td>
            <td>{{$item->Quantity}}</td>
            <td>{{$item->Category}}</td>
            <td>{{$item->Ordered_Date}}</td>
            <td>{{$item->Arrived_Date}}</td>
            <td>{{$item->Expire_Date}}</td>
            <td>{{$item->Manufactured_Date}}</td>
          </tr>
        @endforeach
        </table>
      </div>
  @endif
@endsection
