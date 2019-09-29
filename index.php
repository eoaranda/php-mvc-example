<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Edgar Aranda - Quick PHP MVC Example">
  <title>MVC Example - Edgar Aranda - <?php echo date("Y"); ?></title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://getbootstrap.com/docs/4.3/examples/dashboard/dashboard.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/w/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.css"/>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 ">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">MVC Example</a>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" data-url="views/user.dashboard" href="#">
                <span data-feather="bar-chart-2"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-url="views/user.data.ajax" href="#">
                <span data-feather="user"></span>
                User Data
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-url="views/user.appliance.total.view.ajax" href="#">
                <span data-feather="user"></span>
                User - Appliances 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-url="views/user.appliance.log.view.ajax" href="#">
                <span data-feather="user"></span>
                User - Access history
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-url="views/appliances.data.ajax" href="#">
                <span data-feather="monitor"></span>
                Appliance
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-url="views/user.data.server" href="#">
                <span data-feather="user"></span>
                User Data - Server
              </a>
            </li>
          </ul>

        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <?php include("views/user.dashboard.php"); ?>
      </main>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/w/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.js"></script>
</body>
<script src="js/main.js"></script>

</html>