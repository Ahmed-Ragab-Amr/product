<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <title>
    لوحة التحكم | متجر وسام العود
  </title>
  <link href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/d4a7f8e054.js" crossorigin="anonymous"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 ps bg-white" id="sidenav-main">
    <div class="sidenav-header" style="margin-bottom: 14px;">
      <a href="#" target="_blank">
        <img src="../wesam.png" alt="main_logo" style="display: block; margin: 0 auto; width: 100px; height: 150px;margin-top: -14px;margin-bottom: 20px;">
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  active" href="{{ route('admin.home') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-store" style="color: #ffffff;font-size: 14px;"></i>
            </div>
            <span class="nav-link-text ms-1">الرئيسية</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{ route('admin.add') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-basket-shopping" style="color: #4e4e4e;font-size: 14px;"></i>
            </div>
            <span class="nav-link-text ms-1">إضافة المنتجات</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{ route('admin.show') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-basket-shopping" style="color: #4e4e4e;font-size: 14px;"></i>
            </div>
            <span class="nav-link-text ms-1">معاينة المنتجات</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">حساب المدير</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{ route('admin.profile') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-user" style="color: #4e4e4e;font-size: 14px;"></i>
            </div>
            <span class="nav-link-text ms-1">الملف الشخصي</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
        <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpg')"></div>
        <div class="card-body text-start p-3 w-100">
          <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
            <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
          </div>
          <div class="docs-info">
            <h6 class="text-white up mb-0">هل تحتاج إلى مساعدة؟</h6>
            <p class="text-xs font-weight-bold">أخبر المطور بمشكلتك أو اقتراحك</p>
            <a href="https://wa.me/+966596604081" target="_blank" class="btn btn-white btn-sm w-100 mb-0">تواصل مع المطور</a>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">أهلا بك</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">لوحة تحكم متجر وسام العود</h6>
        </nav>
      </div>
    </nav>


    @yield('content')


</main>
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }

  function fetchCategoriesByCatId(catId) {
            if (catId) {
                fetch(`/categories/${catId}`)
                    .then(response => response.json())
                    .then(data => {
                        const categorySelect = document.querySelector('select[name="category_id"]');
                        categorySelect.innerHTML = '<option value="">اختر من القائمه</option>';

                        data.forEach(category => {
                            const option = document.createElement('option');
                            option.value = category.id;
                            option.textContent = category.name;
                            categorySelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error fetching categories:', error));
            } else {
                const categorySelect = document.querySelector('select[name="category_id"]');
                categorySelect.innerHTML = '<option value="">اختر القسم</option>';
            }
        }

</script>
<script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.7') }}"></script>
</body>

</html>
