<!-- Ссылка на общую html-разметку -->
@extends('layouts.app')

<!-- Начало/Конец кода -->
@section('title-block')Личный кабинет@endsection

<!-- Начало кода -->
@section('content')

<!-- Ошибки -->
@include('errors.errors')


    <div  class="container" style="max-width: 50%;">
        <form method="POST" action="/reg-lc" enctype="multipart/form-data">
            @csrf
                <select class="form-select mb-2" autofocus required name="product">
                <option selected disabled>Выберите товар</option>
                    <option value="Молочная продукция">Молочная продукция</option>
                    <option value="Сыры">Сыры</option>
                    <option value="Пироги">Пироги</option>
                    <option value="Фрукты">Фрукты</option>
                    <option value="Ягоды">Ягоды</option>
                    <option value="Овощи">Овощи</option>
                    <option value="Вина">Вина</option>
                </select>

                <select class="form-select form-select-sm mb-5" required name="category">
                <option selected disabled >Выберите подкатегорию</option>
                    <option value="Молоко">Молоко</option>
                    <option value="Творог">Творог</option>
                    <option value="Сметана">Сметана</option>
                    <option value="Сыр российский">Сыр российский</option>
                    <option value="Сыр голландский">Сыр голландский</option>
                    <option value="Сытные">Сытные</option>
                    <option value="Сладкие">Сладкие</option>
                    <option value="Яблоки">Яблоки</option>
                    <option value="Груши">Груши</option>
                    <option value="Вишня">Вишня</option>
                    <option value="Черешня">Черешня</option>
                    <option value="Огурцы - салатные">Огурцы - салатные</option>
                    <option value="Огурцы - белошипные">Огурцы - белошипные</option>
                    <option value="Огурцы - черношипные">Огурцы - черношипные</option>
                    <option value="Помидоры">Помидоры</option>
                    <option value="Кабачки">Кабачки</option>
                    <option value="Баклажаны">Баклажаны</option>
                    <option value="Бальзам «Огни Марий Эл»">Бальзам «Огни Марий Эл»</option>

                </select>
                <div class="form-floating">
                    <input class="form-control" placeholder="Наименование компании" type="text" name="company" autofocus>
                    <label for="floatingInput">Наименование компании</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" placeholder="Название товара" type="text" name="name" autofocus>
                    <label for="floatingInput">Название товара</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" placeholder="Цена" type="text" name="price" >
                    <label for="floatingInput">Цена</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" placeholder="Вес товара" type="text" name="weght" >
                    <label for="floatingInput">Вес товара</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" id="floatingTextarea2" style="height: 100px" placeholder="Описание товара" type="text" name="description"></textarea>
                    <label for="floatingTextarea2">Введите описание товара</label>
                </div>


<!-- Кнопки  -->
        
            <div class="row row-cols-auto">
                <div class="col">
                    <input class="form-control" type="file" name="profile_image">
                </div>
            <div class="col">
                    <input class="form-control" type="reset" value="Очистить"></p>
                </div>
            <div class="col">
                    <button class="btn btn-success" type="submit">Добавить</button>
                </div>
            </div>


    </form>
</div>



<!-- Конец кода -->
@endsection