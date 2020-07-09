@extends('layout')
@section('title')
    Pembayaran
@endsection
@section('orderactive')
    active
@endsection
@section('judul')
    Pembayaran
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css') }}">
@endsection
@section('content')
    <!-- Basic Tables start -->
      <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Pembayaran</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="col-8">
                          <div class="table-responsive">
                              <table class="table">
                                <thead>
                                    <th style="width:70%">Item</th>
                                    <th style="width:30%">Biaya</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        Kopi Kita Premium<br>
                                        <span class="ml-2">x 1</span>
                                        </td>
                                        <td>Rp. 25.000</td>
                                    </tr>
                                    <tr>
                                        <td>Kopi Leak Kaleng<br>
                                        <span class="ml-2">x 2</span>
                                        </td>
                                        <td>Rp. 29.000</td>
                                    </tr>
                                    <tr>
                                        <td>Kopi Kita Serasi<br>
                                        <span class="ml-2">x 2</span></td>
                                        <td>Rp. 15.000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-bold">TOTAL</td>
                                        <td>Rp. 69.000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"></td>
                                        <td>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bayar" data-value="#">Bayar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
    
    {{-- Modal Tanggal --}}
    <div class="modal fade text-left" id="bayar" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content modal-xs">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Bayar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" novalidate>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="controls">
                                <label>TOTAL: </label>
                                <h2 class="ml-1 float-right">Rp. 69.000</h2>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label>Cash: </label>
                                <input type="number" required value="70000" class="form-control" data-validation-required-message="Tidak boleh kosong">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label>Kembali: </label>
                                <input type="text" disabled value="-1000" class="form-control" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Uang kurang.">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Bayar</button>
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
@endsection