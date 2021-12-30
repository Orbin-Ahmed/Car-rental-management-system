<x-app-layout>  
</x-app-layout>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  <title></title>
</head>
<body>
  <div class="container-scroller">
      <nav style="background-color:white;" class="sidebar sidebar-offcanvas" id="sidebar">
        <div style="background-color:white;" class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a style="background-color:white;" href="/"><img src="assets/images/logo.png" width="260" height="90"></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/review">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Review</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/payment">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Payment</span>
            </a>
          </li>
        </ul>
      </nav>
      <div style="position:relative; top:60px; right:-150px;">
        <div><h2 style="padding:10px">Write Your Review Here:</h2></div>
        <form action="{{url('/addpayment')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div>
        <label>Name</label>
        <input style="color:blue;" type="text" name="name" placeholder="Your Name" required>
      </div>

      <div>
        <label>Email</label>
        <input style="color:blue;" type="text" name="email" placeholder="Your Email" required>
      </div>

      <div>
        <label>Phone</label>
        <input style="color:blue;" type="num" name="phone" placeholder="Your Phone Number" required>
      </div>

      <div>
        <label>Card Info</label>
        <input style="color:blue;" type="num" name="card" placeholder="Your credit card information" required>
      </div>

      <div>
        <label>Date</label>
        <input style="color:blue;" type="date" name="expirydate" placeholder="Expiry Date" required>
      </div>

      <div align="center">
        <input type="submit" value="Save">
      </div>

      </form>
      
    </div>
  </div>
  <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <script src="admin/assets/js/dashboard.js"></script>
</body>
</html>