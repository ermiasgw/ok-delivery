<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('static/assets/img/favicon.png');?>" rel="icon">
  <link href="<?php echo base_url('static/assets/img/apple-touch-icon.png');?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
	<link href="<?php echo base_url('static/assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('static/assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('static/assets/vendor/remixicon/remixicon.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('static/assets/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('static/assets/vendor/quill/quill.snow.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('static/assets/vendor/quill/quill.bubble.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('static/assets/vendor/simple-datatables/style.css');?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('static/assets/css/style.css');?>" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?php echo base_url('static/assets/img/logo.png');?>" alt="">
        <span class="d-none d-lg-block">Ok Delivery</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url('static/assets/img/profile-img.jpg');?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed mt-5" href="/admin">
          <i class="bi bi-grid"></i>
          <span>Settings</span>
        </a>
      </li>
			<li class="nav-item">
        <a class="nav-link collapsed " href="/admin/about">
          <i class="bi bi-grid"></i>
          <span>About</span>
        </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Hero</span></i><i class="bi bi-chevron-down ms-auto"></i>
        </a>
				<ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin/hero_view">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
					<li>
            <a href="/admin/hero_add">
              <i class="bi bi-circle"></i><span>add</span>
            </a>
          </li>
          
        </ul>
      </li>

			<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav3" data-bs-toggle="collapse" href="#" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Estimation</span></i><i class="bi bi-chevron-down ms-auto"></i>
        </a>
				<ul id="components-nav3" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
					<li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>add</span>
            </a>
          </li>
          
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav4" data-bs-toggle="collapse" href="#" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Features</span></i><i class="bi bi-chevron-down ms-auto"></i>
        </a>
				<ul id="components-nav4" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
					<li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>add</span>
            </a>
          </li>
          
        </ul>
      </li>

			<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav5" data-bs-toggle="collapse" href="#" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Services</span></i><i class="bi bi-chevron-down ms-auto"></i>
        </a>
				<ul id="components-nav5" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
					<li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>add</span>
            </a>
          </li>
          
        </ul>
      </li>

			<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav6" data-bs-toggle="collapse" href="#" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Cars</span></i><i class="bi bi-chevron-down ms-auto"></i>
        </a>
				<ul id="components-nav6" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
					<li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>add</span>
            </a>
          </li>
          
        </ul>
      </li>

			<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav7" data-bs-toggle="collapse" href="#" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Sponsors</span></i><i class="bi bi-chevron-down ms-auto"></i>
        </a>
				<ul id="components-nav7" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
					<li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>add</span>
            </a>
          </li>
          
        </ul>
      </li>

			<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav8" data-bs-toggle="collapse" href="#" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Registration types</span></i><i class="bi bi-chevron-down ms-auto"></i>
        </a>
				<ul id="components-nav8" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
					<li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>add</span>
            </a>
          </li>
          
        </ul>
      </li>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    


