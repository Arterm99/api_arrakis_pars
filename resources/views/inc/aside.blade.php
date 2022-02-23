@section('aside')
<?php 

use App\Http\Controllers\AdminPanelController;
use App\Models\AdminPanel;

    class AdminPanelController2 extends AdminPanelController {
        function tovar() {
            $tovar = AdminPanel::all();
            // https://laravel.com/docs/8.x/queries#introduction
            // https://www.youtube.com/watch?v=wPjgnATQ4qA

?>
         <div class="container" style="margin: 5%; max-width: 90%">
             <div >
             <hr>
                 <h4>Продуктовая панель</h4><br \>
             </div>
             <div class="container">
             <div class="row row-cols-4">
                 <?php foreach($tovar as $key): ?>
                     <div class="alert alert-light">
                     <div class="row row-cols-2">
                        <span> <h3> <?php echo $key->name  ?> </h3> </span>
                        <span style="color: red; text-align: end; font-size: 24px;"> <?php echo $key->price." руб"?> </span>
                        <span></span>
                        <span style="color: grey; text-align: end; font-size: 14px;"> <?php if ($key->weght != NULL) {echo $key->weght." кг"; }else { echo "менне 1 кг"; }?> </span><br \> 
                    </div>
                    
                        <div style="padding: 10px;"> <?php echo $key->description  ?> </div>
                        <img class="img-thumbnail" src="http://localhost/storage/app/{{ $key->profile_image }}">
                        <div class="row" style="height: 90px; align-content: space-between;"> 
                            <div class="row row-cols-3" style="font-size: 14px;">
                                <span> <?php echo $key->product  ?> </span>
                                <span> <?php echo $key->category  ?> </span>
                                <span> <?php echo $key->company  ?> </span>
                                <!-- <span> <?php echo session('login')  ?> </span> -->
                            </div>
                            <div class="col">
                                <a href="{{ route('product-one', $key->id) }}"><button class="btn btn-primary" type="submit">В корзину</button></a>
                            </div>
                        </div>
                    </div>
                     <?php endforeach ?>
             </div>
             </div>
         </div>
<?php
        }}


$t = new AdminPanelController2;
$t->tovar()


?>

@endsection