<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySell</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .login{
        height:500px;
        padding-top: 100px;

    }
    .featured-image{
        height: 100px;
    }
    .featured-item{
        float: left;
        width: 20%;
    }
    .featured-wrapper{
        marginL 30px;
    }
    .detail-img{
        height:200px;
    }
    .search{
        width: 500px !important;
    }
    .nav-text{
        background-color:#35443585 !important;
    }
    img.nav-img{
        height: 300px !important;
        margin-left: auto;
        margin-right: auto;
    }

    .cart-divider{
        border-bottom: 1px solid #cccccc;
        margin-bottom: 20px;
        padding-bottom: 20px;

    }

</style>
</html>
