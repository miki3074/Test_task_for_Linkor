@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Место выдачи</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form action="" method="">
                    @csrf
                    <div class="my-5">
                        <div>
                            <label for="inputPassword5" class="form-label">Название</label>
                            <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="name">
                            <div id="passwordHelpBlock" class="form-text">
                                Название места пример: "Парк победы"
                            </div>
                        </div>

                        <div class="my-2">
                            <label for="inputPassword5" class="form-label">Улица</label>
                            <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="address">
                            <div id="passwordHelpBlock" class="form-text">
                                Название улицы пример: "улица..."
                            </div>
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

                    </div>
                    <button class="btn btn-success">Добавить</button>
                </form>

            </div>
        </div>
    </div>
@endsection

