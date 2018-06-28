@extends('admin.template')

@section('content')
    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                                data-toggle="dropdown" aria-expanded="false">Aksi <span class="m-l-5"><i
                                        class="fa fa-cog"></i></span></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ url('admin/student/create') }}">Tambah Mahasiswa</a>
                        </div>

                    </div>
                    <h4 class="page-title">Master Data Mahasiswa</h4>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        {{--<h4 class="m-t-0 header-title">Buttons example</h4>--}}
                        {{--<p class="text-muted font-14 m-b-30">--}}
                            {{--The Buttons extension for DataTables provides a common set of options, API methods and--}}
                            {{--styling to display buttons on a page that will interact with a DataTable. The core library--}}
                            {{--provides the based framework upon which plug-ins can built.--}}
                        {{--</p>--}}

                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>NIM</th>
                                <th>NAMA</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td><a href="{{ url('admin/student/'. $student->id .'/edit') }}">{{ $student->nim }}</a></td>
                                <td>{{ $student->name }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    @include('admin.partials.footer')

@endsection



