@extends('layouts.app')
@section('contain')

    <legend> Add Products</legend>
     <div class="container" style="width:500px;">
        <form action="{{route('add')}}" method="POST">  
            {{csrf_field()}}
            <p>Name:</p>  
            <input type="text" name="name" class="form-control" >
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br>
            <label>Code:</label>  
            <input type="text" name="code" class="form-control">
            @error('code')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br>
            <label>Description:</label>  
            <input type="text" name="desc" class="form-control" >
            @error('desc')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br>
            <label>Category :</label>  
            <select class="custom-select" id="inputGroupSelect01" name="category">
                <option selected>Choose</option>
                <option value="Phone">Phone</option>
                <option value="Laptop">Laptop</option>
                <option value="Desktop">Desktop</option>
                <option value="Accesories">Accesories</option>
            </select>
            @error('category')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br><br>
            <label>Quantity:</label>
            <input type="text" name="quantity" class="form-control">
            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br> 
            <label>Price :</label>
            <input type="text" name="price" class="form-control">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br>  
            <label>Stock Date :</label>
            <input type="date" name="date" class="form-control">
            @error('date')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br> 
            <label>Rating :</label> 
            <select class="custom-select" id="inputGroupSelect01" name="rating">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
            </select>
            @error('rating')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br> <br>
            <label>Purchased :</label>  
            <select class="custom-select" id="inputGroupSelect01" name="purchased">
                <option selected>Choose</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            @error('purchased')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <br> 
            <input type="submit" name="submit" value="Add" class="btn btn-info" /><br />  
            <br>
            </div>                    
            
        </form> 
        <br>
    </div>   
 
@endsection