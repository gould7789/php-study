<?php

class Dog
{
    public $name; // 강아지 이름 (인스턴스 변수)

    // 생성자 (__construct)
    public function __construct($input_name)
    {
        // $this를 안 쓴다면
        $name = $input_name;
        // 이러면 이 함수 안에서 변수를 만들었다가 바로 버리는 꼴이 됨
        // 정작 강아지 이름($this->name)은 텅 비게 됨

        // 올바른 방법
        $this->name = $input_name;
        // 내 이름($this->name)에다가 입력받은 값을 넣음
    }

    public function bark()
    {
        // 여기서도 $this->name을 쓰지 않으면 에러가 남
        // $name이라는 변수는 이 함수 안에 없기 때문
        return $this->name . ": 멍멍!\n";
    }
}

// 강아지 생성
$myDog = new Dog("Happy");

// print_r로 내부 구조 확인
echo "=== print_r 결과 ===\n";
print_r($myDog);

echo "\n=== 짖기 ===\n";
echo $myDog->bark();
