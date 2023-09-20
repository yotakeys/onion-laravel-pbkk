@extends('dashboard.layout')

@section('content')
    <form action="{{route('tambah-penawaran-topik')}}" method="post">
        @csrf
        @method('put')
        <label for="name">Judul:</label>
        <input type="text" id="name" name="judul" value="{{old('judul')}}"><br><br>

        <label for="email">Dosen Pembimbing:</label>
        <input type="text" id="email" name="dosen_pembimbing" value="{{old('dosen_pembimbing')}}"><br><br>

        <label for="status">Status:</label><br>
        <select id="status" name="status">
            <option value="" selected disabled>silahkan pilih</option>
            <option value="belum diambil" @if(old('status') == 'belum')selected @endif>belum diambil</option>
            <option value="sudah diambil" @if(old('status') == 'sudah')selected @endif>sudah diambil</option>
            {{--            <option value="belum">belum diambil</option>--}}
            {{--            <option value="sudah">sudah diambil</option>--}}
        </select>

        <input type="text" name="password" hidden value="qwerty">

        <br>
        <br>


        <input type="submit" value="Submit">
    </form>
@endsection
