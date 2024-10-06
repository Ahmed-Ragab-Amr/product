@extends('admin.layout.main')

@section('content')

<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-4 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <p class="mb-1 pt-2 text-bold">أقسام المتجر</p>
                    <h5 class="font-weight-bolder">إضافة الأقسام</h5>
                    <p class="mb-5">من هنا يمكنك إضافة الأقسام</p>
                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{ route('cats.create') }}" style="background: #ccac8f;padding: 20px 30px;border-radius: 14px;color: #ffffff !important;text-align: center;font-size: 14px !important;">
                        اضغط هنا لإضافة الأقسام
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class="bg-gradient-primary h-100" style="background-image: linear-gradient(310deg, #661d00 5%, #ffcd45 100%);border-radius: 30px;">
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <i class="fa-solid fa-store" style="color: #ffffff;font-size: 90px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <p class="mb-1 pt-2 text-bold">أصناف المتجر</p>
                    <h5 class="font-weight-bolder">إضافة الأصناف</h5>
                    <p class="mb-5">من هنا يمكنك إضافة الأصناف</p>
                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{ route('category.create') }}" style="background: #ccac8f;padding: 20px 30px;border-radius: 14px;color: #ffffff !important;text-align: center;font-size: 14px !important;">
                        اضغط هنا لإضافة الأصناف
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

        <div class="col-lg-4 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <p class="mb-1 pt-2 text-bold">منتجات المتجر</p>
                    <h5 class="font-weight-bolder">إضافة المنتجات</h5>
                    <p class="mb-5">من هنا يمكنك إضافة المنتجات</p>
                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{ route('product.create') }}" style="background: #ccac8f;padding: 20px 30px;border-radius: 14px;color: #ffffff !important;text-align: center;font-size: 14px !important;">
                      اضغط هنا لإضافة المنتجات
                      <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class="bg-gradient-primary h-100" style="background-image: linear-gradient(310deg, #661d00 5%, #ffcd45 100%);border-radius: 30px;">
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <i class="fa-solid fa-cart-plus"  style="color: #ffffff;font-size: 90px;"></i>
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
