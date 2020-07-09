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
@endsection
@section('content')
    <!-- Laporan -->
    <section id="decks">
        <div class="row">
            <div class="col-12">
                <div class="card-deck-wrapper">
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Laporan A</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <div class="row justify-content-center">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tanggal" data-value="#"> Cetak Laporan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Laporan B</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <div class="row justify-content-center">
                                        <button type="button" class="btn btn-primary"> Cetak Laporan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Laporan C</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <div class="row justify-content-center">
                                        <button type="button" class="btn btn-primary"> Cetak Laporan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Laporan D</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <div class="row justify-content-center">
                                        <button type="button" class="btn btn-primary"> Cetak Laporan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Laporan -->

    {{-- Modal Tanggal --}}
    <div class="modal fade text-left" id="tanggal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Tanggal Laporan</h4>
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
@endsection