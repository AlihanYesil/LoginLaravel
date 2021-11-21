<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('adminTemplate')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('adminTemplate')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Hesap Oluştur!</h1>
                            </div>
                                <div>
                                @if ($errors->any())
                                    <ul>
                                        @foreach ($errors->all() as $hata)
                                            <li class="alert alert-danger">{{ $hata }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                </div>

                            <form class="user" method="POST" action="{{ route('kayit.post') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"  name="name" placeholder="Adınız" value="{{ old('name') }}">
                                        <span style="color:red">@error('name'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"   name="surname" value="{{ old('surname') }}"placeholder="Soyadınız">
                                        <span style="color:red">@error('surname'){{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"  name="email" value="{{ old('email') }}"placeholder="Email Hesabınız">
                                    <span style="color:red">@error('email'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"  name="password"  placeholder="Şifre">
                                        <span style="color:red">@error('password'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password_confirmation"  placeholder="Şifreni Onayla">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Kayıt Ol
                                </button>
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="{{ route('giris') }}">Zaten Hesabın varmı ? Giriş Yap!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('adminTemplate')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('adminTemplate')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('adminTemplate')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('adminTemplate')}}/js/sb-admin-2.min.js"></script>

</body>

</html>
