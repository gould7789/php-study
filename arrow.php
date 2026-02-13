<?php

// 1. 일반 함수 정의 (function 키워드 사용)
function hello($name)
{
    return "Hello, $name!\n";
}

// 2. 클래스 정의
class Person
{
    public $name;

    public function __construct($name)
    {
        // [객체 화살표 ->] 내 변수에 접근
        $this->name = $name;
    }

    public function introduce()
    {
        return "I am " . $this->name . "\n";
    }
}

// 실행

// [객체 화살표 ->] 메서드 호출
$p = new Person("Lalavel");
echo $p->introduce();

// [배열 화살표 =>] 키와 값 연결
$info = [
    "role" => "Developer",
    "level" => 1
];
echo "Role: " . $info["role"] . "\n";

// [화살표 함수 fn() =>] 간단한 계산
$nums = [10, 20, 30];
// 배열의 모든 숫자에 5를 더함
$plusFive = array_map(fn($n) => $n + 5, $nums);

print_r($plusFive);
