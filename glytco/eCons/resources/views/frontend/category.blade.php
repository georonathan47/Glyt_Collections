<!DOCTYPE html>
<html>
@include('frontend/header')
<body>
    <div class="py-5">
        <div class="container">
            <h4>All Category</h4>
        <div class="row">
            <div class="col-sm-6">
                @foreach($category as $category)
        <div class="card" style="width: 18rem;">
        <a href="{{url('category-products/'.$category->slug)}}">
  <img src="{{asset('assets/upload/category/'.$category->image)}}" class="card-img-top" alt="category picture">
  <div class="card-body">
    <h5 class="card-title">{{$category->name}}</h5>
    <p class="card-text">{{$category->description}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</a>
</div>
@endforeach

</div>
</div>
</div>
</div>
</body>
</html>
