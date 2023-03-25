@extends('layouts.main')
@section('content')
    <div style="margin-left: 30px; margin-top: 10px">
        <a href="{{ route('notebook.create') }}" class="btn btn-success">Создать</a>
    </div>
    <div>
        <p>   </p>
    </div>
  <div>
      @foreach($notebooks as $notebook)
          <div style="margin: 5px"><a href="{{ route('notebook.show', $notebook->id) }}">{{ $notebook->id }}. {{ $notebook->ФИО }} {{ '+'. $notebook->Телефон }} {{ $notebook->Email }}</a></div>
      @endforeach
  </div>
@endsection
