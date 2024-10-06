
@extends('admin.layout.main')

@section('content')


<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">إجمالي الأقسام</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{ $cats->count() }}
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape shadow text-center" style="background:#661d00;border-radius: 12px;">
                  <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">إجمالي الأصناف</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{ $categories->count() }}
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape shadow text-center" style="background:#661d00;border-radius: 12px;">
                  <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">إجمالي المنتجات</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{ $products->count() }}
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape shadow text-center" style="background:#661d00;border-radius: 12px;">
                  <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <p class="mb-1 pt-2 text-bold">منتجات المتجر</p>
                  <h5 class="font-weight-bolder">إضافة المنتجات</h5>
                  <p class="mb-5">من هنا يمكنك إضافة جميع الأقسام والأصناف والمنتجات</p>
                  <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{ route('admin.add') }}" style="background: #ccac8f;padding: 20px 30px;border-radius: 14px;color: #ffffff !important;text-align: center;font-size: 20px !important;">
                    اضغط هنا للإضافة
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                <div class="bg-gradient-primary h-100" style="background-image: linear-gradient(310deg, #661d00 5%, #ffcd45 100%);border-radius: 30px;">
                  <div class="position-relative d-flex align-items-center justify-content-center h-100">
                    <i class="fa-solid fa-cart-plus" style="color: #ffffff;font-size: 90px;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <p class="mb-1 pt-2 text-bold">منتجات المتجر</p>
                  <h5 class="font-weight-bolder">تعديل المنتجات</h5>
                  <p class="mb-5">من هنا يمكنك تعديل ومعاينة الأقسام والأصناف والمنتجات</p>
                  <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{ route('admin.show') }}" style="background: #ccac8f;padding: 20px 30px;border-radius: 14px;color: #ffffff !important;text-align: center;font-size: 20px !important;">
                    اضغط هنا للمعاينة
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                <div class="bg-gradient-primary h-100" style="background-image: linear-gradient(310deg, #661d00 5%, #ffcd45 100%);border-radius: 30px;">
                  <div class="position-relative d-flex align-items-center justify-content-center h-100">
                    <i class="fa-solid fa-tags"  style="color: #ffffff;font-size: 90px;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © جميع الحقوق محفوظة 2024 لمتجر
              <i class="fa fa-heart"></i> <a href="#" class="font-weight-bold" target="_blank">وسام العود</a>

            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

@endsection
