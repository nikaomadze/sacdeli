
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="wrapper">


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="/admin/books">მთავარი</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/admin/books">წიგნები</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/genre">ჟანრები</a>
              </li>
            </ul>
          </div>
        </nav>



        @yield("content")
    </body>
</html>
