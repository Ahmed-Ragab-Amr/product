@extends('admin.layout.main')

@section('content')

<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
      <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="{{ asset('assets/img/bruce-mars.jpg') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              متجر وسام العود
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
              حساب مالك المتجر
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid py-4">
    <div class="row mt-4">
      <div class="col-12 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <h6 class="mb-0">تغيير كلمة المرور</h6>
          </div>
          <div class="card-body p-3">



            @if (session('success'))
                <div class="alert alert-primary">{{ session('success') }}</div>
            @endif
            
            <form action="{{ route('user.update' , ['id' => auth()->user()->id]) }}" method="POST">
                @csrf
              <div class="mb-3">
                <label for="currentpass" class="form-label">كلمة المرور الحالية</label>
                <input type="password" class="form-control" name="currentpass" id="currentpass" placeholder="أدخل كلمة المرور الحالية">
                @error('currentpass')
                    <span class="error-message">{{ $message }}</span>
                @enderror
                @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
              </div>
              <div class="mb-3">
                <label for="newPassword" class="form-label">كلمة المرور الجديدة</label>
                <input type="password" class="form-control" name="password" id="newPassword" placeholder="أدخل كلمة المرور الجديدة">
            </div>
            @error('newpass')
                <span class="alert alert-danger">{{ $message }}</span>
            @enderror
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">تأكيد كلمة المرور الجديدة</label>
                <input type="password" class="form-control" name="password_confirmation" id="confirmPassword" placeholder="أدخل كلمة المرور الجديدة مرة أخرى">
              </div>
              @error('password_confirmation')
                <span class="alert alert-danger">{{ $message }}</span>
            @enderror
              <button type="submit" class="btn btn-primary">تحديث كلمة المرور</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-8 d-flex align-items-center">
                <h6 class="mb-0">معلومات الملف الشخصي</h6>
              </div>
              <div class="col-md-4 text-end">
                <a href="javascript:;">
                  <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="تعديل الملف الشخصي"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            <p class="text-sm">بعض المعلومات المهمة عن المتجر باختصار لمدير الحساب</p>
            <hr class="horizontal gray-light my-4">
            <ul class="list-group">
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">الاسم الكامل : متجر وسام العود</strong></li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">الموقع : المملكة العربية السعودية</strong></li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">رقم الهاتف : +966555555555</strong></li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">البريد الإلكتروني : rraass852@gmail.com</strong></li>
            </ul>
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
