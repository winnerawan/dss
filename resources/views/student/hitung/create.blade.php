@extends('student.template')

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
                    <h4 class="page-title"></h4>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-12">
                    <div class="card-box">

                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-10">

                                {{--<h4 class="header-title m-t-0">Basic Form</h4>--}}
                                {{--<p class="text-muted font-13 m-b-10">--}}
                                {{--Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.--}}
                                {{--</p>--}}

                                <div class="p-20">
                                    {!! Form::open(['route' => 'student.hitung.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}

                                    <div class="form-group">
                                        <label for="userName">Dosen<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <select class="form-control" name="id">
                                                @foreach($dosens as $dosen)
                                                    <font color="black"><option value='{{ $dosen->id }}'> {{ $dosen->name }}</option></font>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Save
                                        </button>
                                        <button type="reset" class="btn btn-secondary btn-danger waves-effect m-l-5" onclick="clearFormDosen()">
                                            Clear
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5" onclick="goBack()">
                                            Cancel
                                        </button>
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

        @include('student.partials.footer')
        <script>
            function clearFormDosen() {
                document.getElementById("formHitung").reset();
            }
        </script>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>

@endsection