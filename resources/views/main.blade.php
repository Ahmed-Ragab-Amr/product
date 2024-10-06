<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المنتجات</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        a{
            text-decoration: none;
        }
        .icon{
            display: none;
        }

        .new-style{
            margin: 0;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            gap: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex-direction: column; /* جعل العناصر تحت بعضها */
            align-items: center; /* محاذاة العناصر في المنتصف */
            transition: all 0.9s ease; /* تأثير الانتقال */
        }

        header {
            margin: 0;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            gap: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        header a  button{
            color: #007bff;
            text-decoration: none;
            padding-left: 50px;
            font-size: 18px;
            font-weight: bold;
        }
        header a:hover {
            color: #0056b3;
        }
        .container {
            text-align: center;
            padding: 20px;
        }
        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .tabs button {
            padding: 10px 20px;
            margin: 0 5px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
        }
        .tabs button.active {
            background-color: #007bff;
            color: white;
        }
        .tabs button:not(.active) {
            background-color: #d8e9ff;
        }
        .filter-container {
            background-color: #fff;
            padding: 10px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }
        .filter-buttons {
            display: flex;
            gap: 10px;
            padding: 10px 0;
            overflow-x: auto;
            white-space: nowrap;
            scroll-behavior: smooth;
        }
        .filter-buttons button {
            border: 2px solid #007bff;
            background-color: white;
            color: #007bff;
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 18px;
            cursor: pointer;
            margin: auto;
            white-space: nowrap;
        }
        .filter-buttons button:hover {
            background-color: #007bff;
            color: white;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }
        .product-card {
            background-color: white;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .product-image {
            background-color: #dcdcdc;
            height: 150px;
            border-radius: 8px;
        }
        .product-info {
            margin-top: 10px;
        }
        .product-info h3 {
            font-size: 14px;
            color: #007bff;
            margin: 5px 0;
        }
        .product-info p {
            font-size: 12px;
            color: #777;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        @media (max-width: 768px) {
            header {
                flex-wrap: wrap;
                justify-content: center;
            }
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 630px) {
            .icon{
                display: inline-block;
            }

            .icon {
            cursor: pointer; /* تغيير المؤشر عند المرور فوق الأيقونة */
            font-size: 30px; /* حجم الأيقونة */
            padding: 10px;
            border: 2px solid #007bff; /* حدود للأيقونة */
            border-radius: 5px; /* زوايا مستديرة للأيقونة */
            background-color: white; /* لون خلفية الأيقونة */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* ظل خفيف للأيقونة */
            display: flex; /* لجعل العناصر داخل الأيقونة أفقية */
            justify-content: center; /* محاذاة المحتوى في المنتصف */
            align-items: center; /* محاذاة العناصر عمودياً */
            transition: background-color 0.3s; /* تأثير الانتقال */
            margin-bottom: 10px; /* مسافة بين الأيقونة والقائمة */
        }

        .icon:hover {
            background-color: #e7f1ff; /* لون خلفية عند التحويم */
        }


            .one{
                display:none;
            }
            header{
                display: flex;
                justify-content: space-between;
            }

        }
        @media (max-width: 480px) {

            .products-grid {
                grid-template-columns: 1fr;
            }
        }

    }

    </style>
</head>
<body>

<header>
    
    <a class="one" href="#"><button style="padding: 20px; border:none; background:none;">الرئيسية</button></a>
    <a class="one" href="#"><button style="padding: 20px; border:none; background:none">منتجاتنا</button></a>
    <a href="#"><button style="padding: 20px; border:none; border-radius:10px; background:#eee; color:gray; ">شعار الموقع</button></a>
    <a class="one" href="#"><button style="padding: 20px; border:none; background:none">فروعنا</button></a>
    <a class="one" href="#"><button style="padding: 20px; border:none; background:none">تواصل معنا</button></a>
    <div class="icon">
        <span>|</span>
        <span>|</span>
        <span>|</span>
    </div>



</header>

<div class="container">



    @yield('content')


</div>
<script>
    const icon = document.querySelector('.icon');
    const elements = document.querySelectorAll('.one');
    const header = document.querySelector('header');

    // دالة لتبديل ظهور العناصر وتغيير نمط الهيدر
    const toggleElements = () => {
        elements.forEach(element => {
            // إظهار أو إخفاء العناصر
            element.style.display = (element.style.display === 'none' || element.style.display === '') ? 'block' : 'none';
        });

        // تغيير نمط الهيدر
        header.classList.toggle('new-style'); // إضافة أو إزالة الكلاس الجديد
    };

    // إضافة حدث الضغط على الأيقونة
    icon.addEventListener('click', toggleElements);

    // دالة للتحقق من عرض الشاشة
    const checkScreenWidth = () => {
        if (window.innerWidth > 630) {
            elements.forEach(element => {
                element.style.display = 'inline'; // جعل العناصر ظاهرة
            });
            header.classList.remove('new-style'); // إضافة الكلاس النشط
            icon.removeEventListener('click', toggleElements); // إلغاء حدث الضغط
        } else {
            // التأكد من أن العناصر مخفية في البداية
            elements.forEach(element => {
                element.style.display = 'none'; // إخفاء العناصر
            });
            icon.addEventListener('click', toggleElements); // إضافة حدث الضغط
        }
    };

    // استدعاء الدالة عند تحميل الصفحة
    checkScreenWidth();

    // استدعاء الدالة عند تغيير حجم الشاشة
    window.addEventListener('resize', checkScreenWidth);
</script>
</body>
</html>
