@extends('admin.layout.main')

@section('content')

<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-6 mx-auto mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-12">
                  <div class="d-flex flex-column h-100">
                    <div style="text-align: center;">
                    <p class="mb-1 pt-2 text-bold">إدارة المتجر</p>
                    <h5 class="font-weight-bolder">تعديل قسم {{ $cat->name }}</h5>
                </div>
                    <!-- الحقول -->
                    <form action="{{ route('cats.update' , $cat->id) }}" method="post">
                        @csrf
                        @method('put')
                      <div class="mb-3">
                        <label for="sectionName" class="form-label">اسم القسم</label>
                        <input type="text" value="{{ $cat->name }}" class="form-control" name="name" id="sectionName" placeholder="أدخل اسم القسم">
                      </div>

                      <button type="submit" class="btn btn-primary w-100">تعديل القسم</button>
                    </form>

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