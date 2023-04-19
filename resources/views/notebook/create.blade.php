@extends('templates.main')

@section('content')

<form class="pt-5" action="{{route('add_contact_db')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="surname" class="form-label">Фамилия</label>
        <input type="text" name="surname" class="form-control" id="surname" >
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Имя</label>
        <input type="text" name="name" class="form-control" id="name" >
    </div>
    <div class="mb-3">
        <label for="phone_number" class="form-label">Номер телефона</label>
        <input type="phone" name="phone_number" class="form-control" id="phone_number" >
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary w-25 me-5">Создать</button>
        <a href="{{route('all_contact')}}" class='btn btn-success w-25'>К списку контактов</a>
    </div>
</form>

@endsection