<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container bg-light p-0" >
        <h3 class="text-center py-2 bg-primary text-capitalize">welcometo our webpage</h3>
        <div class="row clearfix">
            <div class="col-md-3 offset-1">
                <h2 class="text-dark text-capitalize mb-3">sidebar</h2>
                @yield("sidebar")
            </div>
            <div class="col-md-7">
                @yield("content")

            <div>
        </div>

    </div>
    <h4 class="text-center p-2 bg-primary text-capitalize">@copy;2022</h4>

</body>
</html>
