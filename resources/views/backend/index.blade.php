@extends('layouts.backend.back')
@section('content')
 <!-- Content Header (Page header) -->

  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <x-backend.CardInfo/>
        <!-- ./col -->
        <x-backend.CardInfo/>
        <!-- ./col -->
        <x-backend.CardInfo/>
        <!-- ./col -->
        <x-backend.CardInfo/>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    
    </div>
  </section>
  <!-- /.content -->

  @endsection