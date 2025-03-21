<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام إدارة المحطة الكهربائية</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assetsLogin/css/styles.css') }}">



</head>

<body class="flex backcol">
    @if (session('error'))
        <div class="position-fixed top-50 start-50 translate-middle w-50">
            <div class="alert alert-light text-dark border text-center p-3">
                {{ session('error') }}
            </div>
        </div>
    @endif



    <div class="vid">
        <video src="{{ asset('assetsLogin/vidoe/1111.mp4') }}" id="myVedio" autoplay muted loop
            width="600"></video>
    </div>
    <div class="container">
        <div class="row justify-content-center min-vh-100 align-items-center">
            <div class="col-md-5">
                <div class="login-card p-4 text-white">
                    <h2 class="text-center mb-4 neon-text">
                        <i class="fas fa-charging-station"></i>
                        تسجيل الدخول
                    </h2>

                    <form id="#" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label">البريد الإلكتروني</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent text-white">
                                    <i class="fas fa-bolt"></i>
                                </span>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="text-white  small">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">كلمة المرور</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent text-white">
                                    <i class="fas fa-plug"></i>
                                </span>
                                <input type="password" class="form-control" id="password" name="password"
                                    value="{{ old('password') }}" required>
                                @error('password')
                                    <span class="text-white  small">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <br>


                        <button type="submit" class="btn btn-charge w-100 py-2">
                            <i class="fas fa-sign-in-alt"></i>
                            تسجيل
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsLogin/js/app.js') }}"></script>
</body>

</html>
