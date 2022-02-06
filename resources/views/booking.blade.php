@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Бронь</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-danger" role="alert">
                    Бронирование автоматически сниметься через 15 мин с момента брони если не арендовать самокат
                </div>
                <form action="{{route('booking.store')}}" method="POST">
                    @csrf
                    <div class="my-5">
                        @foreach($scooters as $scooter)
                            <div>
                                <label for="inputPassword5" class="form-label">Имя</label>
                                <input  type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"  name="ima">

                            </div>

                            <div class="my-2">
                                <label for="inputPassword5" class="form-label">Фамилия</label>
                                <input  type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"  name="surname">

                            </div>

                            <div class="my-2">
                                <label for="inputPassword5" class="form-label">Самокат</label>
                                <input  type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" value="{{$scooter->scooter}}" name="name">

                            </div>

                            <div class="my-2">
                                <label for="inputPassword5" class="form-label">Место выдачи</label>
                                <input  type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" value="{{$scooter->Issue->address}}" name="issue_id">

                            </div>


                        @endforeach
                    </div>
                    <button class="btn btn-success">Заказать</button>
                    <div class="row my-2 " style="visibility:hidden;">

                        <div class="col">
                            <div class="md-form  ">
                                <input type="text" id="inputMDEx1" class="form-control" value="00:00" name="timebooking">
                                <label for="inputMDEx1">Время бронирование</label>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
