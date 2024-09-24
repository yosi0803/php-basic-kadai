<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題</title>
</head>
<body>
  <P>
    <?php
    function sort_2way($nums, $order)
    {
      if($order == true) {
        sort($nums);
        echo "昇順にソートします。<br>";
        foreach($nums as $num){
          echo $num . '<br>';
        }
      }else{
        rsort($nums);
        echo "降順にソートします。<br>";
        foreach($nums as $num){
          echo $num . '<br>';
        }
      }
      }
    
    $nums = [15, 4, 18, 23, 10];      
    sort_2way($nums, TRUE);
    sort_2way($nums, FALSE);
       ?>
  </p>       
</body>
</html>