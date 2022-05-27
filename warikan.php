<?php
//合計算出
function sum($cart)
{
    $cartArray = $cart['cart'];
    $sum = 0;
    foreach ($cartArray as $item) {
        $totalPrice = $item['単価'] * $item['個数'];
        $sum += $totalPrice;
    }
    return $sum;
}

//1人あたりの金額算出
function moneyPerPerson($sum, $people)
{
    /* ここにコードを追加しましょう */
    // 引数 $people は人数を表す整数である
    $per = ceil($sum / $people);
    return $per;
}

const JSON_FILE = './warikan.json';    //JSONファイル

$json = file_get_contents('./warikan.json');

if ($json === false) {
    echo 'ファイル入力エラー: ' . JSON_FILE . 'が見つかりません。';
}
$warikan = json_decode($json, true);

//合計
$sum = sum($warikan);
//1人辺りの金額
$per = moneyPerPerson($sum, $warikan['people']);

echo '合計金額は' . $sum . '円です。';
echo '<br>';
echo '1人あたりの金額は' . $per . '円です。';
