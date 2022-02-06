@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Менеджер</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div>
                    <div>Заказы</div>
                    <table class="table">
                        <thead>
                        <tr class="table-info">
                            <th scope="col">#</th>
                            <th scope="col">Заказы</th>
                            <th scope="col">Самокат</th>
                            <th scope="col">Место выдачи</th>
                            <th scope="col"></th>

                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <th scope="row">{{$order->id}}</th>
                                <td>{{$order->ima}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->issue_id}}</td>
                                <td></td>
                                <td>
                                    <a href="{{route('extradition',$order->id )}}" class="link-success fw-bold" style=" text-decoration:none;">
                                      выдать
                                    </a>|
                                    <a href="{{route('order-delete',$order->id)}}" class="link-danger
                                     fw-bold" style=" text-decoration:none;">
                                        удалить
                                    </a>


                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    <div>Выданные самокаты</div>
                    <table class="table">
                        <thead>
                        <tr class="table-info">
                            <th scope="col">#</th>
                            <th scope="col">Заказы</th>
                            <th scope="col">Самокат</th>
                            <th scope="col">Место выдачи</th>
                            <th scope="col">Время сдачи</th>

                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($extraditions as $extradition)
                            <tr>
                                <th scope="row">{{$extradition->id}}</th>
                                <td>{{$extradition->ima}}</td>
                                <td>{{$extradition->name}}</td>
                                <td>{{$extradition->Issue->address}}</td>
                                <td>{{$extradition->timeend}}</td>
                                <td>
                                    <a href="{{route('shift-data',$extradition->id)}}" class="link-success
                                     fw-bold" style=" text-decoration:none;">
                                        принять
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    <div>Забронированные самокаты</div>
                    <table class="table">
                        <thead>
                        <tr class="table-info">
                            <th scope="col">#</th>
                            <th scope="col">Заказы</th>
                            <th scope="col">Самокат</th>
                            <th scope="col">Место выдачи</th>
                            <th scope="col"></th>

                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <th scope="row">{{$booking->id}}</th>
                                <td>{{$booking->ima}}</td>
                                <td>{{$booking->name}}</td>
                                <td>{{$booking->issue_id}}</td>
                                <td></td>
                                <td>
                                    <a href="{{route('booking-delete',$booking->id)}}" class="link-danger fw-bold" style=" text-decoration:none;">
                                        снять бронь
                                    </a>



                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    <div>Отчет</div>
                    <table class="table">
                        <thead>
                        <tr class="table-info">
                            <th scope="col">#</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Самокат</th>
                            <th scope="col">Цена</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($otchets as $otchet)
                            <tr>
                                <th scope="row">{{$otchet->id}}</th>
                                <td>{{$otchet->ima}}</td>

                                <td>{{$otchet->name}}</td>

                                <td>{{$otchet->price}}</td>
                            </tr>
                        @endforeach



                        </tbody>

                    </table>
{{--                    <a class="btn btn-success" href="">Добавить</a>--}} <a class="btn btn-primary" href="{{route('otchet-export')}}">Экспорт</a>
                </div>

        </div>
    </div>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
@endsection
