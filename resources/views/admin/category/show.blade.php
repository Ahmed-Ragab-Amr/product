
@extends('admin.layout.main')

@section('content')


<div class="container-fluid py-4">
    <div class="row mt-4">
      <div class="col-lg-8 mx-auto mb-lg-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-12">
                <div class="d-flex flex-column h-100">
                  <div style="text-align: center;">
                    <p class="mb-1 pt-2 text-bold">إدارة المتجر</p>
                    <h5 class="font-weight-bolder">معاينة الأصناف</h5>
                  </div>
                                      <div class="table-responsive" style="direction: rtl;">
                                        <table class="table table-bordered text-center align-middle table-hover" style="margin: 0 auto; max-width: 600px; border-radius: 10px; overflow: hidden;">
                                          <thead class="bg-primary text-white">
                                            <tr>
                                              <th style="width: 50px;">الرقم</th>
                                              <th>الصنف</th>
                                              <th>الإجراءات</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($categories as $index => $category)

                                            <tr>
                                                <td>{{ $index+1 }}</td>
                                              <td>{{ $category->name }}</td>
                                              <td style="display: flex; justify-content:space-around">

                                                <form action="{{ route('category.delete' , $category->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm me-2">
                                                        <i class="fa fa-trash"></i> حذف
                                                    </button>
                                                </form>
                                                <a style="text-decoration: none; color:white" href="{{ route('category.edit' , $category->id) }}">
                                                <button class="btn btn-primary btn-sm" >
                                                  <i class="fa fa-edit"></i>تعديل
                                                </button>
                                                </a>
                                              </td>
                                            </tr>

                                            @endforeach

                                          </tbody>
                                        </table>
                                      </div>

                  <!-- نهاية الجدول -->
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
