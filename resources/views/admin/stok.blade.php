@extends('layout')
@section('title')
    Stok Bahan
@endsection
@section('judul')
    Stok
@endsection
@section('stokanactive')
    active
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css') }}">
@endsection
@section('content')
    {{-- Tabel Stok --}}
    <section id="basic-datatable">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Stok Bahan</h4>
                      <div class="float-right">
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah" data-value="#"><i class="feather icon-plus"></i> Bahan</button>
                      </div>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <div class="table-responsive">
                              <table class="table zero-configuration" id="table">
                                  <thead>
                                      <tr>
                                          <th>Nama</th>
                                          <th>Jumlah</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($stok as $item)
                                      <tr>
                                          <td>{{ $item->nama }}</td>
                                          <td>{{ $item->jumlah }} {{ $item->satuan }}</td>
                                          <td>
                                            <form method="POST" action="{{ route('stok.destroy', $item->id) }}">
                                              @method('DELETE')
                                              @csrf
                                              <button type="button" style="padding: 0; border: none; background: none;" class="action-edit text-primary" data-toggle="modal" data-target="#ubah" data-value="{{ $item->id }}"><i class="feather icon-edit"></i></span></button>
                                              <button type="submit" style="padding: 0; border: none; background: none;" class="action-delete text-danger"><i class="feather icon-trash"></i></button>
                                            </form>
                                          </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  {{-- / Tabel Stok --}}

  {{-- Modal Tambah --}}
  <div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel1">Tambah Bahan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('stok.store') }}" method="POST" novalidate>
          @csrf
          <div class="modal-body">
            <div class="form-group">
              <label>Nama: </label>
              <div class="controls">
                <input type="text" name="nama" class="form-control" placeholder="Nama Bahan" required data-validation-required-message="Tidak boleh kosong">
              </div>
            </div>

            <div class="form-group">
              <label>Satuan: </label>
              <div class="controls">
                <input type="text" name="satuan" class="form-control" placeholder="Satuan Bahan (gr, kg, ml, dll)" required data-validation-required-message="Tidak boleh kosong">
              </div>
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Modal Ubah --}}
  <div class="modal fade text-left" id="ubah" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel1">Ubah Bahan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('stok.update') }}" method="POST" novalidate>
          @csrf
          <div class="modal-body">
            <div class="form-group">
              <label>Nama: </label>
              <div class="controls">
                <input hidden type="text" name="id" id="id">
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Bahan" required data-validation-required-message="Tidak boleh kosong">
              </div>
            </div>

            <div class="form-group">
              <label>Satuan: </label>
              <div class="controls">
                <input type="text" name="satuan" id="satuan" class="form-control" placeholder="Satuan Bahan (gr, kg, ml, dll)" required data-validation-required-message="Tidak boleh kosong">
              </div>
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Modal Tambah Stok
  <div class="modal fade text-left" id="tambahstok" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel1">Tambah Stok</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="#" novalidate>
          <div class="modal-body">
            <div class="form-group">
              <label>Tambah Stok: </label>
              <div class="controls">
                <input type="text" name="text" class="form-control" placeholder="Penambahan Stok" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Hanya boleh diisi dengan angka." required data-validation-required-message="Tidak boleh kosong">
              </div>
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> --}}
  
@endsection
@section('js')
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('/app-assets/js/scripts/datatables/datatable.js') }}"></script>

    <script src="{{ asset('/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('/app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>

    <script>
      $("#table tbody tr td button" ).on( "click", function() {
        var id = $(this).attr('data-value');
        $.get( "/admin/stok/" + id, function( data ) {
          console.log(JSON.parse(data));
          var d = JSON.parse(data);
          $('#id').val(d.id);
          $('#nama').val(d.nama);
          $('#satuan').val(d.satuan);
        });
        console.log($(this).attr('data-value'));
      });
    </script>
@endsection