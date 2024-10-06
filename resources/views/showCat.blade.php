@extends('main')

@section('content')
<div class="tabs">
   @foreach ($cats as $cat)
        <a href="{{ route('cat.show' , $cat->id) }}"><button @if($cat->id == $id) class="active" @endif>{{ $cat->name }}</button></a>
   @endforeach
</div>
    @if (count($categories) > 0)
        
    <div class="filter-container">
        <div class="filter-buttons">
            @foreach ($categories as $category)
                <button><a href="{{ route('user.category.show' , $category->id) }}">{{ $category->name }}</a></button>
            @endforeach
        </div>
    </div>
    @endif

    <div class="products-grid">
        @foreach ($products as $product)
            
            <div class="product-card">
                <div class="product-image"><img width="100%" height="100%" src="{{ asset($product->image_path) }}" alt=""></div>
                <div class="product-info">
                    <a href="{{ route('showOne' , $product->id) }}"><h3>{{ $product->name }}</h3></a>
                    <p>{{ $product->price }}</p>
                    <p>{{ $product->disc }}</p>
                </div>
            </div>

        @endforeach
       
    </div>
@endsection
