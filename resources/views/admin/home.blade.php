@extends('admin.template')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@section('content')
<div class="wrapper">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card-box tilebox-one">
                    <i class="icon-user float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Dosen</h6>
                    <h2 class="m-b-20" data-plugin="counterup">{{ $dosens->count() }}</h2>
                    <span class="label label-success"> {{ $dosens->count() }} </span> <span class="text-muted"> Data Dosen</span>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card-box tilebox-one">
                    <i class="icon-list float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Kriteria</h6>
                    <h2 class="m-b-20"><span data-plugin="counterup">{{ $kriterias->count() }}</span></h2>
                    <span class="label label-danger"> {{ $kriterias->count() }} </span> <span class="text-muted"> Kriteria</span>
                </div>
            </div>

        </div>
        <!-- end row -->

<!-- Footer -->
    <footer class="footer">
        2018 © {{ config('app.name') }}.
    </footer>
    <!-- End Footer -->
@endsection
