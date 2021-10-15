@extends('layouts.app')
@section('contain')
    <div class="container" style="width:500px;">
            <legend>Edit product</legend>
        <form action="{{route('edit')}}" method="POST">  
            {{csrf_field()}}
            <label>ID:</label>  
            <input type="text" name="id" class="form-control" value="{{$product->id}}" >
             
            <br>
            <p>Name :</p>  
            <input type="text" name="name" class="form-control" value="{{$product->p_name}}">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br>
            <label>Code :</label>  
            <input type="text" name="code" class="form-control" value="{{$product->p_code}}">
            @error('code')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br>
            <label>Description :</label>  
            <input type="text" name="desc" class="form-control" value="{{$product->p_desc}}">
            @error('desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br>
            <label>Category :</label>  
            <select class="custom-select" id="inputGroupSelect01" name="category">
                <option selected>{{$product->p_category}}</option>
                <option value="Phone">Phone</option>
                <option value="Laptop">Laptop</option>
                <option value="Desktop">Desktop</option>
                <option value="Accesories">Accesories</option>
            </select>
            @error('category')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br>  
            <label>Price :</label>
            <input type="text" name="price" class="form-control" value="{{$product->p_price}}">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br>   
            <label>Quantity :</label>
            <input type="text" name="quantity" class="form-control" value="{{$product->p_quantity}}">
            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br> 
            <label>Stock Date :</label>
            <input type="date" name="date" class="form-control" value="{{$product->p_stock_date}}">
            @error('date')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br>  
            <label>Rating :</label>
            <input type="text" name="rating" class="form-control" value="{{$product->p_rating}}">
            @error('rating')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br> 
            <label>Purchased :</label>
            <select type="custom-select" name="purchased" class="form-control" value="{{$product->p_purchased}}">
            <option selected>{{$product->p_purchased}}</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            @error('purchased')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br> 
            <input type="submit" name="submit" value="Update" class="btn btn-info" /><br />  
            <br>                
        </form> 
    </div>    
@endsection