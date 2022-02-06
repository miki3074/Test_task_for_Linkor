@extends('layouts.app')

@section('content')
<div class="container">



    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<div class="justify-content-center">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                        <div class="">
                            <div class="border border-dark col-md-8">
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Забронированные самокаты </th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                            @foreach($bookings as $booking)



                                        <tr>
                                            <th scope="row"></th>
                                            <td class="col-2"> </td>
                                            <td class="col-2"> {{$booking->name}}</td>
                                            <td class="col-2"> {{$booking->issue_id}}</td>

                                            <td><a class="btn btn-outline-secondary  btn-sm mx-2" href="{{route('create-bookingorder', $booking->id)}}">Арендовать</a><br></td>
                                            <td><a class="btn btn-outline-danger  btn-sm mx-2" href="{{route('bookinguser-delete',$booking->id)}}">Удалить</a><br></td>
                                        </tr>
                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                        </div>




                        <div class="my-lg-5  ">
                        @foreach($scooters as $scooter)
                            <div class="mt-5">
                            {{$scooter->scooter}}<br>
                            {{$scooter->Issue->address}}<br>
                            {{$scooter->opis}}<br>
                        </div>
                            <a class="btn btn-primary" href="{{route('create-order', $scooter->id)}}">Арендовать</a>

                                @if ( $scooter->is_booked == '1') Забронирован
                                @elseif ($scooter->is_ordered == '1') Арендован
                                @else  <a class="btn btn-primary" href="{{route('create-booking', $scooter->id)}}">Забронировать</a> @endif
                        @endforeach
                        </div>
                </div>

            </div>
            </div>
    </div>
    </div>
</div>
@endsection
