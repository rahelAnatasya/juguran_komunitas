<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Juguran Komunitas</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>
                                <input type="email" name="email" id="">
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Password</label>
                                <input type="text" name="password" id="">
                            </div>
                        </form>

                        <span>Sudah Memiliki Akun? <a href="{{ route('register') }}">Register</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
