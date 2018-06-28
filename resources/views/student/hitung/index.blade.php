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
                            <div class="col-sm-12 col-xs-12 col-md-14">

                                {{--<h4 class="header-title m-t-0">Basic Form</h4>--}}
                                {{--<p class="text-muted font-13 m-b-10">--}}
                                {{--Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.--}}
                                {{--</p>--}}

                                <div class="p-20">
                                    {!! Form::open(['route' => 'student.hitung.store', 'data-parsley-validate' => '', 'files' => false, 'method' => 'POST  ']) !!}

                                    <div class="form-group">
                                        <label for="userName"> Dosen<span class="text-danger">*</span></label>
                                        <div class="col-lg-12">
                                            <select class="form-control" name="id_dosen">
                                                @foreach($dosens as $dosen)
                                                    <option value='{{ $dosen->id }}'> {{ $dosen->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tr>
                                                <th class="col-md-6">Kriteria</th>
                                                <th colspan="8" class="text-center col-md-12">Nilai</th>
                                            </tr>
                                            <?php
                                            foreach ($kriterias as $item) {
                                            ?>
                                            <tr>
                                                <td><?php echo $item['kriteria']; ?></td>
                                                <?php
                                                $no = 1;
                                                foreach ($item['sub_kriteria'] as $dataItem) {

                                                ?>
                                                <td>
                                                    <input type="radio" name="nilai[<?php echo $dataItem->id_kriteria ?>]"
                                                           value="<?php echo $dataItem->value ?>"
                                                           <?php
                                                           if(isset($nilaiDosen)){
                                                           foreach ($nilaiDosen as $item => $value) {
                                                           if($value->id_kriteria == $dataItem->id_kriteria){
                                                           if($value->nilai ==  $dataItem->value){
                                                           ?>
                                                           checked="checked"
                                                           <?php
                                                           }
                                                           }
                                                           }
                                                           }else{
                                                           if($no == 3){
                                                           ?>
                                                           checked="checked"
                                                    <?php
                                                        }
                                                        }
                                                        ?>
                                                    /> <?php echo $dataItem->sub_kriteria;
                                                    $no++;
                                                    ?>
                                                </td>

                                            <?php
                                            }
                                            echo '</tr>';
                                            }
                                            ?>

                                        </table>
                                    </div>

                                    {{--<div class="table-responsive">--}}
                                        {{--<table class="table table-striped">--}}
                                            {{--<tr>--}}
                                                {{--<th class="col-md-3">Kriteria</th>--}}
                                                {{--<th colspan="5" class="text-center col-md-9">Nilai</th>--}}
                                                {{--@foreach($kriterias as $kriteria)--}}
                                                    {{--<tr>--}}
                                                        {{--<td>{{ $kriteria->kriteria }}</td>--}}
                                                        {{--@foreach($kriteria->sub_kriteria() as $sub_kriteria)--}}
                                                            {{--<td>--}}
                                                                {{--<input type="radio" name="nilai[ . {{ $sub_kriteria->id_kriteria }} . ]"--}}
                                                                    {{--value="{{ $sub_kriteria->value }}">--}}
                                                            {{--</td>--}}
                                                        {{--@endforeach--}}
                                                    {{--</tr>--}}
                                                {{--@endforeach--}}
                                        {{--</table>--}}
                                    {{--</div>--}}


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