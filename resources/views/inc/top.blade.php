@section('top')

<?php 
// Расширяем  контроллер
use App\Http\Controllers\UsersController;
use App\Models\Users;


class LoginUser extends UsersController {
    function user() {
        $user = Users::all();
        ?>
        


        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="{{ route('home') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Интернет-магазин</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active" aria-current="page">Главная</a></li>
                <li class="nav-item"><a href="{{ route('lc') }}" class="nav-link">Витрина</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Сделать заказ</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Наша команда</a></li>
                <li class="nav-item"><a href="#" class="nav-link">О нас</a></li>
                <li class="nav-item"><a href="{{ route('parsing') }}" class="nav-link">Парсинг</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </a></svg></li>
            </ul>
            </header>
        </div>
        <!-- Сессия -->
        @if (session()->has('login'))
        <div  class="container">
        <div style="justify-content: space-around" class="d-flex flex-wrap py-3 mb-4">
            <h5> Личный кабинет </h5>    
            <?php echo 'Приветствуем Вас, '.session('login'); ?>
            <button class="btn btn-warning" onclick="window.location.href = '/exit-admin';">Выйти</a></button>
            </div>
        </div>

        @endif
    <?php     
    }}
    $user = new LoginUser;
    $user->user();
?>



</div>