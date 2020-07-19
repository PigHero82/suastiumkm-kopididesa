@extends('layout')
@section('orderactive')
    active
@endsection
@section('title')
    Order
@endsection
@section('judul')
    Order
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection
@section('content')
    <!-- Order Menu -->
    <section id="bg-variants">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Menu</h4>
                <div class="float-right">
                  <button type="button" class="btn btn-sm btn-success"><i class="feather icon-plus"></i> Pembayaran</button>
                </div>
              </div>
              <div class="card-content">
                <!-- Row grouping -->
                <div class="card-body card-dashboard">
                  <div class="table-responsive">
                      <table class="table row-grouping">
                          <thead>
                              <tr>
                                  <th>Nama</th>
                                  <th>Harga</th>
                                  <th>Kategori</th>
                                  <th>Jumlah</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>Jena Gaines</td>
                                  <td>Rp. 10.000</td>
                                  <td>Kopi Dingin</td>
                                  <td>
                                    <div class="row" width="30%">
                                      <div class="col-3">
                                        <input type="number" class="form-control text-center" name="#" id="#" minlength="1" min="1" max="99" placeholder="0">
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Quinn Flynn</td>
                                  <td>Rp. 15.000</td>
                                  <td>Kopi Panas</td>
                                  <td>
                                    <div class="row">
                                      <div class="col-3">
                                        <input type="number" class="form-control text-center" name="#" id="#" minlength="1" min="1" max="99" placeholder="0">
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Gloria Little</td>
                                  <td>Rp. 35.000</td>
                                  <td>Kopi Panas</td>
                                  <td>
                                    <div class="row">
                                      <div class="col-3">
                                        <input type="number" class="form-control text-center" name="#" id="#" minlength="1" min="1" max="99" placeholder="0">
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Jenette Caldwell</td>
                                  <td>Rp. 40.000</td>
                                  <td>Kopi Panas</td>
                                  <td>
                                    <div class="row">
                                      <div class="col-3">
                                        <input type="number" class="form-control text-center" name="#" id="#" minlength="1" min="1" max="99" placeholder="0">
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Doris Wilder</td>
                                  <td>Rp. 10.000</td>
                                  <td>Kopi Dingin</td>
                                  <td>
                                    <div class="row">
                                      <div class="col-3">
                                        <input type="number" class="form-control text-center" name="#" id="#" minlength="1" min="1" max="99" placeholder="0">
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Jennifer Chang</td>
                                  <td>Rp. 80.000</td>
                                  <td>Kopi Dingin</td>
                                  <td>
                                    <div class="row">
                                      <div class="col-3">
                                        <input type="number" class="form-control text-center" name="#" id="#" minlength="1" min="1" max="99" placeholder="0">
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Kopi Panas</td>
                                  <td>Rp. 60.000</td>
                                  <td>Tokyo</td>
                                  <td>
                                    <div class="row">
                                      <div class="col-3">
                                        <input type="number" class="form-control text-center" name="#" id="#" minlength="1" min="1" max="99" placeholder="0">
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Michelle House</td>
                                  <td>Rp. 15.000</td>
                                  <td>Kopi Dingin</td>
                                  <td>
                                    <div class="row">
                                      <div class="col-3">
                                        <input type="number" class="form-control text-center" name="#" id="#" minlength="1" min="1" max="99" placeholder="0">
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Prescott Bartlett</td>
                                  <td>Rp. 12.000</td>
                                  <td>Kopi Dingin</td>
                                  <td>
                                    <div class="row">
                                      <div class="col-3">
                                        <input type="number" class="form-control text-center" name="#" id="#" minlength="1" min="1" max="99" placeholder="0">
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Martena Mccray</td>
                                  <td>Rp. 30.000</td>
                                  <td>Kopi Panas</td>
                                  <td>
                                    <div class="row">
                                      <div class="col-3">
                                        <input type="number" class="form-control text-center" name="#" id="#" minlength="1" min="1" max="99" placeholder="0">
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                          </tbody>
                          <tfoot>
                              <tr>
                                  <th>Nama</th>
                                  <th>Harga</th>
                                  <th>Kategori</th>
                                  <th>Jumlah</th>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
                </div>
                <!-- Row grouping -->
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- Order Menu -->
@endsection
@section('js')
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>

    <script>
      $(document).ready(function() {
        var groupingTable = $('.row-grouping').DataTable({
          "columnDefs": [{
              "visible": false,
              "targets": 2
          }],
          "order": [
              [2, 'asc']
          ],
          "displayLength": 100,
          "drawCallback": function(settings) {
              var api = this.api();
              var rows = api.rows({
                  page: 'current'
              }).nodes();
              var last = null;

              api.column(2, {
                  page: 'current'
              }).data().each(function(group, i) {
                  if (last !== group) {
                      $(rows).eq(i).before(
                          '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                      );

                      last = group;
                  }
              });
          }
        });

        $('.row-grouping tbody').on('click', 'tr.group', function() {
            var currentOrder = groupingTable.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                groupingTable.order([2, 'desc']).draw();
            }
            else {
                groupingTable.order([2, 'asc']).draw();
            }
        });
      });
    </script>
@endsection