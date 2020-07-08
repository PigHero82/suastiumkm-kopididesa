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
                                          <td class="text-right">Cash</td>
                                          <td>
                                              <input type="number" value="70000" class="form-control">
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="text-right">Kembali</td>
                                          <td>
                                              <input type="number" value="1000" class="form-control">
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="text-right"></td>
                                          <td>
                                              <button type="button" class="btn btn-success">Bayar</button>
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
@endsection