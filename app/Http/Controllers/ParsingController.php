<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Добавляем модель
use App\Models\ParsingModels;
use DOMDocument;
use DOMXPath;

// Настройка времени
use Carbon;

// Добавляем Парсер
use Symfony\Component\DomCrawler\Crawler;

// DB
use Illuminate\Support\Facades\DB;
use App\Models\Parsing;
use PhpParser\Node\Stmt\Echo_;

class ParsingController extends Controller
{
    //Парсинг
    static public function parsing() {

    $zero = 0;
    $product = [ "1", "2", "3", "4", "5"];
    $replace = array(".", ",", "`", " ", "\$nbsp", "Цена", "руб", ":", "ք", "₽");
    // $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
    $url = 1;


    // Подключаем БД через Models
    $parsing = new Parsing();

    $start = microtime(true);


        $url1 = fopen('../resources/views/urls.txt', 'r');
        $line = fgets($url1);
        $line = trim($line); 
        $line = explode('|' , $line);
 
        // Find url array
        for ($j=0; $j<1; $j++) {
        $line[$j] = explode(',' , $line[$j]); 

        // Подключаем Время и дату
        $mytime = Carbon\Carbon::now();
        $mytimes = $mytime->toDateTimeString();

        // Find url
        for ($i = 0; $i <3; $i++) {
            if(!isset($line[$j][$i])) {
                echo $parsing->price = $zero."<br \>";
            } elseif ($line[$j][$i] != 0) {

        
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $line[$j][$i]); 
        // Устанавливаем данные 
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // TRUE для срабаотывания Парсинга
        curl_setopt($ch, CURLOPT_HEADER, false);
        
        // Запускаем дескриптор на выполнение
        $html = curl_exec($ch);
        // dd($html);

        curl_close($ch);

        $crawler = new Crawler();

        $crawler->addHtmlContent($html); // Получение HTML документа

        // Парсинг с помощью селекторов
        $crawler = $crawler->filter(
            '
            .tovarDivPrice1 > h1:nth-child(1),
            '
        );
        // ->count()==0 ? "ноль" : $crawler =$crawler->last()->text();
            // )->last()->extract(['_text']);
            echo $crawler->count();
       if ($crawler->count()) {
        echo $crawler->last()->text();
       }  else  {
       echo $crawler->count();
    }
        

        
    } else {  


        $crawler = $zero;

    }


    $array = [
        $product[$i], $crawler, $line[$j][$i],

    ];


}
echo "<br \>";

} 
        $time = microtime(true) - $start;
        echo "<br \><---------------Время работы скрипта: ".$time ;
         
    }
}

 