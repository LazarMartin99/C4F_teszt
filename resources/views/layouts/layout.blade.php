<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="text-center" style="margin: 50px 0 50px 0;"><a href="{{url("products")}}"></a><br>Lázár Martin tesztfeladat CodeForFlow
    </div>

    <div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <a class="btn btn-default"  href="http://localhost/Tesztfeladat_C4F/public/home">Home</a>
    </div>
</div>

    @yield('content')
</div>

</body>
</html>