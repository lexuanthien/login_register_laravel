<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Đăng Ký</title>

    <link rel="stylesheet" href="{{ asset('websitenews/css/style.css') }}"> 
</head>

<body>
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                        <div class="section-heading">
                            <h5>Let's Join Us!</h5>
                        </div>

                        <form action="{{ route('login') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            
                            <button id="nutlogin" type="submit" class="btn btn-success">Login</button>
                        </form>
                        <br>
                        <a href="{{ route('getRegister')}}">Register</a>
                        <br>

                        <br>
                        <div>
                            <!-- DÙNG ĐỂ HIỂN THỊ LỖI -->
                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            <div>
                            @endif
                            
                            @if(session('thongbao'))
                                <div class="alert alert-danger">
                                        {{session('thongbao')}}
                                </div>
                            @endif
                        <!-- HIỂN THỊ LỖI -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
</body>

</html>