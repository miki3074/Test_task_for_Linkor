@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="{{route('update-scooter-id', $scooters -> id)}}" method="post" >
                        @csrf
                        <div class="my-5">
                            <div>
                                <select name="issue_id" class="form-select mb-3">
                                    <option selected>Выберите пункт выдачи</option>

                                        <option value="{{$issues -> id}}"><b>{{$issues -> name}} - {{$issues -> address}} </b></option>

                                </select>
                            </div>

                            <div class="my-2">
                                <label for="inputPassword5" class="form-label">Название самоката</label>
                                <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="scooter" value="{{$scooters->scooter}}">
                                <div id="passwordHelpBlock" class="form-text">
                                    Название самоката пример: "Xiaomi Scooter 1S"
                                </div>
                            </div>
                            <div class="my-2">
                                <div class="form-outline">
                                    <textarea class="form-control" id="textAreaExample2" rows="8" name="opis">Внешний вид: электросамокат, 2-колесный, взрослый
{{$scooters->opis}}
</textarea>
                                    <label class="form-label" for="textAreaExample2">Описание</label>
                                </div>
                            </div>



                        </div>
                        <button class="btn btn-success">обновить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
