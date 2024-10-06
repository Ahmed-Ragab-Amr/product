@extends('main')

@section('content')
<div class="tabs">
    <a href="{{ route('man') }}"><button class="active">منتجات رجالية</button></a>
    <a href="{{ route('women') }}"><button>منتجات نسائية</button></a>
</div>
    <div class="filter-container">
        <div class="filter-buttons">
            <button>منتجات رجالية</button>
            <button>منتجات رجالية</button>
            <button>منتجات رجالية</button>
            <button>منتجات رجالية</button>
            <button>منتجات رجالية</button>
            <button>منتجات رجالية</button>
            <button>منتجات رجالية</button>
        </div>
    </div>
    <div class="products-grid">
        <div class="product-card">
            <div class="product-image"></div>
            <div class="product-info">
                <a href="{{ route('showOne') }}"><h3>منتج رجالي جديد</h3></a>
                <p>100 ريال</p>
                <p>منتج رجالي جديد منتج رجالي..</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image"></div>
            <div class="product-info">
                <h3>منتج رجالي جديد</h3>
                <p>100 ريال</p>
                <p>منتج رجالي جديد منتج رجالي..</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image"></div>
            <div class="product-info">
                <h3>منتج رجالي جديد</h3>
                <p>100 ريال</p>
                <p>منتج رجالي جديد منتج رجالي..</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image"></div>
            <div class="product-info">
                <h3>منتج رجالي جديد</h3>
                <p>100 ريال</p>
                <p>منتج رجالي جديد منتج رجالي..</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image"></div>
            <div class="product-info">
                <h3>منتج رجالي جديد</h3>
                <p>100 ريال</p>
                <p>منتج رجالي جديد منتج رجالي..</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image"></div>
            <div class="product-info">
                <h3>منتج رجالي جديد</h3>
                <p>100 ريال</p>
                <p>منتج رجالي جديد منتج رجالي..</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image"></div>
            <div class="product-info">
                <h3>منتج رجالي جديد</h3>
                <p>100 ريال</p>
                <p>منتج رجالي جديد منتج رجالي..</p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image"></div>
            <div class="product-info">
                <h3>منتج رجالي جديد</h3>
                <p>100 ريال</p>
                <p>منتج رجالي جديد منتج رجالي..</p>
            </div>
        </div>
    </div>
@endsection
