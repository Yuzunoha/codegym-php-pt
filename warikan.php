<?php
//合計算出
function sum($cart)
{
    $sum = 0;
    /* ここにコードを追加しましょう */
    return $sum;
}

//1人あたりの金額算出
function moneyPerPerson($sum, $people)
{
    /* ここにコードを追加しましょう */
    return $per;
}

const JSON_FILE = './warikan.json';    //JSONファイル

$json = file_get_contents('./warikan.json');

if ($json === false) {
    echo 'ファイル入力エラー: ' . JSON_FILE . 'が見つかりません。';
}
$warikan = json_decode($json, true);

//合計
$sum = sum(/* ここにコードを追加しましょう */);
//1人辺りの金額
$per = moneyPerPerson(/* ここにコードを追加しましょう */);

echo '合計金額は' . $sum . '円です。';
echo '<br>';
echo '1人あたりの金額は' . $per . '円です。';
