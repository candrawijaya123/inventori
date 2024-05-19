<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOGIN - INVENTORI</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('connect') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('connect') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('connect') }}/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('connect') }}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('connect') }}/assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo text-center">
                                <img src="{{ asset('connect') }}/assets/images/logo-inventori.png">
                            </div>
                            <h4 class="text-dark">INVENTORI - APP</h4>
                            <h6 class="text-dark">Silahkan Login.</h6>
                            <form class="pt-3" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Email" name="email">
                                    @error('email')
                                        <div class="text-danger small mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password"
                                        placeholder="Password" name="password">
                                    @error('password')
                                        <div class="text-danger small mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-dark btn-lg font-weight-medium auth-form-btn">MASUK</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('connect') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('connect') }}/assets/js/off-canvas.js"></script>
    <script src="{{ asset('connect') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('connect') }}/assets/js/misc.js"></script>
    <!-- endinject -->
</body>

</html>
