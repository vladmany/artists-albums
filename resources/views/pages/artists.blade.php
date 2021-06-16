@extends('layouts.default')

@section('title', 'Музыканты')

@section('content')
    <h1>Музыканты</h1>
    <div class="row">
        <div class="col-12">
            <form action="/artists" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <label for="name">Имя</label><input type="text" placeholder="Имя" name="name" id="name">
                <label for="pseudonym">Псевдоним</label><input type="text" placeholder="Псевдоним" name="pseudonym" id="pseudonym">
                <label for="date_of_birth">Дата рождения</label><input type="text" placeholder="Дата рождения" name="date_of_birth" id="date_of_birth">
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
                    <th scope="col">Имя</th>
                    <th scope="col">Псевдоним</th>
                    <th scope="col">Дата рождения</th>
                    <th scope="col">Первый альбом</th>
                    <th scope="col">Операции</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($artists as $artist)
                    <tr>
                        <th scope="row">{{ $artist->id }}</th>
                        <td><a href="/albums/{{$artist->id}}">{{ $artist->name }}</a></td>
                        <td> {{ $artist->pseudonym }} </td>
                        <td> {{ $artist->date_of_birth }} </td>
                        <td>{{ $artist->albums()->first() }}</td>
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
