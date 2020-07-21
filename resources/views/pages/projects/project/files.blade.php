@extends('layouts.dash')

@section('styles')
<style>
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
  padding-top: 125px;
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
@endsection

@section('content')
  <div class="columns">
    <div class="column is-one-quarter">
         <div class="menu-container px-1 has-background-white">
           <div class="menu-wrapper py-1">
             <aside class="main-sidebar">
                  <section  class="sidebar">
                      <ul class="sidebar-menu">
                      <li class="header">{{$project['name']}}</li>
                      <li class="{{$section == "dashboard" ? "active" : ""}}">
                          <a href="/projects/{{$project['id']}}/dashboard">
                            <i class="fa fa-files-o"></i> <span>Dashboard</span> 
                          </a>
                      </li>
                      <li class="{{$section == "files" ? "active" : ""}}">
                          <a href="/projects/{{$project['id']}}/files">
                            <i class="fa fa-files-o"></i> <span>Files</span> 
                          </a>
                      </li>
                      <li class="{{$section == "board" ? "active" : ""}}">
                          <a href="/projects/{{$project['id']}}/board">
                            <i class="fa fa-files-o"></i> <span>Board</span> 
                          </a>
                      </li>
                  </section>
              </aside>
           </div>
         </div>
    </div>
    <div class="column">
      Test
    </div>
  </div>
@endsection

@section('scripts')
<script>

</script>
@endsection