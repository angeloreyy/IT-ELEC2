
@include('templates.header')
<x-navbar/>
<h1>WELCOME TO ECOMMERCE SYSTEM</h1>
@foreach($products as $product)

    <div class="card" style="width: 18rem;">
        <img src="{{$product->image}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">{{$product->description}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
@endforeach
@include('templates.footer')