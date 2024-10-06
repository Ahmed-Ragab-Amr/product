<!DOCTYPE html>
<html lang="ar">
  <head>
    <title>تسجيل الدخول - لوحة تحكم المتجر</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
      body {
        font-family: 'Cairo', sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      .container-login {
        background: white;
        border-radius: 30px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 400px;
        animation: fadeIn 0.8s; /* Animation on load */
      }
      .logo-container {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
      }
      .error-message {
        color: red;
        text-align: center;
        font-size: 16px;
        margin: 10px 0;
      }
      .input100 {
        border-radius: 10px;
        padding: 24px;
        width: 100%;
        font-size: 16px;
        margin-bottom: 20px;
        border: none;
        background: #e7e7e7;
      }
      .login100-form-btn {
        background: #431c00;
        border-radius: 24px;
        color: white;
        font-size: 18px;
        padding: 12px;
        width: 100%;
        border: none;
        cursor: pointer;
        transition: background 0.3s;
      }
      .login100-form-btn:hover {
        background: #2d1300; /* Darker shade on hover */
      }
      .label-checkbox100 {
        margin-left: 5px;
      }
    </style>
  </head>
  <body>
    <div class="container-login animate__animated animate__fadeIn">
      <div class="logo-container">
        <img src="logo.png" height="120" alt="Logo">
      </div>
      @if(session('email_error'))
        <div class="alert alert-danger">{{ session('email_error') }}</div>
      @endif
      @if(session('pass_error'))
        <div class="alert alert-danger">{{ session('pass_error') }}</div>
      @endif
      <form id="loginForm" class="login100-form" method="POST" action="{{ route('login') }}">
        @csrf
        <h3 class="text-center" style="color: #431c00; margin-bottom: 20px;">تسجيل الدخول إلى حسابك</h3>
        <div class="error-message"></div>
        <input id="username" class="input100 form-control" type="email" name="email" placeholder="اسم المستخدم" required>
        <input id="password" class="input100 form-control" type="password" name="password" placeholder="كلمة المرور" required>

        <button type="submit" class="login100-form-btn">تسجيل الدخول</button>
      </form>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
