@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('notebook.store') }}" method="post">
          @csrf
          <div class="form-group" style="margin: 5px">
              <label for="ФИО">Полное Имя</label>
              <input type="text" name="ФИО" class="form-control" id="ФИО" placeholder="ФИО" required>
          </div>
          <div class="form-group" style="margin: 5px">
              <label for="Компания">Компания</label>
              <input type="text" name="Компания" class="form-control" id="Компания" placeholder="Компания">
          </div>
          <div class="form-group" style="margin: 5px">
              <label for="Телефон">Телефон</label>
              <input type="number" name="Телефон" class="form-control" id="Телефон" placeholder="Телефон" required>
          </div>
          <div class="form-group" style="margin: 5px">
              <label for="Email">Email</label>
              <input type="email" name="Email" class="form-control" id="Email" placeholder="Email" required>
          </div>
          <div class="form-group" style="margin: 5px">
              <label for="Дата рождения">Дата рождения</label>
              <input type="date" name="Дата рождения" class="form-control" id="Дата рождения" placeholder="Дата рождения">
          </div>
          <div class="form-group" style="margin: 5px">
              <label for="Фото">Фото</label>
              <input type="text" name="Фото" class="form-control" id="Фото" placeholder="Фото">
          </div>
          <button style="margin: 10px" type="submit" class="btn btn-primary">Создать</button>
              <a href="{{ route('notebook.index') }}" class="btn btn-success">Назад</a>
      </form>
  </div>
@endsection
