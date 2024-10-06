<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seventeen Sweets | الصفحة الرئيسية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/minireset.css/0.0.2/minireset.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}" />
    <style>
          .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 10px;
            margin-top: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .product-description {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 16px;
            font-weight: bold;
            color: #752f01;
        }

        /* تقصير النص */
        .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* التصميم المتجاوب */
        @media (max-width: 768px) {
            .product-card {
                margin-bottom: 20px;
            }
        }
        .soon-button {
            display: inline-block;
            background-color: #752f01;
            color: #fff;
            padding: 15px 30px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 10px;
            margin: 10px;
            text-align: center;
            cursor: pointer;
            white-space: nowrap;
            transition: all 0.3s ease;
        }

        .soon-button:hover {
            background-color: #5c2400;
        }

        .category-container {
    overflow-x: auto; /* يسمح بالتمرير الأفقي */
    white-space: nowrap; /* يمنع التفاف العناصر */
    padding: 10px 0; /* إضافة بعض الحشو العلوي والسفلي */
    border: 1px solid white; /* إضافة إطار حول البوكس */
    border-radius: 20px; /* جعل الزوايا مستديرة */
    text-align: center;
    background-color: white; /* خلفية فاتحة للصندوق */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.15); /* إضافة ظل من جميع الجوانب */
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* Internet Explorer and Edge */
}

.category-container::-webkit-scrollbar {
    display: none; /* Chrome, Safari, Opera */
}



        .category-button {
            display: inline-block; /* لجعل الأزرار بجانب بعضها أفقياً */
            padding: 10px 20px;
            background-color: #5c2400;
            color: white;
            border-radius: 20px;
            text-align: center;
            cursor: pointer;
            margin: 5px;
            border: 2px solid #0056b3;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }
        .category-button:hover {
            background-color: white;
            color: #0056b3;
            border-color: #0056b3;
        }
        .slick-slider {
            width: 90%;
            margin: 0 auto;
            max-width: 1200px;
        }

        @media (max-width: 768px) {
            .soon-button {
                font-size: 14px;
                padding: 10px 20px;
            }
            .slick-slider {
                width: 95%;
            }
        }

        @media (max-width: 480px) {
            .soon-button {
                font-size: 12px;
                padding: 8px 15px;
            }
        }
    </style>

</head>
<body>
    <div class="pageHeader">
        <div class="container">
            <a href="#">
                <img style="margin-top: -30px;margin-bottom: -20px;" src="{{ asset('user/img/wesam.png') }}" width="130px">
            </a>
            <nav class="navbar navbar-expand-lg">
                <button style="margin: auto;border: 3px solid #752f01;padding: 10px 20px;border-radius: 10px;font-size: 22px;font-weight: bold;color: #752f01;" class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span>القائمة</span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#twaslmna">تواصل معنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#otlobalan">اطلب الآن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aaraomlaa">آراء عملاءنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#montajat">منتجاتنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#raysish">الرئيسية</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <section class="secondSection" style="direction: rtl;margin-top: 50px;">
        <div class="container">
            <div class="button-container">
                <div class="slick-slider">
                    @foreach ($cats as $cat)
                        <div class="soon-button" onclick="filterCategories('{{ $cat->id }}')" data-cat-id="{{ $cat->id }}">{{ $cat->name }}</div>
                    @endforeach
                </div>
            </div>

            <div class="category-container">
                @foreach ($categories as $category)

                    <div class="category-button category-card"  onclick="filterProducts('{{ $category->id }}')" data-cat-id="{{ $category->cat_id }}"  >
                        {{ $category->name }}
                    </div>

                @endforeach
            </div>


            <div class="product-container">

                <div class="row">
                    <!-- المنتج 1 -->
                @foreach ($products as $product)

                <div class="col-lg-3 col-md-4 col-sm-6 product-cardd" data-cat-id="{{ $product->category_id }}" >
                    <div class="product-card">
                        <img src="{{ asset($product->image_path) }}" width="100%" height="100%" alt="منتج 1" class="product-image">
                        <div class="product-info">
                            <a href="{{ route('showOne' , $product->id) }}"><div class="product-name">{{ $product->name }}</div></a>
                            <div class="product-description truncate">{{ $product->disc }}</div>
                            <div class="product-price">{{ $product->price }}</div>
                        </div>
                    </div>
                </div>

                @endforeach



                <!-- المزيد من المنتجات -->
                <!-- يمكنك تكرار نفس التنسيق لعرض المزيد من المنتجات -->
            </div>
        </div>

        </div>
    </section>

    <footer class="pageFooter">
        <div class="container">
            <div class="text-center">
                <a href="#">
                    <img src="{{ asset('user/img/wesam.png') }}" width="200px">
                </a>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3">
                    <a class="footerLink" style="color: #752f01;">عن متجرنا</a>
                    <a class="footerLink" style="font-size: 20px;"> متجر وسام العود للعطور</a>
                </div>
                <div class="col-lg-3">
                    <a class="footerLink" style="color: #752f01;">روابط مهمة</a>
                    <a class="footerLink" style="font-size: 20px;" href="{{route('chip')}}">سياسة الاسترجاع</a>
                    <a class="footerLink" style="font-size: 20px;" href="{{ route('chipp') }}">سياسة الشحن</a>
                </div>
                <div class="col-lg-3">
                    <a class="footerLink" style="color: #752f01;">سياسة الخصوصية</a>
                    <a class="footerLink" style="font-size: 20px;" href="{{ route('privacy') }}">سياسة الخصوصية</a>
                </div>
                <div class="col-lg-3">
                    <a class="footerLink" style="color: #752f01;">التواصل</a>
                    <a class="footerLink" style="font-size: 20px;" href="#">التواصل على الانستقرام</a>
                    <a class="footerLink" style="font-size: 20px;" href="#">التواصل على الواتساب</a>
                </div>
            </div>
            <br>
            <div class="footerText" style="font-size: 16px;">
                <span style="font-family: 'Poppins',sans-serif;font-size: 18px;">Seventeen Sweets</span>
                <br> &copy; 2022 صنع بحب ❤️ جميع الحقوق محفوظة
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
       document.addEventListener('DOMContentLoaded', function() {
    // إخفاء الـ div الذي يحتوي على البطاقات
    document.querySelector('.category-container').style.display = 'none';
    document.querySelector('.product-container').style.display = 'none';
});

// وظيفة الفلترة بناءً على catId
function filterCategories(catId) {
    // إظهار الـ category-container إذا تم النقر على أي فئة
    document.querySelector('.category-container').style.display = 'block';

    // إخفاء جميع البطاقات
    document.querySelectorAll('.category-container .category-card').forEach(function(card) {
        card.style.display = 'none'; // إخفاء جميع البطاقات
    });

    // إظهار البطاقات التابعة للفئة المختارة
    document.querySelectorAll(`.category-card[data-cat-id="${catId}"]`).forEach(function(card) {
        $(card).fadeIn(300); // إظهار البطاقات التابعة للفئة باستخدام Fade In
    });
}

function filterProducts(category_id) {
    // إظهار الـ category-container إذا تم النقر على أي فئة
    document.querySelector('.product-container').style.display = 'block';

    // إخفاء جميع البطاقات
    document.querySelectorAll('.product-container .product-cardd').forEach(function(card) {
        card.style.display = 'none'; // إخفاء جميع البطاقات
    });

    // إظهار البطاقات التابعة للفئة المختارة
    document.querySelectorAll(`.product-cardd[data-cat-id="${category_id}"]`).forEach(function(card) {
        $(card).fadeIn(300); // إظهار البطاقات التابعة للفئة باستخدام Fade In
    });
}

        $(document).ready(function() {
            $('.slick-slider').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 2,
                swipe: true,
                arrows: false,
                rtl: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        });
    </script>
</body>
</html>
