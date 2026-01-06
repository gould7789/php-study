<?php
// 1. 인덱스 배열
// [] 대괄호 문법을 그대로 사용
$languages = ["PHP", "Ruby", "Python"];

// 배열에 값 추가하기
// php는 빈 대괄호 []를 쓰고 값을 넣으면 끝에 추가됨
$languages[] = "JavaScript";

// 2. 연관 배열 (Associative Array) -> (Ruby의 Hash와 동일)
$me = [
    "name" => "Hyeonwoo",
    "role" => "Backend",
    "level" => 1
];

// 값 수정하기
$me["level"] = 100;

// 3. 출력해서 구조 확인
echo "=== 배열 구조 확인 (print_r 사용) ===\n";

// 배열은 echo로 찍으면 "Array"라는 글자만 나옴
// 내용을 보려면 print_r()이나 var_dump()를 사용해야함
print_r($languages);
print_r($me);

echo "=== 배열의 유연성과 키 캐스팅 ===\n";

// php는 키를 자동으로 정수로 변환하려고 시도함
$weird_array = [
    1    => "a",
    "1"  => "b", // "1"은 정수 1로 변환되어 위의 "a"를 덮어씀
    1.5  => "c", // 1.5는 정수 1로 내림되어 결국 "b"를 덮어씀
    true => "d"  // true는 정수 1로 변환되어 "c"를 덮어씀
];

// 결과적으로 키 1에 "d"만 남음
print_r($weird_array);

echo "\n=== 배열 구멍 조심 ===\n";
// 보통의 배열에서 중간 요소를 삭제하면 뒤의 요소들이 앞으로 당겨옴
// 하지만 php에서는 중간 요소가 삭제되더라도 인덱스가 그대로 유지됨(이빨 빠진 배열)

$fruits = ["사과", "바나나", "체리"];
unset($fruits[1]); // 인덱스 1번(바나나) 삭제

// 출력: [0] => 사과, [2] => 체리
// 인덱스 1이 비어있기 때문에 for문을 사용하면 에러가 남
print_r($fruits);

// 해결책: 인덱스를 다시 0, 1, 2...로 정렬하려면 array_values()를 사용해야함
// 반복문의 경우 foreach를 사용해야함
$fruits = array_values($fruits);
echo "재정렬 후:\n";
print_r($fruits);


echo "\n=== 배열 합치기 ===\n";

$arr1 = ["a" => "apple", "b" => "banana"];
$arr2 = ["a" => "ant", "c" => "cat"];

// [방법 1] array_merge
// 같은 키("a")가 있으면 뒤의 것($arr2)이 덮어씀
$merged = array_merge($arr1, $arr2);
echo "array_merge 결과 (ant가 apple을 덮어씀)\n";
print_r($merged);

// [방법 2] + 연산자
// 같은 키("a")가 있으면 앞의 것($arr1)을 유지하고 뒤의 것을 무시함
$plus = $arr1 + $arr2;
echo "+ 연산자 결과 (apple이 유지됨)\n";
print_r($plus);