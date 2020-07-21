<!DOCTYPE html>
{{-- https://codepen.io/emkelley/details/pVrGxX --}}
<html lang="en" style="overflow: hidden;">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bulma -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" rel="stylesheet">
        <style>
          @import url("https://fonts.googleapis.com/css?family=IBM+Plex+Sans|Open+Sans");
          html,
          body {
            font-family: 'IBM Plex Sans', serif;
            font-size: 16px;
            line-height: 1.5;
            background: #edecf3;
          }

          .topNav {
            border-top: 2px solid #1a649c;
            height: 75px;
            background-image: linear-gradient(125deg, #edecf3 10%, #ffffff 100%);
            border-bottom: 1px solid #edecf3;
            z-index: 99;
          }
          .topNav .fa-user-circle {
            font-size: 1.2rem;
            margin-right: 10px;
            color: #1a649c;
          }

          .bottomNav .navbar-item {
            font-size: 14px;
            font-weight: 400;
            padding: 0px 30px;
            color: #505050 !important;
          }
          .bottomNav .navbar-item:hover {
            border-bottom: 2px solid #1a649c;
            background-color: white !important;
            color: #1b659e !important;
          }
          .bottomNav .navbar-item.is-active {
            border-bottom: 2px solid #1a649c;
            background-color: white !important;
            color: #1b659e !important;
            font-weight: 600;
          }

          .columns {
            width: 100%;
            height: 100%;
          }

          .shadow {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.04), 0 3px 6px rgba(0, 0, 0, 0.08);
          }

          .main .heading {
            padding: 20px 0px;
            font-weight: 600;
            font-size: 1.1rem;
            text-transform: none;
          }
          .main #order {
            color: #ffffff;
          }
          .main #order strong {
            color: #ffffff;
          }
          .main #order article {
            padding: 12px;
            background-color: #1a649c;
            border-radius: 5px;
          }
          .main #order article.delivered {
            background: #13c268;
            border-radius: 5px;
          }
          .main #order .media-left {
            font-size: 2rem;
          }
          .main #order .media-right {
            line-height: 48px;
            padding-top: 11px;
          }
          .main #order .tag:not(body).is-success {
            background-color: #53a5e2;
          }
          .main #order .tag:not(body).is-delivered {
            background-color: #0e944f;
            color: white;
          }

          .tile .is-child {
            background: linear-gradient(155deg, rgba(32, 45, 61, 0.8) 0%, rgba(56, 75, 99, 0.8) 100%), url(http://cdn.backgroundhost.com/backgrounds/subtlepatterns/vaio_hard_edge.png);
            background-size: cover;
          }
          .tile .is-child .title, .tile .is-child .subtitle {
            color: white;
          }
        </style>
        @yield('styles')
    </head>
    <body style="overflow: hidden;">
      <nav class="navbar topNav">
          <div class="container ">
              <div class="navbar-brand">
                  <a class="navbar-item" href="/">
                      Project Manager
                  </a>
                  <div class="navbar-burger burger" data-target="">
                      <span></span>
                      <span></span>
                      <span></span>
                  </div>
              </div>
              <div class="navbar-end">
                  <div class="navbar-item has-dropdown is-hoverable">
                     <a href="#" class="navbar-link">
                       <i class="fa fa-user-circle"></i>
                       <span>{{\Auth::user()->name()}}</span>
                     </a>
                     <div class="navbar-dropdown is-right">
                       <a href="#" class="navbar-item">
                         Profile
                       </a>
                       <hr class="navbar-divider" />
                       <a href="/logout" class="navbar-item">Log Out</a>
                     </div>
                  </div>
              </div>
          </div>
      </nav>
      <nav class="navbar shadow">
          <div class="container">s
              <div class="navbar-menu">
                  <div class="navbar-start bottomNav ">
                      <a class="navbar-item {{request()->is("/") ? "is-active" : ""}}" href="/">
                          <i class="fa fa-tachometer-alt"></i>&nbsp; Dashboard</a>
                      <a class="navbar-item {{(request()->is("projects") || request()->is("projects/*")) ? "is-active" : ""}}" href="/projects">
                          <i class="fa fa-list"></i>&nbsp; Projects</a>
                  </div>
                  <div class="navbar-end">
                      <a class="navbar-item" href="#">
                          <i class="fa fa-cog"></i>&nbsp; Settings</a></a>
                  </div>
              </div>
          </div>
      </nav>
      <div class="container-fluid" style="overflow-y: auto; margin-top: 25px;">
        @yield('content')
      </div>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
      </script>
      @yield('scripts')
    </body>
</html>