<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

 

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<!-- <script>
    $(document).ready(function()
    {
        $("button").click(function()
        {
            alert('all set')
        })

    })

</script> -->
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    .img.slider-img{
        height: 400px !important

    }
    .custom-product{
        height: 500px;

    }
    .slider-text{
        background-color: black;
    }
    .trending-image{
        height: 100px

    }
    .trending-item{
        float: left;
        width: 20%; 

    }
    .trending-wrapper{
        margin: 30px;

    }
    .detail-img{
        
        height: 300px;


    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;

    }
    </style>
</html>