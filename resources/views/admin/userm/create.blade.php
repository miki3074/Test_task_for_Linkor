@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('edit-user-id',$user->id) }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control "name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email ') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control " name="email" value="{{ $user->email }}" required autocomplete="email">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Роль') }}</label>
                                <div class="col-md-6">
                                <select name="role" class="form-select mb-3">


                                    <option value="1" @if ($user->role == '1') selected @endif>
                                        <b>админ</b>
                                    </option>
                                    <option value="2" @if ($user->role == '2') selected @endif>
                                        <b>менеджер</b>
                                    </option>
                                    <option value="0" @if ($user->role == '0') selected @endif>
                                        <b>клиент</b>
                                    </option>


                                </select>


                                </div>
                            </div>







                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                     сохранить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
