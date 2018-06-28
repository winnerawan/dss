@extends('admin.template_nobg')

@section('content')
    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">

                    </div>
                    <h4 class="page-title"></h4>
                    <button onclick="window.print()" class="btn-danger">Cetak</button><br/>
                    <br/><br/>
                    <center>
                    <img src="http://localhost:8000/assets/images/kop.png"></center>
                </div>
            </div>
            <!-- end row -->
            {{--<div class="row">--}}
                {{--<div class="col-12">--}}
                    {{--<div class="card-box table-responsive">--}}
                        {{--<h4 class="m-t-0 header-title">Tabel 1 [Nilai Awal]</h4>--}}
                        {{--<p class="text-muted font-14 m-b-30">--}}
                        {{--The Buttons extension for DataTables provides a common set of options, API methods and--}}
                        {{--styling to display buttons on a page that will interact with a DataTable. The core library--}}
                        {{--provides the based framework upon which plug-ins can built.--}}
                        {{--</p>--}}

                        {{--<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"--}}
                               {{--width="100%">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th>No</th>--}}
                                {{--<th>Nama Dosen</th>--}}
                                {{--@foreach($kriterias as $kriteria)--}}
                                {{--<th>{{ $kriteria->kriteria }}</th>--}}
                                {{--@endforeach--}}
                            {{--</tr>--}}
                            {{--</thead>--}}

                            {{--<tbody>--}}
                            {{--@foreach($nilais as $nilai)--}}
                                {{--<td>--}}
                                    {{--{{ $nilai->nama }}--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--{{ $nilai->nilai }}--}}
                                {{--</td>--}}
                            {{--@endforeach--}}
                            {{--@foreach($dosens as $dosen)--}}
                                {{--<tr>--}}
                                    {{--<td><a href="{{ url('admin/dosen/'. $dosen->id .'/edit') }}">{{ $dosen->nip }}</a></td>--}}
                                    {{--<td>{{ $dosen->nama }}</td>--}}
                                    {{--<td>{{ $dosen->alamat }}</td>--}}
                                    {{--<td>{{ $dosen->jabatan }}</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- end row -->--}}
        {{--</div>--}}
    {{--</div>--}}


            <div class="panel-body">
                <h4>Table 1 - Nilai Awal</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <?php
                            $no = 1;
                            foreach ($nilais as $item => $value) {
                            foreach ($value as $heading => $itemValue) {
                            ?>
                            <th class="text-center"><?php echo $heading ?></th>
                            <?php
                            }
                            break;
                            }
                            ?>
                        </tr>
                        <?php
                        foreach ($nilais as $item => $value) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no ?></td>
                            <?php
                            foreach ($value as $itemValue) {
                            ?>
                            <td><?php echo $itemValue ?></td>
                            <?php
                            }
                            ?>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>

                    </table>
                </div>


                <h4>Table 2 - Dihitung sesuai sifat cost atau benefit</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <?php
                            $no = 1;
                            foreach ($table2 as $item => $value) {
                            foreach ($value as $heading => $itemValue) {
                            ?>
                            <th class="text-center"><?php echo $heading ?></th>
                            <?php
                            }
                            break;
                            }
                            ?>
                        </tr>
                        <?php
                        foreach ($table2 as $item => $value) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no ?></td>
                            <?php
                            foreach ($value as $itemValue) {
                            ?>
                            <td><?php echo $itemValue ?></td>
                            <?php
                            }
                            ?>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </table>
                </div>

                <div class="table-responsive ">
                    <table class="table table-bordered">
                        <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <th class="text-center">Kriteria</th>
                            <th class="text-center">Sifat</th>
                            <th class="text-center">Nilai min /max</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($dataSifat as $item => $value) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no ?></td>
                            <td><?php echo $item ?></td>
                            <td><?php echo $value->sifat ?></td>
                            <td>
                                <?php
                                if (isset($valueMinMax['min' . $item])) {
                                    echo $valueMinMax['min' . $item] . ' - Minimal';
                                }
                                if (isset($valueMinMax['max' . $item])) {
                                    echo $valueMinMax['max' . $item] . ' - Maksimal';
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </table>
                </div>


                <h4>Table 3 - Dikali dengan bobot</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <?php
                            $no = 1;
                            foreach ($table3 as $item => $value) {
                            foreach ($value as $heading => $itemValue) {
                            ?>
                            <th class="text-center"><?php echo $heading ?></th>
                            <?php
                            }
                            break;
                            }
                            ?>
                        </tr>
                        <?php
                        foreach ($table3 as $item => $value) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no ?></td>
                            <?php
                            foreach ($value as $itemValue) {
                            ?>
                            <td><?php echo $itemValue ?></td>
                            <?php
                            }
                            ?>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </table>
                </div>

                <div class="table-responsive ">
                    <table class="table table-bordered">
                        <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <th class="text-center">Kriteria</th>
                            <th class="text-center">Bobot</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($bobot as $item => $value) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no ?></td>
                            <td><?php echo $value->kriteria ?></td>
                            <td class="text-center"><?php echo $value->bobot ?></td>

                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </table>
                </div>


                <h4>Table 4 - Dijumlah sesuai dengan universitas dan di dapat hasil rangking</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <?php
                            $no = 1;
                            foreach ($table4 as $item => $value) {
                            foreach ($value as $heading => $itemValue) {
                            ?>
                            <th class="text-center"><?php echo $heading ?></th>
                            <?php
                            }
                            break;
                            }
                            ?>
                        </tr>
                        <?php
                        foreach ($table4 as $item => $value) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no ?></td>
                            <?php
                            foreach ($value as $itemValue) {
                            ?>
                            <td><?php echo $itemValue ?></td>
                            <?php
                            }
                            ?>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </table>
                </div>

                <?php
                foreach ($table4 as $item => $value) {
                if ($value->Rangking == 1) {
                ?>
                <div class="alert alert-success" role="alert">
                    <h4><b>Kesimpulan : </b> Dari hasil perhitungan yang dilakukan menggunakan metode SAW
                        Dosen terbaik adalah
                        <?php echo $value->Nama ?> dengan nilai
                        <?php echo $value->Total ?>
                    </h4>
                </div>
    <?php
    }
    }
    ?>
    @include('admin.partials.footer')

@endsection



