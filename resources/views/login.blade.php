<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Varenyky CMS</title>
    <link rel="stylesheet" href="/css/admin.css" />
    <link rel="stylesheet" type="text/css" href="/css/auth.css">
    <link rel="stylesheet" type="text/css" href="/css/theme.css">
    <style>
        .ftco-section {
            padding: 7em 0;
        }

        .ftco-no-pt {
            padding-top: 0;
        }

        .ftco-no-pb {
            padding-bottom: 0;
        }

        .heading-section {
            font-size: 28px;
            color: #000;
        }

        .img {
            background-size: 80%;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .wrap {
            width: 100%;
            overflow: hidden;
            background: #fff;
            border-radius: 5px;
            -webkit-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
            box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
        }

        .img,
        .login-wrap {
            width: 50%;
        }

        @media (max-width: 991.98px) {

            .img,
            .login-wrap {
                width: 100%;
            }
        }

        @media (max-width: 767.98px) {
            .wrap .img {
                height: 250px;
            }
        }

        .login-wrap {
            position: relative;
            background: #fff h3;
            background-font-weight: 300;
        }

        .form-group {
            position: relative;
        }

        .form-group .label {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #000;
            font-weight: 700;
        }

        .form-group a {
            color: gray;
        }

        .form-control {
            height: 48px;
            background: #fff;
            color: #000;
            font-size: 16px;
            border-radius: 5px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .form-control::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: rgba(0, 0, 0, 0.2) !important;
        }

        .form-control::-moz-placeholder {
            /* Firefox 19+ */
            color: rgba(0, 0, 0, 0.2) !important;
        }

        .form-control:-ms-input-placeholder {
            /* IE 10+ */
            color: rgba(0, 0, 0, 0.2) !important;
        }

        .form-control:-moz-placeholder {
            /* Firefox 18- */
            color: rgba(0, 0, 0, 0.2) !important;
        }

        .form-control:focus,
        .form-control:active {
            outline: none !important;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid #e3b04b;
        }

        .social-media {
            position: relative;
            width: 100%;
        }

        .social-media .social-icon {
            display: block;
            width: 40px;
            height: 40px;
            background: transparent;
            border: 1px solid rgba(0, 0, 0, 0.05);
            font-size: 16px;
            margin-right: 5px;
            border-radius: 50%;
        }

        .social-media .social-icon span {
            color: #999999;
        }

        .social-media .social-icon:hover,
        .social-media .social-icon:focus {
            background: #e3b04b;
        }

        .social-media .social-icon:hover span,
        .social-media .social-icon:focus span {
            color: #fff;
        }
    </style>
</head>
<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img bg-dark" style="background-image: url({{ config('varenyky-admin.login-img') }});">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <form action="{{ route('admin.authenticate') }}" class="signin-form" method="POST">
                                @csrf
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">{{ $error }}</div>
                                @endforeach
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email"
                                        required="">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary rounded w-100 btn-lg">Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center  mt-3">
                <small class="text-center">{!! config('varenyky-admin.colophon') !!}</small>
            </div>
        </div>
    </section>
    <script src="/js/admin.js"></script>
</body>
</html>
