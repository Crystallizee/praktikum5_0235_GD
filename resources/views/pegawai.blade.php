@extends('dashboard.dashboard')

@section('content')
    <br>
    <h2 class="text-center">Data Pegawai</h2>
    <br><br>

    <table class="table table-bordered">
        <tr>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Departemen</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Gender</th>
            <th>Status</th>
        </tr>    

        @if(count($data_pegawai))
        @foreach($data_pegawai as $pgw)
        <tr>
            <td>{{ $pgw->nip }}</td>
            <td>{{ $pgw->nama_pegawai }}</td>
            <td>{{ $pgw->departemen->nama_departemen }}</td>
            <td>{{ $pgw->email }}</td>
            <td>{{ $pgw->telepon }}</td>
            <td>{{ ($pgw->gender == 0)?"Wanita" : "Pria"}}</td>
            <td>{{ ($pgw->status == 0)?"Inactive" : "Active"}}</td>
        </tr>
        @endforeach
        @else
        <tr>
            <td align="center" colspan="3">Empty Data!! Have a Nice Day & #190710235</td>
        </tr>
        @endif
    </table>
    <div  class="d-flex justify-content-center">
        {{ $data_pegawai->links() }}
    </div>
@endsection