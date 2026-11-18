@extends('layouts.backend')

@section('content')
<div class="container">
    <h3>Data Mahasiswa</h3>

    <button type="button" class="btn btn-success">
        Tambah Data
    </button>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>

            @foreach ($datas as $data)
            <tr>
                <th>{{ $no }}</th>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->prodi }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->nohp }}</td>
                <td>{{ $data->foto }}</td>

                <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>

           <?php $no++; ?>
        @endforeach

        </tbody>
        </table>
        </div>

        @endsection

