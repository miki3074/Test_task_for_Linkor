@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>зазказ</h1>



        <div class="row justify-content-center">
            <div class="col-md-8">

                <form action="{{route('arenda.store')}}" method="POST">
                    @csrf
                    <div class="my-5">



                            <div>
                                <label for="inputPassword5" class="form-label">Имя</label>
                                <input  type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" value="{{$orders->ima}}"  name="ima">

                            </div>

                            <div class="my-2">
                                <label for="inputPassword5" class="form-label">Фамилия</label>
                                <input  type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" value="{{$orders->surname}}"  name="surname">

                            </div>

                            <div class="my-2">
                                <label for="inputPassword5" class="form-label">Самокат</label>
                                <input  type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" value="{{$orders->name}}" name="name">

                            </div>

                            <div class="my-2">
                                <label for="inputPassword5" class="form-label">Место выдачи</label>
                                <input  type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" value="{{$orders->issue_id}}" name="issue_id">

                            </div>

                            <div class="row my-2">
                                <div class="col">
                                    <div class="md-form  ">
                                        <input type="time" id="inputMDEx1" class="form-control" name="timestart" value="{{$orders->timestart}}">
                                        <label for="inputMDEx1">Начало выдачи </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="md-form  ">
                                        <input type="time" id="inputMDEx1" class="form-control" name="timeend" value="{{$orders->timeend}}">
                                        <label for="inputMDEx1">Конец ывдачи</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="md-form  ">

                                        <input type="number"  class="form-control" name="price" >
                                        <label for="inputMDEx1">Цена</label>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <button class="btn btn-success">выдать</button>
                    <div style="visibility:hidden;">
                        <label for="inputPassword5" class="form-label">менеджер</label>
                        <input  type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" value="{{ Auth::user()->name }}"  name="manager">

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
