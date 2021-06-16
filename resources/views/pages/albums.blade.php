@extends('layouts.default')

@section('title', "Альбомы")

@section('content')
    <h1>Альбомы {{ $artist->name }}</h1>
    <div class="row">
        <div class="col-12">
            <form action="/albums" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="artist_id" value="{{ $artist->id }}" />
                <label for="name">Название</label><input type="text" placeholder="Название" name="name" id="name">
                <label for="tracks_count">Количество треков</label><input type="text" placeholder="Количество треков" name="tracks_count" id="tracks_count">
                <button>Создать</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Название</th>
                    <th scope="col">Количество треков</th>
                    <th scope="col">Операции</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($albums as $album)
                    <tr>
                        <th scope="row">{{ $album->id }}</th>
                        <td>{{ $album->name }}</td>
                        <td>{{ $album->tracks_count }}</td>
                        <td>
                            <div>
                                <button type="button" class="btn btn-warning">✎</button>
                                <button type="button" class="btn btn-danger">❌</button>
                            </div>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
