<?php

// 1. 외부 변수 준비
$greeting = "Hello";
$names = ["Lalavel", "PHP", "Ruby"];

// 2. 옛날 방식 클로서 (use 사용)
// array_map 함수에 '콜백'으로 전달됨
$msg1 = array_map(function ($name) use ($greeting) {
    // use가 없으면 $greeting 못 씀
    return "$greeting, $name! (Old style)";
}, $names);

print_r($msg1);

echo "\n--------------------\n";

// 3. 최신 방식 화살표 함수
$exclamation = "!!!";
$msg2 = array_map(fn($name) => "$greeting, $name$exclamation (Modern style)", $names);

print_r($msg2);
