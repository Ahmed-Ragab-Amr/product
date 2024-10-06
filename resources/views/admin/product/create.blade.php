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
                    <h5 class="font-weight-bolder">إضافة منتج جديد</h5>
                </div>
                    <!-- الحقول -->
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="sectionName" class="form-label">اسم المنتج</label>
                            <input type="text" name="name" class="form-control" id="sectionName" placeholder="أدخل اسم المنتج">
                          </div>
                          <div class="mb-3">
                            <label for="sectionName" class="form-label">سعر المنتج</label>
                            <input type="text" name="price" class="form-control" id="sectionName" placeholder="أدخل سعر المنتج">
                          </div>

                          <div class="mb-3">
                            <label for="category" class="form-label">اختيار القسم الرئيسي</label>
                            <select name="cat_id" class="form-select" id="category" onchange="fetchCategoriesByCatId(this.value)">
                                <option value="">اختر من القائمه</option>
                                @foreach ($cats as $cat)
                                    <option value="{{ $cat->id }}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                          </div>

                          <div class="mb-3">
                            <label for="category" class="form-label">اختيار الصنف</label>
                            <select class="form-select" name="category_id" id="category">
                              <option selected>اختر من القائمة</option>
                              @foreach ($categories as $category )
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                            </select>
                          </div>

                      <div class="mb-3">
                        <label for="description" class="form-label">وصف المنتج</label>
                        <textarea class="form-control" name="disc" id="description" rows="3" placeholder="أدخل وصف المنتج"></textarea>
                      </div>

                      <div class="mb-3">
                        <label for="uploadImage" class="form-label">صورة المنتج</label>
                        <input class="form-control" name="image_path" type="file" id="uploadImage">
                      </div>

                      <button type="submit" class="btn btn-primary w-100">إضافة المنتج</button>
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












{{--
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة منتج</title>
    <!-- إضافة Font Awesome للأيقونات -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        form input, form button, form select, form textarea {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        form button {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border: none;
        }

        form button:hover {
            background-color: #0056b3;
        }

        .custom-file-input {
            position: relative;
            overflow: hidden;
            width: 30%;
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .custom-file-input i {
            font-size: 1.2em;
        }

        .custom-file-input:hover {
            background-color: #0056b3;
        }

        #fileInput {
            display: none; /* اخفاء المدخل الفعلي */
        }

        .image-preview {
            margin-top: 20px;
            max-width: 100%;
            max-height: 200px;
            display: none;
        }
    </style>

    <script>


        // دالة لعرض الصورة المختارة
        function previewImage(event) {
            const image = document.getElementById('imagePreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    image.src = e.target.result;
                    image.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                image.src = '';
                image.style.display = 'none';
            }
        }

        function triggerFileInput() {
            document.getElementById('fileInput').click();
        }
    </script>
</head>
<body>

<div class="container">
    <h2>إضافة منتج جديد</h2>
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="اسم المنتج" required>
        <input type="text" name="price" placeholder="سعر المنتج" required>

        <!-- اختيار التصنيف -->
        <select name="cat_id" onchange="fetchCategoriesByCatId(this.value)">
            <option value="">اختر التصنيف</option>
            @foreach ($cats as $cat)
                <option value="{{ $cat->id }}">{{$cat->name}}</option>
            @endforeach
        </select>

        <!-- اختيار القسم -->
        <select name="category_id">
            <option value="">اختر القسم</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{$category->name}}</option>
            @endforeach
        </select>

        <textarea name="disc" placeholder="وصف المنتج"></textarea>

        <!-- حقل اختيار الصورة -->
        <div class="custom-file-input" onclick="triggerFileInput()">
            <i class="fas fa-upload"></i> ارفع صورة
        </div>
        <input type="file" id="fileInput" name="image_path" accept="image/*" onchange="previewImage(event)">
        <img id="imagePreview" class="image-preview" alt="معاينة الصورة">

        <button type="submit">اضافه منتج</button>
    </form>
</div>

</body>
</html> --}}
