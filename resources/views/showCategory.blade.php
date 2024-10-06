<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seventeen Sweets | الصفحة الرئيسية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}" />
    <style>
        /* تصميم البطاقة */
        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
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
    </style>
</head>
<body>
    <div class="pageHeader">
        <div class="container">
            <a href="#">
                <img style="margin-top: -30px;margin-bottom: -20px;" src="{{ asset('user/img/wesam.png') }}" width="130px">
            </a>
            <nav class="navbar navbar-expand-lg">
                <br>
                <br>
                <br>
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
                            <a class="nav-link" href="{{ route('home') }}">الرئيسية</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- قسم المنتجات -->
    <section class="product-section" style="direction: rtl; margin-top: 50px;">
        <div class="container">
            <div class="row">
                <!-- المنتج 1 -->
                @foreach ($products as $product)
                    
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card">
                        <img src="{{ asset($product->image_path) }}" alt="منتج 1" class="product-image">
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
                    <a class="footerLink" style="font-size: 14px;"> متجر وسام العود للعطور</a>
                </div>
                <div class="col-lg-3">
                    <a class="footerLink" style="color: #752f01;">روابط مهمة</a>
                    <a class="footerLink" style="font-size: 16px;" href="{{ route('chip') }}">سياسة الاسترجاع</a>
                    <a class="footerLink" style="font-size: 16px;" href="{{ route('chipp') }}">سياسة الشحن</a>
                </div>
                <div class="col-lg-3">
                    <a class="footerLink" style="color: #752f01;">سياسة الخصوصية</a>
                    <a class="footerLink" style="font-size: 16px;" href="{{ route('privacy') }}">سياسة الخصوصية</a>
                </div>
                <div class="col-lg-3">
                    <a class="footerLink" style="color: #752f01;">التواصل</a>
                    <a class="footerLink" style="font-size: 16px;" href="#">التواصل على الانستقرام</a>
                    <a class="footerLink" style="font-size: 16px;" href="#">التواصل على الواتساب</a>
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
</body>
</html>
