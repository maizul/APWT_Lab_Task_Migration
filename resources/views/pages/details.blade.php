@extends('layouts.app')
@section('contain')
<center>
    <legend>Details</legend>
<br><hr>
    <p>Name: {{$product->p_name}}</p>
    <p>Code: {{$product->p_code}}</p>
    <p>Description: {{$product->p_desc}}</p>
    <p>Category: {{$product->p_category}}</p>
    <p>Price: {{$product->p_price}}</p>
    <p>Quantity: {{$product->p_quantity}}</p>
    <p>Stock Date: {{$product->p_stock_date}}</p>
    <p>Rating: {{$product->p_rating}}</p>
    <p>Purchased: {{$product->p_purchased}}</p>
    <br>
@endsection