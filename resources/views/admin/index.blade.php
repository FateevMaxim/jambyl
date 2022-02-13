@extends('admin')

@section('body')
    <div class="page-content ptb-150 col-lg-11 m-auto">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Роль</th>
                    <th scope="col">Краткое описание</th>
                    <th scope="col">Аватарка</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $actor)
                <tr>
                    <th scope="row">{{ $actor->id }}</th>
                    <td>{{ $actor->name }}</td>
                    <td>{{ $actor->role }}</td>
                    <td>{{ $actor->short_desc }}</td>
                    <td>{{ asset('img/home-one/team/'.$actor->small_img) }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>

    </div>
    @endsection