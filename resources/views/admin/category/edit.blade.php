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
                    <h5 class="font-weight-bolder">تعديل صنف {{ $category->name }}</h5>
                </div>
                    <!-- الحقول -->
                    <form action="{{ route('category.update' , $category->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="sectionName" class="form-label">اسم الصنف</label>
                            <input type="text" value="{{ $category->name }}" class="form-control" name="name" id="sectionName" placeholder="أدخل اسم الصنف">
                          </div>

                          <div class="mb-3">
                            <label for="category" class="form-label">اختيار القسم الرئيسي</label>
                            <select class="form-select" name="cat_id" id="category">
                              <option>اختر من القائمة</option>
                              @foreach ($cats as $cat)
                                <option value="{{ $cat->id }}" @if ($category->cat_id == $cat->id)
                                      selected
                                @endif>{{ $cat->name }}</option>
                              @endforeach
                            </select>
                          </div>

                      <button type="submit" class="btn btn-primary w-100">تعديل الصنف</button>
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
