<html lang="en">
<head>
    <title>App Name - @yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boostrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>

    <!-- Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Boostrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link href="/css/app.css" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="wrapper">

        @include('parts.sidebar')

        <main class="main">
            <div class="top">
                ICON
            </div>
            <div class="content" style="padding: 25px 0;">
                @yield('content')
            </div>
        </main>

        @include('parts.toasts')

    </div>
</div>

<script>
    const deleteButtons = document.querySelectorAll('.delete-prompt')
    deleteButtons.forEach(function (element) {
        element.addEventListener('click', function (event) {
            if (!confirm("Are you sure?")) {
                event.preventDefault()
            }
        })
    });
</script>

</body>
</html>
