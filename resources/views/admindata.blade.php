@extends('template')

@section('judul')
  Data
@endsection

@section('isi')

        <div class="panel-body">
          <table class="table table-bordered table-striped table-admin">
          <thead>
            <tr>
              <th width="10%">No.</th>
              <th width="10%">Tempat</th>
              <th width="13%">longitude</th>
              <th width="20%">Latitude</th>
              <th width="27%">Keterangan</th>
              <th width="30%">tools</th>

            </tr>

          </thead>
          <tbody>

              @foreach ($fromDB as $databakar)
                <tr>
                <td>{{$databakar->dataid}}</td>
                <td>{{$databakar->nama}}</td>
                <td>{{$databakar->longi}}</td>
                <td>{{$databakar->lati}}</td>
                <td>{{$databakar->ket}}</td>
                <td><button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-eraser"></i></button>
                </td>

              </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        </div>


@endsection
