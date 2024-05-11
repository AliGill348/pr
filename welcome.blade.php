<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Navbar</title>
    <link href="index.css" rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        .navbar-custom {
            background-color: #7ca8d3; /* Dark gray background */
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: #ffffff; /* White text */
            transition: color 0.3s; /* Smooth transition on color change */
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            color: #ffc107; /* Yellow text on hover */
        }
        .alignemnt{
          align-content: center
          justify-content: center;
        }
        .table_desiging
        {
            display: flex;
            align-content: center;
          justify-content: center;
          border:solid 2px black;
          margin: 20px;

        }
        .table_th
        {
            display: inline;
         align-content: center;
          justify-content: center;
          margin-left: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse alignemnt" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('practice')}}">Practice</a>
                </li>
                <li>
                    <a class="nav-link" href="{{url('Classes')}}">Class</a>
                </li>
            </ul>
        </div>
    </nav>
@yield('contant')
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
