@extends('templates.main')


@section('content')

<div class="pt-5">

    <a class='btn btn-success mb-2' href="{{route('form_contact')}}">Создать контакт</a>
    <table style='text-align: center;'class="table table-light pt-5">
        <thead>
            <tr class="table-dark">
            <th scope="col">Фамилия</th>
            <th scope="col">Имя</th>
            <th scope="col">Телефон</th>
            <th scope="col"></th>
        </thead>
        <tbody>
            @foreach($dataPeople as $thisPerson)
            <tr>
                <td>{{$thisPerson->surname}}</td>
                <td>{{$thisPerson->name}}</td>  
                <td>{{$thisPerson->phone->number}}</td>
                <td style="width:350px;">
                    <div class="d-flex justify-content-around">
                    <a href="#" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Подробно</a>
                    <a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="">Изменить контакт</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
@endsection