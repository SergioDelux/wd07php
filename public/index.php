<?php
include __DIR__.'/../src/pages.php';
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FILE__;



/*$arr = [
        [1,2,3,4,5,6,7],
        [8,9,10,11],
         [12,15,17,111],
];*/
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
