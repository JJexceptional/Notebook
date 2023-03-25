@extends('layouts.main')
@section('content')
  <div style="margin: 5px">
      <div>{{ $notebook->id }}. {{'ФИО: '. $notebook->ФИО }}</div>
      <div>{{ 'Компания: '. $notebook->Компания }}</div>
      <div>{{ 'Телефон: '. $notebook->Телефон }}</div>
      <div>{{ 'Email: '. $notebook->Email }}</div>
      <div>{{ 'Дата рождения: '. $notebook->Дата_рождения}}</div>
      <div>{{ 'Фото: '. $notebook->Фото }}</div>
  </div>
  <div>
      <p>   </p>
  </div>
  <div style="margin: 5px">
      <a href="{{ route('notebook.edit', $notebook->id) }}" class="btn btn-success">Редактировать</a>
  </div>
  <div style="margin: 5px">
      <form  action="{{ route('notebook.delete', $notebook->id) }}" method="post" >
          @csrf
          @method ('delete')
          <input type="submit" value="Удалить" class="btn btn-danger">
      </form>
  </div>
  <div style="margin: 5px">
      <a href="{{ route('notebook.index') }}" class="btn btn-success">Назад</a>
  </div>
@endsection
