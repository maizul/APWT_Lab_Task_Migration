@extends('layouts.app')
@section('contain')

    <legend> Product List</legend>
<br>
<table class="table">
    <thead>
      <tr>
        
        <th scope="col">Name</th>
        <th scope="col">Code</th>
        <th scope="col">Description</th>
        <th scope="col">Category</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Stock Date</th>
        <th scope="col">Rating</th>
        <th scope="col">Purchased</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                
                <td>{{$product->p_name}}</td>
                <td>{{$product->p_code}}</td>
                <td>{{$product->p_desc}}</td>
                <td>{{$product->p_category}}</td>
                <td>{{$product->p_price}}</td>
                <td>{{$product->p_quantity}}</td>
                <td>{{$product->p_stock_date}}</td>
                <td>{{$product->p_rating}}</td>
                <td>{{$product->p_purchased}}</td>
                <td><a href="/details/{{$product->id}}">Detail</a></td>
                <td><a href="/edit/{{$product->id}}">Edit</a></td>
                <td><a href="/delete/{{$product->id}}">Delete</a></td>
            </tr>
            
       @endforeach
    </tbody>
  </table>

    
        
    
@endsection