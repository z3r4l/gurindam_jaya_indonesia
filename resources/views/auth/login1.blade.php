<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="row">
            <div class="col-lg-6">
                <div class="container" style="margin:10% 0">
                    <div class="container">
                        <h1 style="color: #FF4800;">GJI</h1>
                        <br><br>
                        <h5>Pilihan Akomodasi Travel Terbaikmu!</h5>
                    </div>
                    <nav class="container">
                        <div class="nav nav-underline mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-login-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-login" type="button" role="tab" aria-controls="nav-login"
                                aria-selected="true" style="padding:0 150px; color:#FF4800;">Masuk</button>
                            <button class="nav-link" id="nav-register-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-register" type="button" role="tab" aria-controls="nav-register"
                                aria-selected="false" style="padding:0 150px; color:#FF4800;">Daftar</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-login" role="tabpanel"
                            aria-labelledby="nav-login-tab">
                            <form action="{{ route('login.submit') }}" method="POST">
                                <div class="container">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="name@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                                    <div id="passwordHelpBlock" class="form-text" style="width: 80%">
                                        Your password must be 8-20 characters long, contain letters and numbers, and
                                        must
                                        not
                                        contain spaces, special characters, or emoji.
                                    </div>
                                </div>
                                <button type="submit" class="btn"
                                    style="width:80%; background-color: #FF4800; color:white;">Masuk
                                </button>
                            </form>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                        {{-- <div class="container">
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" placeholder="name@example.com"
                                    style="width: 80%">
                            </div>
                            <div class="mb-3">
                                <label for="telp" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" id="telp" placeholder="name@example.com"
                                    style="width: 80%">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com" style="width: 80%">
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" id="inputPassword5" class="form-control"
                                    aria-describedby="passwordHelpBlock" style="width: 80%">
                                <div id="passwordHelpBlock" class="form-text" style="width: 80%">
                                    Your password must be 8-20 characters long, contain letters and numbers, and
                                    must
                                    not
                                    contain spaces, special characters, or emoji.
                                </div>
                            </div>
                            <a href="" type="submit" class="btn"
                                style="width:80%; background-color: #FF4800; color:white;">Daftar</a>
                        </div> --}}
                        <form action="{{ url('/register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Nama Lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="telp" class="form-label">Nomor Telepon</label>
                                <input type="text" name="telp" class="form-control" id="telp"
                                    placeholder="Nomor Telepon">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="password_confirmation">
                            </div>
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="row">
                <img src="{{ asset('front/img/barelang.png') }}" alt="" style="width: 100%; height:916px">
            </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

</body>

</html>