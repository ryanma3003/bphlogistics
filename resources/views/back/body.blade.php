@extends('back.template')
@section('body')

<div class="wrapper">

@include('back.partials.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('back.partials.nav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    @yield('section')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('back.partials.footer')

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@endsection