@extends('dashboard.layout')

@section('content')
    <form action="{{route('tambah-peserta-topik')}}" method="post">
        @csrf
        @method('put')
        <label for="name">Id User :</label>
        <input type="text" id="name" name="id_user" value="{{old('judul')}}"><br><br>

        <label for="email">Id Topik : </label>
        <input type="text" id="name" name="id_topik" value="{{old('judul')}}"><br><br>

        <input type="text" name="password" hidden value="qwerty">
        <br>
        <br>

        <input type="submit" value="Submit">
    </form>
@endsection
