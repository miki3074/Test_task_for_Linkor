@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Админ</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                <div>
                <div>Место выдачи</div>
                            <table class="table">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">#</th>
                                    <th scope="col">Название</th>
                                    <th scope="col">Адресс</th>
                                    <th scope="col">Время работы</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($issues as $issue)
                                <tr>
                                    <th scope="row">{{$issue->id}}</th>
                                    <td>{{$issue->name}}</td>
                                    <td>{{$issue->address}}</td>
                                    <td>{{$issue->timestart}}-{{$issue->timeend}}</td>
                                    <td>
                                        <a href="{{route('issue-update', $issue->id)}}">
                                        <lord-icon src="https://cdn.lordicon.com/puvaffet.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:32px;height:32px"></lord-icon>
                                        </a>

                                        <a href="{{route('issue-delete', $issue->id)}}">
                                        <lord-icon src="https://cdn.lordicon.com/hrqwmuhr.json" trigger="loop" colors="primary:#c71f16,secondary:#911710" style="width:32px;height:32px"></lord-icon>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                    <a class="btn btn-success" href="{{route('issue.create')}}">Добавить</a>
            </div>
                            <div class="my-5">
                                <div>Пользователи</div>
                                <table class="table">
                                    <thead>
                                    <tr class="table-info">
                                        <th scope="col">#</th>
                                        <th scope="col">Название</th>
                                        <th scope="col">Пункт выдачи</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($scooters as $scooter)
                                    <tr>
                                        <th scope="row">{{$scooter->id}}</th>
                                        <td>{{$scooter->scooter}}</td>
                                        <td>{{$scooter->Issue->address}}</td>
                                        <td>

                                        </td>
                                        <td>
                                            <a href="{{route('update-scooter',$scooter->id)}}">
                                                <lord-icon src="https://cdn.lordicon.com/puvaffet.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:32px;height:32px"></lord-icon>
                                            </a>

                                            <a href="{{route('scooter-delete',$scooter->id)}}">
                                                <lord-icon src="https://cdn.lordicon.com/hrqwmuhr.json" trigger="loop" colors="primary:#c71f16,secondary:#911710" style="width:32px;height:32px"></lord-icon>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a class="btn btn-success" href="{{route('scooter.create')}}">Добавить</a>
                            </div>

                            <div class="my-5">
                                <div>Менеджеры и клиенты</div>
                                <table class="table">
                                    <thead>
                                    <tr class="table-info">
                                        <th scope="col">#</th>
                                        <th scope="col">Имя</th>
                                        <th scope="col">маил</th>
                                        <th scope="col">статус</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>@if ( $user->role == 1 ) админус
                                                @elseif ($user->role == 2) менеджер
                                                @elseif ($user->role == 0) клиент
                                                @else Свободный @endif
                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                <a href="{{route('edit-user', $user->id)}}">
                                                    <lord-icon src="https://cdn.lordicon.com/puvaffet.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:32px;height:32px"
                                                    ></lord-icon>
                                                </a>

                                                <a href="{{route('user-delete', $user->id)}}">
                                                    <lord-icon src="https://cdn.lordicon.com/hrqwmuhr.json" trigger="loop" colors="primary:#c71f16,secondary:#911710" style="width:32px;height:32px"></lord-icon>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
{{--                                <a class="btn btn-success" href="">Добавить</a>--}}


                                <div class="my-5">
                                <div>Отчет</div>
                                <table class="table">
                                    <thead>
                                    <tr class="table-info">
                                        <th scope="col">#</th>
                                        <th scope="col">Менеджер</th>
                                        <th scope="col">Место выдачи</th>
                                        <th scope="col">Имя клиента</th>
                                        <th scope="col">Самокат</th>
                                        <th scope="col">Цена</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($otchets as $otchet)
                                        <tr>
                                            <th scope="row">{{$otchet->id}}</th>
                                            <td>{{$otchet->manager}}</td>
                                            <td>{{$otchet->Issue->address}}</td>
                                            <td>{{$otchet->ima}}</td>
                                            <td>{{$otchet->name}}</td>
                                            <td>{{$otchet->price}}</td>
                                            <td>




                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                            </div>

            </div>
        </div>
    </div>
<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
@endsection
