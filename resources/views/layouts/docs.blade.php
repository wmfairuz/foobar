<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Include your CSS stylesheets here -->
</head>
<body>
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="mt-0">@yield('page-title')</h1>
            @yield('action-button')
        </div>
        

        <div class="content mt-4">

            @yield('content')

        </div>
        


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>