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
                    <h4 class="page-title">Kriteria</h4>
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
                                    {!! Form::model($kriteria, ['route' => ['admin.kriteria.update', $kriteria->id], 'method' => 'PUT', 'id' => 'formKriteria', 'files' => false]) !!}
                                    <div class="form-group">
                                        <label for="userName">Kriteria<span class="text-danger">*</span></label>
                                        {{ Form::text('kriteria', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                                    </div>

                                    <div class="form-group">
                                        <label for="emailAddress">Sifat<span class="text-danger">*</span></label></br>
                                        {{ Form::radio('sifat', 'B', true) }} Benefit
                                        &nbsp; &nbsp; &nbsp; &nbsp;
                                        {{ Form::radio('sifat', 'C', false) }} Cost
                                    </div>

                                    <div class="form-group">
                                        <label for="emailAddress">Bobot<span class="text-danger">*</span></label>
                                        {{ Form::text('bobot', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '4')) }}

                                    </div>


                                    {{--</br>--}}
                                    {{--<h4 class="header-title m-t-0">Item Kriteria</h4>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<label for="emailAddress">Value 1<span class="text-danger">*</span></label>--}}
                                        {{--{{ Form::text('sub_kriterias[0][sub_kriteria]', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}--}}
                                        {{--{{ Form::hidden('sub_kriterias[0][value]', '1') }}--}}
                                        {{--{{ Form::hidden('sub_kriterias[0][id_kriteria]', '') }}--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<label for="emailAddress">Value 2<span class="text-danger">*</span></label>--}}
                                        {{--{{ Form::text('sub_kriterias[1][sub_kriteria]', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}--}}
                                        {{--{{ Form::hidden('sub_kriterias[1][value]', '2') }}--}}
                                        {{--{{ Form::hidden('sub_kriterias[1][id_kriteria]', '') }}--}}

                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<label for="emailAddress">Value 3<span class="text-danger">*</span></label>--}}
                                        {{--{{ Form::text('sub_kriterias[2][sub_kriteria]', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}--}}
                                        {{--{{ Form::hidden('sub_kriterias[2][value]', '3') }}--}}
                                        {{--{{ Form::hidden('sub_kriterias[2][id_kriteria]', '') }}--}}

                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<label for="emailAddress">Value 4<span class="text-danger">*</span></label>--}}
                                        {{--{{ Form::text('sub_kriterias[3][sub_kriteria]', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}--}}
                                        {{--{{ Form::hidden('sub_kriterias[3][value]', '4') }}--}}
                                        {{--{{ Form::hidden('sub_kriterias[3][id_kriteria]', '') }}--}}

                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<label for="emailAddress">Value 5<span class="text-danger">*</span></label>--}}
                                        {{--{{ Form::text('sub_kriterias[4][sub_kriteria]', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}--}}
                                        {{--{{ Form::hidden('sub_kriterias[4][value]', '5') }}--}}
                                        {{--{{ Form::hidden('sub_kriterias[4][id_kriteria]', '') }}--}}

                                    {{--</div>--}}

                                    <div class="form-group text-right m-b-0">
                                        {!! Form::open(['route' => ['admin.kriteria.update', $kriteria->id], 'method'=> 'PUT']) !!}
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Update
                                        </button>
                                        {!! Form::close()  !!}
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5" onclick="goBack()">
                                            Cancel
                                        </button>
                                        {!! Form::open(['route' => ['admin.kriteria.destroy', $kriteria->id], 'method' => 'DELETE']) !!}
                                        <button type="submit" class="btn btn-secondary btn-danger" style="margin-top: 10px;" data-toggle="tooltip" title="Delete">
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

