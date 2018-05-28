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
                <div class="btn-group pull-right m-t-15">

                </div>
                <h4 class="page-title">Informasi Dosen</h4>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12">

                            {{--<h4 class="header-title m-t-0">Basic Form</h4>--}}
                            {{--<p class="text-muted font-13 m-b-10">--}}
                                {{--Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.--}}
                            {{--</p>--}}

                            <div class="p-20">
                                 {!! Form::model($dosen, ['route' => ['admin.dosen.update', $dosen->id], 'method' => 'PUT', 'id' => 'formDosen', 'files' => false]) !!}
                                    <div class="form-group">
                                        <label for="userName">NIP Dosen<span class="text-danger">*</span></label>
                                        {{ Form::text('nip', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                                    </div>
                                    <div class="form-group">
                                        <label for="userName">Nama Dosen<span class="text-danger">*</span></label>
                                        {{ Form::text('nama', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                    </div>
                                    <div class="form-group">
                                        <label for="emailAddress">Alamat Dosen<span class="text-danger">*</span></label>
                                        {{ Form::text('alamat', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                                    </div>
                                    <div class="form-group">
                                        <label for="pass1">Pendidikan Dosen<span class="text-danger">*</span></label>
                                        {{ Form::text('pendidikan', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                                    </div>
                                    <div class="form-group">
                                        <label for="passWord2">Jabatan <span class="text-danger">*</span></label>
                                        {{ Form::text('jabatan', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                                    </div>

                                    <div class="form-group text-right m-b-0">
                                        {!! Form::open(['route' => ['admin.dosen.update', $dosen->id], 'method'=> 'PUT']) !!}
                                        <button class="btn btn-sm btn-primary waves-effect waves-light" type="submit">
                                            Update
                                        </button>
                                        {!! Form::close()  !!}
                                        <button type="reset" class="btn btn-sm btn-secondary waves-effect m-l-5" onclick="goBack()">
                                            Cancel
                                        </button>
                                        {!! Form::open(['route' => ['admin.dosen.destroy', $dosen->id], 'method' => 'DELETE']) !!}
                                        <button type="submit" class="btn btn-sm btn-secondary btn-danger" style="margin-top: 10px;" data-toggle="tooltip" title="Delete">
                                            Delete
                                            <i class="fa fa-times"></i>
                                        </button>
                                        {!! Form::close()  !!}
                                    </div>

                                {!! Form::close() !!}
                            </div>

                        </div>

                    </div>
                    <!-- end row -->

                </div>
            </div><!-- end col-->

        </div>
        <!-- end row -->


    </div> <!-- container -->

    @include('admin.partials.footer')
    <script>
        function goBack() {
            window.history.back();
        }
    </script>


@endsection

