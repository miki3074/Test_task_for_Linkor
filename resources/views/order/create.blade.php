@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Место выдачи</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form action="{{route('order.store')}}" method="POST">
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

                        <div class="row my-2">
                            <div class="col">
                                <div class="md-form  ">
                                    <input type="time" id="inputMDEx1" class="form-control" name="timestart">
                                    <label for="inputMDEx1">Начало выдачи </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form  ">
                                    <input type="time" id="inputMDEx1" class="form-control" name="timeend">
                                    <label for="inputMDEx1">Конец ывдачи</label>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button class="btn btn-success">Заказать</button>
                </form>

            </div>
        </div>
    </div>
@endsection
