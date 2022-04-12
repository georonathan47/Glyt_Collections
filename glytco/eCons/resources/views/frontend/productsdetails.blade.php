<!DOCTYPE html>
<html>
@include('frontend.header')

<body>
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="conatiner">
            <h6 class="mb-0"> Category/{{$products->category->name}}/{{$products->name}}</h6>
</div>
</div>

    <div class="container">
        <div class="row">
<div class="card mb-3  product_data" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('assets/upload/products/' .$products->image)}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$products->name}}</h5>
        <p class="card-text">{{$products->description}}.</p>
        <label><s>{{$products->original_price}}</s></label><br>
        <label>{{$products->selling_price}}</label>
         <br>
         @if($products->qty > 0)
         <label class="badge bg-success">In Stock</label>
         @else
         <label class="badges bg-danger">Out of Stock</lable>
         @endif
         <div class="row mt-2">
             <div class="col-md-2">
               <input type="hidden" value="{{$products->id}}" class="prod_id">
                 <label for="Quantity">Quantity</label>
                 <div class="input-group text-center mb-3">
                     <button class="input-group-text decrement-btn">-</button>
                     <input type="text" name="quantity"  class="form-control qty-input text-center" value="1">
                     <button class="input-group-text increment-btn">+</button>
</div>
<div class="col-md-10">
</div>
<button type="button" class="btn btn-warning">Add to wish List<i class="fa fa-heart"></i></button>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
      </div>
      </div>

</body>
</html>