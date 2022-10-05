<?php
//1
$str = "ПРИВЕТ ДЯДЯ ВАСЯ";
echo mb_strtolower($str);

//2
$str1 = 'asdfg asdaaafghj asdssssgh addddddddfgh qqqqqqqqqq wwwwwwwwww eeeeeeeeeee';
print_r(str_word_count($str1, 0));

//3
$myvalue = 'qwert asdfg. xcvbn ghjkhjk. wertyu dfghjk.';
$tokens = explode(" ", $myvalue);
echo $tokens[0];

//4
function convertENcharacters($str) {
    $from = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я','А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я');
    $to = array('a','b','v','g','d','e','e','zh','z','i','i','k','l','m','n','o','p','r','s','t','u','f','kh','cz','ch','sh','shh','','y','','e','yu','ya','A','B','V','G','D','E','E','ZH','Z','I','I','K','L','M','N','O','P','R','S','T','U','F','KH','CZ','CH','SH','SHH','','Y','','E','YU','YA');
    return str_replace($to,$from, $str);
}
echo convertENcharacters('privet kak dela Sergei');



//$world =mb_strtolower('Привет мир');
//echo ($world);
//echo "\n";
//
//$str = "12345ccc";
//$str  = trim($str);
//    $message ="asdfghjkl asdfgh";
//найти имя файла
//$path = 'c:\\windows\\ololo\\folder\\ololo.jpg';
//$name = explode('\\',$path);
//print_r($name);
//$name= $name[count($name)-1];
//echo $name;

// посчитать сколько предложений в тексте
//$path = "sdfghjk.sdfghj.dfghj.asdfgh!";
//$name = str_replace(["?","!"],".",$path);
//$name = explode(".",$name);
//$name = count($name)-1;
//echo $name;

//найти имя пользователя в емейле
//$email = "asdfghjkl@sdfghjk";
//$username = explode("@",$email);
//echo $username[0];






/*include __DIR__.'/../src/pages.php';
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FILE__;



/*$arr = [
        [1,2,3,4,5,6,7],
        [8,9,10,11],
         [12,15,17,111],
];
  $sum=0;
for ($i=0; $i<count($arr);$i++){
  //  print_r($arr[$i]);
for ($j=0; $j<count($arr[$i]);$j++) {
    $sum += $arr[$i][$j];
}
}
echo $sum;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php foreach ($pages as  $page):?>
    <div class ="post">
        <h2> <?= $page['title']?></h2>
        <p> <?= $page['content']?></p>
        <a href="#">Link</a>
    </div>
    <?php endforeach;?>
</body>
</html>




 /*   $arr = [20, 30, 40];
        echo $arr[2];
        echo $arr[1];
        echo $arr[0];

        var_dump($arr);


    echo "git second branch";
    echo "git second branch";
    echo "git second branch";

$arr = [];
        for ($i=0;$i<10;$i++) {
           $arr[$i] = $i;
           echo $arr[$i];
            echo "<br>";
        }

        for ($a=0;$a<5;$a++){
            echo "привет мир" ;
            echo "<br>";
        }


        $arr = [];
        $i=0;
            while($i<10){
                $arr[$i] = random_int(1,100);
                echo $arr[$i];
                echo "<br>";
                $i++;
            }
            echo"******************";

            foreach ($arr as $item) {
                if($item%2 === 0){
                    echo $item;
                    echo "<br>";
                }
            }
            echo"******************";
            $sum=0;
            foreach ($arr as $item){
                $sum+=$item;
            }
            echo $sum;
*/
