<!DOCTYPE html>
<!-- https://codepen.io/netzzwerg/pen/aPBGWq -->
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
          html {
  overflow-y: auto;
}

body {
  color: #ffffff;
}

.sidebar {
  padding-left: calc(2rem - 0.75rem);
  padding-right: calc(2rem - 0.75rem);
  position: absolute;
}

.sidebar .category-header {
  padding: 0.5em 0.75em;
}

.sidebar .menu {
  position: fixed;
  width: calc(13rem - 2.5rem);
  max-width: inherit;
}

.sidebar .menu-list a {
  font-size: 0.875rem;
  line-height: 24px;
  color: #949ba2;
}

.sidebar:before {
  content: "";
  background-color: #272b32;
  width: 13rem;
  position: fixed;
}

.sidebar,
.sidebar:before {
  top: 0;
  bottom: 0;
  left: 0;
}

.main {
  margin-left: 13rem;
  position: relative;
  padding-left: 2rem;
  padding-right: 2rem;
}

.main header {
  line-height: 18px;
}

.main header h2 {
  font-size: 24px;
  font-weight: 600;
  padding-bottom: 0.5rem;
}

.main header hr {
  background-color: transparent;
  border-top: 1px solid #3b414c;
}

.main header small {
  color: #949ba2;
  text-align: right;
}

.main:before {
  content: "";
  position: fixed;
  top: 0;
  bottom: 0;
  z-index: -2;
  left: 0;
  right: 0;
  background-image: -webkit-radial-gradient(top, circle cover, #353944 0%, #272b32 70%);
  background-image: -moz-radial-gradient(center, circle cover, #353944 0%, #272b32 70%);
  background-image: -o-radial-gradient(center, circle cover, #353944 0%, #272b32 70%);
  background-image: radial-gradient(center, circle cover, #353944 0%, #272b32 70%);
  background-position: 50%, 50%;
}

.sidebar,
.main {
  margin-top: 3.25rem;
  padding-top: 2rem;
}

.navbar {
  box-shadow: 0px 0px 21px #21232a;
}

.navbar-brand {
  width: 13rem;
  background-color: #ffa500;
  margin-right: calc(2rem - 0.75rem);
}

.navbar-brand .navbar-item {
  padding-left: 2rem;
}

.box hr {
  background-color: #3b414c;
}

.box.transparent {
  background-color: transparent;
}

.box.accent {
  background-color: #ffa500;
}

.box.accent .subtitle {
  color: #ffffff;
}

.statcard {
  font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-align: center;
}

.statcard .statcard-number {
  font-size: 2rem;
  font-weight: 300;
  line-height: 1.125;
}

.statcard .statcard-desc {
  font-size: 85%;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: #949ba2;
}

.statcard .delta-indicator {
  display: inline-block;
  padding: .4em;
  font-size: 12px;
  vertical-align: middle;
}

.statcard .delta-indicator:after {
  content: "";
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  margin-left: 2px;
  vertical-align: middle;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}

/* overwrite bulma, try to resolve with variables */
.box {
  background-color: #3b414c;
  box-shadow: none;
  border-radius: 3px;
}

.content h1,
.content h2,
.content h3,
.content h4,
.content h5,
.content h6,
.title,
.tile {
  color: #ffffff;
}

.subtitle {
  color: #949ba2;
}

.navbar-item.is-tab:hover {
  background-color: transparent;
  border-bottom-color: #949ba2;
}

.navbar-item.is-tab {
  border-bottom: 3px solid transparent;
  min-height: 3.25rem;
  padding-bottom: calc(0.5rem - 1px);
}

a.navbar-item:hover {
  color: #21232a;
}

.breadcrumb li + li::before,
.breadcrumb li a {
  color: #5b646d;
}

.breadcrumb li a:hover,
.breadcrumb li.is-active a {
  color: #ffffff;
}

.tabs ul {
  border-bottom-color: #5b646d;
}

.tabs li.is-active a {
  border-bottom-color: #ffffff;
  color: #ffffff;
}

.tabs a {
  border-bottom-color: #5b646d;
  color: #949ba2;
}

.tabs a:hover {
  border-bottom-color: #ffffff;
  color: #ffffff;
}

.pagination-link,
.pagination-next,
.pagination-previous {
  border-color: #949ba2;
  color: #949ba2;
}

.pagination-link.is-current,
.pagination-link:hover,
.pagination-next:hover,
.pagination-previous:hover {
  background-color: transparent;
  border-color: #ffffff;
  color: #ffffff;
}
        </style>
        @yield('styles')
    </head>
    <body>
      <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a href="#" class="navbar-item">
            <img src="https://bulma.io/images/bulma-logo-white.png" width="112" height="28">
          </a>
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbar-example">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbar-example" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item is-tab">Home</a>
            <a class="navbar-item is-tab ">Features</a>
            <a class="navbar-item is-tab">Documentation</a>
          </div>
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-light">
                  Log in
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <div class="wrapper">

        <div class="">

          <aside class="sidebar">
            <nav class="menu">
              <div class="menu-category">
                <header class="category-header">Dashboard</header>
                <ul class="menu-list">
                  <li><a>Static</a></li>
                  <li><a>Streaming</a></li>
                </ul>
              </div>
              <div class="menu-category">
                <header class="category-header">Elements</header>
                <ul class="menu-list">
                  <li><a>Box</a></li>
                  <li><a>Button</a></li>
                  <li><a>Content</a></li>
                  <li><a>Delete</a></li>
                  <li><a>Icon</a></li>
                  <li><a>Image</a></li>
                  <li><a>Notification</a></li>
                  <li><a>Progress bars</a></li>
                  <li><a>Table</a></li>
                  <li><a>Tag</a></li>
                  <li><a>Title</a></li>
                </ul>
              </div>
              <div class="menu-category">
                <header class="category-header">Components</header>
                <ul class="menu-list">
                  <li><a>Panels</a></li>
                  <li><a>Breadcrumb</a></li>
                  <li><a>Card</a></li>
                  <li><a>Dropdown</a></li>
                  <li><a>Menu</a></li>
                  <li><a>Message</a></li>
                  <li><a>Modal</a></li>
                  <li><a>Navbar</a></li>
                  <li><a>Pagination</a></li>
                  <li><a>Panel</a></li>
                  <li><a>Tabs</a></li>
                </ul>
              </div>
              <div class="menu-category">
                <header class="category-header">Pages</header>
                <ul class="menu-list">
                  <li><a>Login</a></li>
                  <li><a>Logout</a></li>
                  <li><a>Page not found</a></li>
                </ul>
              </div>
            </nav>
          </aside>

          <main class="main">

            <header class="is-clearfix">
              <div class="cats is-pulled-right has-text-right">
                <small>Bulma Theme<br>Dashboard<br> <span class="has-text-weight-bold has-text-white">v.0.1</span></small>
              </div>
              <div>
                <h2>Dashboard</h2>
                <small>Dashboard sdff sdfdsfdsf cvfvxgfd</small>
              </div>
              <hr></hr>
            </header>
            <div class="tile is-ancestor">
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <p class="title">329</p>
                  <p class="subtitle">Total Visits</p>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <p class="title">+20 %</p>
                  <p class="subtitle">Total Page Views</p>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <p class="title">201</p>
                  <p class="subtitle">Unique Visitor</p>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <p class="title">12 %</p>
                  <p class="subtitle">Purchases</p>
                </article>
              </div>
            </div>

            <header class="is-clearfix">
              <div class="cats is-pulled-right has-text-right">
                <small>Bulma Theme<br>Dashboard<br> <span class="has-text-weight-bold has-text-white">v.0.1</span></small>
              </div>
              <div>
                <h2>Bulma Boxes</h2>
                <small>Dashboard sdff sdfdsfdsf cvfvxgfd</small>
              </div>
              <hr></hr>
            </header>
            <div class="tile is-ancestor">
              <div class="tile is-parent">
                <article class="tile is-child box transparent">
                  <p class="title">329</p>
                  <p class="subtitle">Total Visits</p>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <p class="title">+20 %</p>
                  <p class="subtitle">Total Page Views</p>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <p class="title">201</p>
                  <p class="subtitle">Unique Visitor</p>
                </article>
              </div>

              <div class="tile is-parent">
                <article class="tile is-child box accent">
                  <p class="title">-12 %</p>
                  <p class="subtitle">Purchases</p>
                </article>
              </div>
            </div>

            <header class="is-clearfix">
              <div class="cats is-pulled-right has-text-right">
                <small>Dashboard Theme<br>Bulma Elements<br> <span class="has-text-weight-bold has-text-white">v.7.2</span></small>
              </div>
              <div>
                <h2>Bulma Elements</h2>
                <small>Bulma Elements are essential interface elements<br/> that only require a single CSS class.</small>
              </div>
              <hr></hr>
            </header>
            <div class="tile is-ancestor">
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <div>
                    <nav class="breadcrumb" aria-label="breadcrumbs">
                      <ul>
                        <li><a href="#">Bulma</a></li>
                        <li><a href="#">Components</a></li>
                        <li class="is-active"><a href="#" aria-current="page">Breadcrumb</a></li>
                      </ul>
                    </nav>
                    <div class="content">
                      <p>A simple breadcrumb component to improve your navigation experience.</p>
                    </div>
                  </div>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <div class="tabs is-centered">
                    <ul>
                      <li><a>Elements</a></li>
                      <li class="is-active"><a>Components</a></li>
                      <li><a>Widgets</a></li>
                      <li><a>Tiles</a></li>
                    </ul>
                  </div>
                  <div class="content">
                    <p>Simple responsive horizontal navigation tabs, with different styles.</p>
                  </div>
                </article>
              </div>
            </div>
            <div class="tile is-ancestor">

              <div class="tile is-parent">
                <article class="tile is-child box">
                  <nav class="pagination" role="navigation" aria-label="pagination">
                    <a class="pagination-previous">Previous</a>
                    <a class="pagination-next">Next page</a>
                    <ul class="pagination-list">
                      <li>
                        <a class="pagination-link" aria-label="Goto page 1">1</a>
                      </li>
                      <li>
                        <span class="pagination-ellipsis">&hellip;</span>
                      </li>
                      <li>
                        <a class="pagination-link" aria-label="Goto page 45">45</a>
                      </li>
                      <li>
                        <a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a>
                      </li>
                      <li>
                        <a class="pagination-link" aria-label="Goto page 47">47</a>
                      </li>
                      <li>
                        <span class="pagination-ellipsis">&hellip;</span>
                      </li>
                      <li>
                        <a class="pagination-link" aria-label="Goto page 86">86</a>
                      </li>
                    </ul>
                  </nav>
                </article>
              </div>
            </div>

            <header class="is-clearfix">
              <div class="cats is-pulled-right has-text-right">
                <small>Bulma Theme<br>Dashboard<br> <span class="has-text-weight-bold has-text-white">v.0.1</span></small>
              </div>
              <div>
                <h2>Custom Stat Cards</h2>
                <small>Custom stat cards to easily display large numbers, <br/>great for any kind of simple metrics and dashboard content.</small>
              </div>
              <hr></hr>
            </header>
            <div class="tile is-ancestor">
              <div class="tile is-parent">
                <article class="tile is-child box transparent">
                  <div class="statcard">
                    <h3 class="statcard-number">28,745</h3>
                    <span class="statcard-desc">Page views</span>
                  </div>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child box transparent">
                  <div class="statcard">
                    <h3 class="statcard-number">
                      72,134
                      <small class="delta-indicator delta-positive">5%</small>
                    </h3>
                    <span class="statcard-desc">Page views</span>
                  </div>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <div class="statcard">
                    <h3 class="statcard-number">12,938</h3>
                    <span class="statcard-desc">Page views</span>
                  </div>
                </article>
              </div>

              <div class="tile is-parent">
                <article class="tile is-child box accent">
                  <div class="statcard">
                    <h3 class="statcard-number">12,938</h3>
                    <span class="statcard-desc">Page views</span>
                  </div>
                </article>
              </div>
            </div>

          </main>
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
