@extends('dashboard.layout')

@section('content')
    <h1>Penawaran Topik</h1>

    <table class="table">
        <thead>
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Dosen pembimbing</th>
            <th>Status</th>
            <th>Peserta</th>
        </tr>
        </thead>
        <tbody>
        @foreach($topics as $topic)
{{--            @if($topic->id == 1)--}}
{{--                <tr>--}}
{{--                    <td>{{ $topic->id }}</td>--}}
{{--                    <td>{{ $topic->judul }}</td>--}}
{{--                    <td>{{ $topic->dosen }}</td>--}}
{{--                    <td>{{ $topic->status }}</td>--}}
{{--                </tr>--}}
{{--            @else--}}
                <tr>
                    <td>{{ $topic->id }}</td>
                    <td>{{ $topic->judul }}</td>
                    <td>{{ $topic->dosen }}</td>
{{--                    @if($topic->status == 'belum diambil')--}}
{{--                        <td style="color: red">{{ $topic->status }}</td>--}}
{{--                    @else--}}
{{--                        <td style="color: blue">{{ $topic->status }}</td>--}}
{{--                    @endif--}}

                    <td style="color: {{$topic->status === 'belum diambil' ? "red" : "blue"}}">{{ $topic->status }}</td>
                    @if(count($topic->peserta->toArray()))
                        <td>{{ $topic->peserta->toArray()[0]["id_user"]}}</td>
                    @endif
                </tr>
{{--            @endif--}}
        @endforeach
        {{$topics->links()}}
        </tbody>
    </table>

@endsection
