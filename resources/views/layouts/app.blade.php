<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
          crossorigin="anonymous">
    <script type="text/javascript" src="/app.js"></script>
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-6">@yield('heading')</h1>
        </div>
    </div>
    @yield('content')
</div>
</body>
</html>
