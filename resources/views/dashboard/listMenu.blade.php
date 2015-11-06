@extends('layouts.default')
@section('content')
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    @include('includes.dashboardsidebar')
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   Menu List
    <small>All Menu</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Simple</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-md-6">

</div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
  <div class="col-md-3">

    <a href="#" class="btn btn-danger show_hide"><i class="fa fa-plus pls"></i>ADD Menu</a>
    </div>

    <!-- Main content -->
  <div class="row" style="margin: 10px 25px;">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary box-width">
        <div class="box-header with-border">
          <h3 class="box-title">Add</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {!! Form::open(['url'=>'/menuaction']) !!}
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Menu Name</label>
              <input type="text" class="form-control" name="menu" id="exampleInputEmail1" placeholder="Enter Menu">
              @if($errors->any())
              <label class="error" for="name">{{$errors->first('menu')}}</label>
              @endif
            </div>
          </div><!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        {!! Form::close() !!}
      </div><!-- /.box -->

    </div>
  </div><!-- end of col -->
  </div>
  <div class="col-xs-12">
    @if(Session::has('success'))
    <div class="alert alert-success fade in">
      <button data-dismiss="alert" class="close close-sm" type="button">
        <i class="fa fa-times"></i>
      </button>
      <h2>{{ Session::get('success') }}</h2>
    </div>
    @endif
    @if(Session::has('menu-edit'))
    <div class="alert alert-success fade in">
      <button data-dismiss="alert" class="close close-sm" type="button">
        <i class="fa fa-times"></i>
      </button>
      <h2>{{ Session::get('menu-edit') }}</h2>
    </div>
    @endif
    @if(Session::has('search-result'))
    <div class="alert alert-success fade in">
      <button data-dismiss="alert" class="close close-sm" type="button">
        <i class="fa fa-times"></i>
      </button>
      <h2>{{ Session::get('search-result') }}</h2>
    </div>
    @endif
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Menu List Table</h3>
        <div class="box-tools">
          {!! Form::open(['url'=>'/searchaction','method'=>'get']) !!}
          <div class="input-group" style="width: 150px;">
            <input type="text" name="keyword" class="form-control input-sm pull-right" placeholder="Search">
            <div class="input-group-btn">
              <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
          {!! Form::close() !!}
        </div>
      </div><!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>S.No</th>
            <th>Menu Name</th>
            <th>Status</th>
          </tr>
          {{-- */$i=1;/* --}}
          @foreach($allMenus as $menu)
          <tr>
            <td><?php echo $i++;?></td>
            <td>{{$menu->menu}}</td>
            @if($menu->status=='publish')
            <td><a href="{{URL::to('/statusaction')}}?status=unpublish&menuid=<?= $menu->id;?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>{{$menu->status}}</a></td>
            @else
            <td><a href="{{URL::to('/statusaction')}}?status=publish&menuid=<?= $menu->id;?>" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i>{{$menu->status}}</a></td>
            @endif
          </tr>
          @endforeach
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop
