@extends('layout')

@section('content')

@include('errors')

    <div class="container">
        <h3>Добавить нового пользователя</h3>



        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['tasks.store']]) !!}


                <div class="form-group">
                    <i>Имя</i>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    <br>
                    <i>Немного о себе:</i>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">
                        {{old('description')}}
                    </textarea>
                    <br>
                    <button class="btn btn-succes">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>


        </div>
    </div>

@endsection
