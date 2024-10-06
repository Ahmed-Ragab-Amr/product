@extends('main')

@section('content')
<div class="tabs">
    <a href="{{ route('man') }}"><button>منتجات رجالية</button></a>
    <a href="{{ route('women') }}"><button class="active">منتجات نسائية</button></a>
</div>
    <div class="filter-container">
        <div class="filter-buttons">
            <button>منتجات نسائيه</button>
            <button>منتجات نسائيه</button>
            <button>منتجات نسائيه</button>
            <button>منتجات نسائيه</button>
            <button>منتجات نسائيه</button>
            <button>منتجات نسائيه</button>
            <button>منتجات نسائيه</button>
        </div>
    </div>
    <div class="products-grid">
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
