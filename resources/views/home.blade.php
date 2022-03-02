@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">

        <div class="col-12">

            <a href="/home/add"> Tambah</a>
            <div class="card">
                <div class="card-body">
                   <table border="1">
                   <tr>
                        <th>Company ID</th>
                        <th>Officer</th>
                        <th>Officer Name</th>
                        <th>Officer QR</th>
                        <th>Level</th>
                        <th>Division</th>
                        <th>Birth Day</th>
                        <th>Birth Place</th>
                        <th>Placement Location</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach($data_officer as $p)
                    <tr>
                        <td>{{ $p->company_id }}</td>
                        <td>{{ $p->officer_id }}</td>
                        <td>{{ $p->officer_name }}</td>
                        <td>{{ $p->officer_qr }}</td>
                        <td>{{ $p->level }}</td>
                        <td>{{ $p->division }}</td>
                        <td>{{ $p->birth_date }}</td>
                        <td>{{ $p->birth_place }}</td>
                        <td>{{ $p->placement_location }}</td>
                        <td>
                            <a href="/home/editdata/{{$p->company_id}}"> Edit</a> |
                            <a href="#"> Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                   </table>
                </div>
            </div>
        </div>
    </div>
@stop
