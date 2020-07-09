@extends('layout')
@section('title')
    Laporan
@endsection
@section('judul')
    Laporan
@endsection
@section('laporanactive')
    active
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css') }}">
    
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection
@section('content')
    <!-- Column selectors with Export Options and print table -->
    <section id="column-selectors">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Laporan A (31/12/2019 - 20/01/2020)</h4>
                        <div class="float-right">
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ubah">Ubah Tanggal</button>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table table-striped dataex-html5-selectors">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Column selectors with Export Options and print table -->

    {{-- Modal Tanggal --}}
    <div class="modal fade text-left" id="ubah" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Ubah Tanggal Laporan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" novalidate>
                    <div class="modal-body" style="height: 500px">
                        <div class="form-group">
                            <div class="controls">
                                <div class="row justify-content-center">
                                    <div class="col-5">
                                        <label>Tanggal Batas Awal: </label>
                                        <input type='text' class="form-control pickadate" placeholder="Pilih Batas Awal Laporan" required data-validation-required-message="Tidak boleh kosong">
                                    </div>
                                    <div class="col-5">
                                        <label>Tanggal Batas Akhir: </label>
                                        <input type="text" class="form-control pickadate" placeholder="Pilih Batas Akhir Laporan" required data-validation-required-message="Tidak boleh kosong">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tampilkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- / Modal Tanggal --}}
@endsection
@section('js')
    <script src="{{ asset('/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('/app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>

    <script src="{{ asset('/app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>

    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('/app-assets/js/scripts/datatables/datatable.js') }}"></script>
@endsection