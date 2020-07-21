<!DOCTYPE html>
{{-- https://codepen.io/arpodungge/pen/mdyrjqd --}}
<html lang="en">
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
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" rel="stylesheet">
        <style>
html,
body {
  height: 100%;
  background-color: hsl(0, 0%, 96%);
}
.px-1,
.p-1 {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}
.py-1,
.p-1 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}
.box-shadow-y {
  box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.05);
}
.menu-container {
  padding-top: 20px;
  height: 100%;
  overflow-y: auto;
  position: fixed;
  bottom: 0;
  margin: auto;
  min-width: 300px;
  z-index: 10;
  background-color: transparent;
  transform: translateX(-100%);
  transition: all ease 0.5s;
}
.menu-container.active {
  transform: translateX(0%);
}
.icon {
  vertical-align: middle;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin-right: 5px !important;
}
.toggler {
  margin-left: 0;
  cursor: pointer;
}
@media (min-width: 769px) {
  .menu-container {
    width: 25%;
    min-width: auto;
    transform: translateX(0%);
  }
}
@media (min-width: 1024px) {
  .menu-container {
    width: 16.6667%;
    min-width: auto;
    transform: translateX(0%);
  }
}
.main-sidebar{
  padding-top: 55px;
    top: 0;
    left: 0;
    height: 100%;
    min-width: 100%;
    z-index: 810;
    background-color: #222d32;
    overflow-y: auto;
    position: fixed;
    bottom: 0;
    margin: auto;
   }
.sidebar-menu {
  list-style: none;
  margin: 0;
  padding: 0;
  background-color: #222d32; }
  .sidebar-menu > li {
    position: relative;
    margin: 0;
    padding: 0; }
    .sidebar-menu > li > a {
      padding: 12px 5px 12px 15px;
      display: block;
      border-left: 3px solid transparent;
      color: #b8c7ce; }
      .sidebar-menu > li > a > .fa {
        width: 20px; }
    .sidebar-menu > li:hover > a, .sidebar-menu > li.active > a {
      color: #fff;
      background: #1e282c;
      border-left-color: #3c8dbc; }
    .sidebar-menu > li > .treeview-menu {
      margin: 0 1px;
      background: #2c3b41; }
    .sidebar-menu > li .label,
    .sidebar-menu > li .badge {
      margin-top: 3px;
      margin-right: 5px; }
  .sidebar-menu li.header {
    padding: 10px 25px 10px 15px;
    font-size: 22px;
    color: #4b646f;
    background: #1a2226; }
  .sidebar-menu li > a > .fa-angle-left {
    width: auto;
    height: auto;
    padding: 0;
    margin-right: 10px;
    margin-top: 3px; }
  .sidebar-menu li.active > a > .fa-angle-left {
    transform: rotate(-90deg); }
  .sidebar-menu li.active > .treeview-menu {
    display: block; }
  .sidebar-menu a {
    color: #b8c7ce;
    text-decoration: none; }
  .sidebar-menu .treeview-menu {
    display: none;
    list-style: none;
    padding: 0;
    margin: 0;
    padding-left: 5px; }
    .sidebar-menu .treeview-menu .treeview-menu {
      padding-left: 20px; }
    .sidebar-menu .treeview-menu > li {
      margin: 0; }
      .sidebar-menu .treeview-menu > li > a {
        padding: 5px 5px 5px 15px;
        display: block;
        font-size: 14px;
        color: #8aa4af; }
        .sidebar-menu .treeview-menu > li > a > .fa {
          width: 20px; }
        .sidebar-menu .treeview-menu > li > a > .fa-angle-left,
        .sidebar-menu .treeview-menu > li > a > .fa-angle-down {
          width: auto; }
      .sidebar-menu .treeview-menu > li.active > a, .sidebar-menu .treeview-menu > li > a:hover {
        color: #fff; }

        </style>
        @yield('styles')
    </head>
    <body class="has-navbar-fixed-top">
      <nav class="navbar is-fixed-top box-shadow-y">
       <div class="navbar-brand">
         <a
           role="button"
           class="navbar-burger toggler"
           aria-label="menu"
           aria-expanded="false"
         >
           <span aria-hidden="true"></span>
           <span aria-hidden="true"></span>
           <span aria-hidden="true"></span>
         </a>
         <a href="#" class="navbar-item has-text-weight-bold has-text-black is-size-5">
           Bulma Admin
         </a>
         <a
           role="button"
           class="navbar-burger nav-toggler"
           aria-label="menu"
           aria-expanded="false"
         >
           <span aria-hidden="true"></span>
           <span aria-hidden="true"></span>
           <span aria-hidden="true"></span>
         </a>
       </div>
       <div class="navbar-menu has-background-white">
         <div class="navbar-start">
           <a href="#" class="navbar-item">
             <i class="fas fa-home icon"></i> Home
           </a>
           <a href="#" class="navbar-item">
             About
           </a>
           <a href="#" class="navbar-item">
             Features
           </a>
           <a href="#" class="navbar-item">Pricing</a>
         </div>
         <div class="navbar-end">
           <a href="#" class="navbar-item">
             Notifications
           </a>
           <div class="navbar-item has-dropdown is-hoverable">
             <a href="#" class="navbar-link">
               Admin
             </a>
             <div class="navbar-dropdown is-right">
               <a href="#" class="navbar-item">
                 Profile
               </a>
               <a href="#" class="navbar-item">Settings</a>
               <hr class="navbar-divider" />
               <a href="#" class="navbar-item">Log Out</a>
             </div>
           </div>
         </div>
       </div>
     </nav>
     <div class="columns is-variable is-0">
       <div>
         <div class="menu-container px-1 has-background-white">
           <div class="menu-wrapper py-1">
             <aside class="main-sidebar">
                  <section  class="sidebar">
                      <ul class="sidebar-menu">
                      <li class="header">Profile</li>
                      <li class="treeview">
                          <a href="#">
                          <i class="fa fa-files-o"></i> <span>Dashboard</span> 
                          </a>
                          <ul class="treeview-menu">
                          <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard 一 v1</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard 一 v2</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                          <i class="fa fa-files-o"></i>
                          <span>Component</span> 
                          </a>
                          <ul class="treeview-menu" style="display: none;">
                          <li><a href="#"><i class="fa fa-circle-o"></i> Box</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Button</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Content</a></li>
                          <li class=""><a href="#"><i class="fa fa-circle-o"></i> Icon</a>
                          </li>
                          </ul>
                      </li>
                      <li>
                          <a href="#">
                          <i class="fa fa-files-o"></i> <span>Element</span>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="#"><i class="fa fa-circle-o"></i>Breadcumb</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                          <i class="fa fa-files-o"></i><span>Form</span>
                          </a>
                          <ul class="treeview-menu">
                          <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Input</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Text Area</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Select</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                          <i class="fa fa-files-o"></i>
                          <span>Columns</span>
                          </a>
                          <ul class="treeview-menu">
                          <li><a href="#"><i class="fa fa-circle-o"></i> Basics</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Size</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Responsive</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Nesting</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Gap</a></li>
                          <li>
                              <li class="treeview">
                                  <a href="#">
                                  <i class="fa fa-files-o"></i><span>Layout</span>
                                  </a>
                                  <ul class="treeview-menu">
                                  <li><a href="#"><i class="fa fa-circle-o"></i> Container</a></li>
                                  <li><a href="#"><i class="fa fa-circle-o"></i> Level</a></li>
                                  <li><a href="#"><i class="fa fa-circle-o"></i> Hero</a></li>
                                  <li><a href="#"><i class="fa fa-circle-o"></i> Section</a></li>
                                  </ul>
                              </li>
                          </li>
                          </ul>
                      </li>
                  </section>
              </aside>
           </div>
         </div>
       </div>
       <div
         class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile"
       >
         <div class="p-1">
           <div class="columns is-variable is-desktop">
             <div class="column">
               <h1 class="title">
                 Dashboard
               </h1>
             </div>
           </div>
           <div class="columns  is-variable is-desktop">
             <div class="column">
               <div class="card has-background-primary has-text-white">
                 <div class="card-header">
                   <div class="card-header-title has-text-white">
                     Top Seller Total
                   </div>
                 </div>
                 <div class="card-content">
                   <p class="is-size-3">56,590</p>
                 </div>
               </div>
             </div>
             <div class="column">
               <div class="card has-background-warning has-text-black">
                 <div class="card-header">
                   <div class="card-header-title has-text-black is-uppercase">
                     Revenue
                   </div>
                 </div>
                 <div class="card-content">
                   <p class="is-size-3">55%</p>
                 </div>
               </div>
             </div>
             <div class="column">
               <div class="card has-background-info has-text-white">
                 <div class="card-header">
                   <div class="card-header-title has-text-white is-uppercase">
                     Feedback
                   </div>
                 </div>
                 <div class="card-content">
                   <p class="is-size-3">78 %</p>
                 </div>
               </div>
             </div>
             <div class="column">
               <div class="card has-background-danger has-text-white">
                 <div class="card-header">
                   <div class="card-header-title has-text-white">Orders</div>
                 </div>
                 <div class="card-content">
                   <p class="is-size-3">425k</p>
                 </div>
               </div>
             </div>
           </div>
           <div class="columns is-variable">
             <div class="column is-4-desktop is-6-tablet">
               <article class="message is-info">
                 <div class="message-header">
                   <p>Info</p>
                   <button class="delete" aria-label="delete"></button>
                 </div>
                 <div class="message-body">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                   <strong>Pellentesque risus mi</strong>, tempus quis placerat
                   ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet
                   fringilla. Nullam gravida purus diam, et dictum
                   <a>felis venenatis</a> efficitur. Aenean ac
                   <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu
                   et sollicitudin porttitor, tortor urna tempor ligula, id
                   porttitor mi magna a neque. Donec dui urna, vehicula et sem
                   eget, facilisis sodales sem.
                 </div>
               </article>
             </div>
             <div class="column is-4-desktop is-6-tablet">
               <article class="message is-success">
                 <div class="message-header">
                   <p>Info</p>
                   <button class="delete" aria-label="delete"></button>
                 </div>
                 <div class="message-body">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                   <strong>Pellentesque risus mi</strong>, tempus quis placerat
                   ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet
                   fringilla. Nullam gravida purus diam, et dictum
                   <a>felis venenatis</a> efficitur. Aenean ac
                   <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu
                   et sollicitudin porttitor, tortor urna tempor ligula, id
                   porttitor mi magna a neque. Donec dui urna, vehicula et sem
                   eget, facilisis sodales sem.
                 </div>
               </article>
             </div>
           </div>
         </div>
       </div>
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
