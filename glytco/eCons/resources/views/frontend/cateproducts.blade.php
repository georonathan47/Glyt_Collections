<!DOCTYPE html>
<html>
    @include('frontend.header')

    <body>

    <div class="py-5">
    <div class="container">
        <h1>{{$category->name}}</h1>
        <div class="row">
    @foreach($products as $product)
            <div class="col-md-3 mt-3">
            <div class="item">
                <div class="card">
                    <a href="{{url('category/'. $category->slug . '/' . $product->slug)}}">
                    <img src="{{asset('assets/upload/products/'.$product->image)}}" alt="product image">
                    <div class="card-body">
                        <h5>{{$product->name}}</div>
                        <span class="float-start"><s>{{$product->original_price}}</s></span>
                        <span class="float-right">{{$product->selling_price}}</span>
                        
</div>
</a>
</div>
</div>
</div>
@endforeach
</div>
</div>
</body>
</html>