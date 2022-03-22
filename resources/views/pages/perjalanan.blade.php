@extends('layouts.master')
@section('headline', 'Perjalanan Data')
@section('title', 'Member Data')
@section('content')

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Lokasi yang dikunjungi</th>
                    <th scope="col">Suhu tubuh</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($perjalanans as $perjalanan)
                    <tr>
                        <th scope="row">{{ $no }}</th>
                        <td>{{ $perjalanan->tanggal }}</td>
                        <td>{{ $perjalanan->lokasi }}</td>
                        <td>{{ $perjalanan->suhu }}</td>
                    </tr>
                    <?php $no++; ?>
                @endforeach
            </tbody>
        </table>

        <div class="card-footer text-right">
            <a href="/form"><button class="btn btn-primary">Add Member</button></a>

        </div>
        {!! $perjalanans->links() !!}
    </div>
@endsection
