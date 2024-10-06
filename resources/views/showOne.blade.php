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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}" />
    <style>
      .product-container {
          display: flex;
          justify-content: center;
          align-items: center;
          margin-top: 50px;
          padding: 30px;
          background-color: #ffffff;
          border-radius: 20px;
          border: 4px solid #752f01;
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      }

      .product-image-container {
          flex: 1;
          text-align: center;
      }

      .product-image {
          width: 100%;
          max-width: 400px; /* أقصى عرض للصورة */
          height: 300px; /* تحديد ارتفاع الصورة */
          object-fit: cover; /* ملائمة حجم الصورة داخل الإطار */
          border-radius: 10px;
          border: 3px solid #752f01;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }

      .product-info {
          flex: 1;
          margin-left: 30px;
          text-align: right;
          max-width: 500px;
      }

      .product-info h2 {
          font-size: 32px;
          font-weight: bold;
          color: #333;
          margin-bottom: 20px;
      }

      .product-info p {
          font-size: 18px;
          color: #666;
          margin-bottom: 15px;
      }

      .product-info .price {
          font-size: 24px;
          font-weight: bold;
          color: #752f01;
          margin-bottom: 20px;
      }

      .order-button {
          background-color: #752f01;
          color: white;
          padding: 15px 30px;
          font-size: 18px;
          font-weight: bold;
          border: none;
          border-radius: 10px;
          cursor: pointer;
          transition: background-color 0.3s ease;
      }

      .order-button:hover {
          background-color: #5c2400;
      }

      @media (max-width: 768px) {
          .product-container {
              flex-direction: column;
              text-align: center;
          }

          .product-info {
              margin-left: 0;
              margin-top: 20px;
              text-align: center;
          }

          .product-info h2 {
              font-size: 28px;
          }

          .product-info p, .product-info .price {
              font-size: 16px;
          }

          .product-image {
              max-width: 300px; /* تعديل عرض الصورة للشاشات الصغيرة */
              height: 250px; /* تعديل ارتفاع الصورة للشاشات الصغيرة */
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

    <section class="product-section" style="direction: rtl; margin-top: 50px;">
        <div class="container">
            <div class="product-container">
                <!-- الصورة -->
                <div class="product-image-container">
                    <img src="{{ asset($product->image_path) }}" width="100%" height="100%" alt="صورة المنتج" class="product-image">
                </div>

                <!-- معلومات المنتج -->
                <div class="product-info">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->disc }}</p>
                    <div class="price">{{ $product->price }}</div>
                    <button class="order-button">اطلب الآن</button>
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
