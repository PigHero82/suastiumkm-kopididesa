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
        <div class="col-md-6 col-12 ml-auto mr-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Pembayaran</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="col-12">
                          <div class="table-responsive">
                              <table class="table">
                                <thead>
                                    <th style="width:70%">Item</th>
                                    <th colspan="2" style="width:30%">Biaya</th>
                                </thead>
                                <tbody>
                                    @foreach ($detailPenjualan['items'] as $item)
                                        <tr>
                                            <td>{{ $item['name'] }}<br>
                                            <span class="ml-2">x {{ $item['qty'] }}</span>
                                            </td>
                                            <td>Rp. {{ number_format($item['price'], 0, ',', '.') }}</td>
                                            <td><button type="button" style="padding: 0; border: none; background: none;" class="action-edit text-danger" ><i class="feather icon-trash"></i></span></td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td class="text-right text-bold">TOTAL</td>
                                        <td>Rp. {{ number_format($detailPenjualan['total'], 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{-- <form action="{{ route('kasir.cafe.') }}" method="post"></form> --}}
                                            {{-- <a href="{{ route('kasir.order') }}"> --}}
                                            <a href="#">
                                                <button type="button" class="btn btn-primary">Tambah</button>
                                            </a>
                                        </td>
                                        {{-- <td class="text-right"></td> --}}
                                        <td>
                                            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#bayar" data-value="#">Bayar</button>
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
                                <h2 class="ml-1 float-right">Rp. {{ number_format($detailPenjualan['total'], 0, ',', '.') }}</h2>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label>Cash: </label>
                                <input type="number" required class="form-control" data-validation-required-message="Tidak boleh kosong">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label>Kembali: </label>
                                <input type="text" disabled class="form-control" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Uang kurang.">
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