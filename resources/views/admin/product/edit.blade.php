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
                    <h5 class="font-weight-bolder">تعديل منتج {{ $product->name }}</h5>
                </div>
                    <!-- الحقول -->
                    <form action="{{ route('product.update' , $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="sectionName" class="form-label">اسم المنتج</label>
                            <input type="text" value="{{ $product->name }}" name="name" class="form-control" id="sectionName" placeholder="أدخل اسم المنتج">
                          </div>
                          <div class="mb-3">
                            <label for="sectionName" class="form-label">سعر المنتج</label>
                            <input type="text" value="{{ $product->price }}" name="price" class="form-control" id="sectionName" placeholder="أدخل سعر المنتج">
                          </div>

                          <div class="mb-3">
                            <label for="category" class="form-label">اختيار القسم الرئيسي</label>
                            <select name="cat_id" class="form-select" id="category" onchange="fetchCategoriesByCatId(this.value)">
                                <option value="">اختر من القائمه</option>
                                @foreach ($cats as $cat)
                                    <option value="{{ $cat->id }}"@if ($product->cat_id == $cat->id)
                                        selected
                                    @endif>{{$cat->name}}</option>
                                @endforeach
                            </select>
                          </div>

                          <div class="mb-3">
                            <label for="category" class="form-label">اختيار الصنف</label>
                            <select class="form-select" name="category_id" id="category">
                              <option selected>اختر من القائمة</option>
                              @foreach ($categories as $category )
                                <option value="{{ $category->id }}"@if ($product->category_id == $category->id)
                                    selected
                                @endif>{{ $category->name }}</option>
                              @endforeach
                            </select>
                          </div>

                      <div class="mb-3">
                        <label for="description" class="form-label">وصف المنتج</label>
                        <textarea class="form-control" name="disc" id="description" rows="3" placeholder="أدخل وصف المنتج">{{ $product->disc }}</textarea>
                      </div>

                      <div class="mb-3">
                        <label for="uploadImage" class="form-label">صورة المنتج</label>
                        <input class="form-control" name="image_path" type="file" id="uploadImage">
                      </div>

                      <button type="submit" class="btn btn-primary w-100">تعديل المنتج</button>
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











