<?php
// php 5.4.4

// 1行目の読み込み(一行目にパラメータNの個数, ユーザーの人数M, トップK)
$data_first_line = trim(fgets(STDIN));

// 配列にする
$data_first_array = explode(' ',$data_first_line);

// 2行目の読み込み(点数単数)
$data_sec_line = trim(fgets(STDIN));
// 配列にする
$data_sec_array = explode(' ',$data_sec_line);

// 3行目以降の取得
for($i = 0; $data_first_array[1] > $i; $i++){
    $data_n_line[$i] = trim(fgets(STDIN));
    
    // データを配列にする
    $data_n_array[$i] = explode(' ',$data_n_line[$i]);
    
    // 得点の計算
    $score_data[$i] = 0;
    for ($y = 0; $data_first_array[0] > $y; $y++){
        
        $score_data[$i] += $data_n_array[$i][$y] * $data_sec_array[$y];
        
        // 小数点の計算
        $score_data[$i] = round($score_data[$i],0);
        //$score_data[$i] = floor($score_data[$i]);
    }
    
}
// 順位づけ
rsort($score_data);

// 出力
for ($x = 0; $data_first_array[2] > $x; $x++){
    
    echo $score_data[$x];
    echo "\n";
}
?>