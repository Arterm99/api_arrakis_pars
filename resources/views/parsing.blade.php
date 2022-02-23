<!-- Ссылка на общую html-разметку -->
@extends('layouts.app')

<!-- Начало/Конец кода -->
@section('title-block')Парсинг@endsection

<!-- Начало кода -->
@section('content')

<?php 

use App\Models\Parsing;
$data = Parsing::all();

$start = microtime(true);
$time = microtime(true) - $start;
?>
<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Имя контрагента</th>
        <th scope="col">Ссылка на страницу</th>
        <th scope="col">Время обработки скрипта</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $index)
        <tr>
        <th scope="row"> {{ $index->id }}</th>
        <td>Name</td>
        <td> @if ( $index->url == 3) 
                    {{ $index->price }}
            @endif
        </td> 

        <td> @if ( $index->product == 2) 
                    {{ $index->price }}
            @endif
        </td> 
        <td> {{ $index->url_product }} </td>
        <td> {{ $index->time }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
<div class="container">
<?php
$d = new DateTime ();
echo 'Сейчас '.$d->format('1 F jS')."\n";
?>
Время работы скрипта: {{ $time }} ;
</div>
@endsection