<?php
// 리스트 설정
$profile = [
    "name"  => "Hyeonwoo",
    "role"  => "Backend",
    "skills" => ["PHP", "Ruby", "Python"],
    "is_active" => true,
    "salary" => null // 연봉 정보 없음
];

echo "=== 1. count(): 배열 길이 세기 ==\n";
// 루비에서 .length 또는 .size
echo "기본 길이: " . count($profile) . "\n"; // 5개

// 다차원 배열의 갯수 세기
// 그냥 count하면 최상위 레벨만 셈
// skills 내부까지 다 세려면 COUNT_RECURSIVE 옵션을 사용
// 상위 5개 + skills 내부 3개 = 8개
echo "재귀적(Recursive) 길이: " . count($profile, COUNT_RECURSIVE) . "\n";

echo "\n=== 2. in_array(): 값 존재 여부 확인 ===\n";
// 루비에서 .include?("")
$number = [10, 20, "30"];

// 문자열 "10"을 찾는데 숫자 10이 있다고 true가 나옴 (자동 형변환)
if (in_array("10", $number)) {
    echo "[느슨한 검사] 문자열 '10'이 숫자 10과 같다고 판단됨\n";
}

// Strict check (세 번째 인자를 true로 지정)
// 타입까지 검사 진행
if (in_array("10", $number, true)) {
    echo "[엄격한 검사] 문자열 '10'은 배열에 없습니다.\n";
}

echo "\n=== 3. array_key_exists() & isset() ===\n";
// 루비에서 .key?

// [방법 1] isset() 사용 (값이 null이면 false 반환)
// 키가 있고 값도 세팅되어 있는지 물음
if (isset($profile["salary"])) {
    echo "isset: salary 키가 없거나 값이 null입니다.\n";
}

// [방법 2] array_key_exists() 사용 (값이 null이어도 true 반환)
// 값은 상관없고, 키 자체가 존재하는가를 물음 -> 이게 더 정확한 '키 확인'임
if (array_key_exists("salary", $profile)) {
    echo "array_key_exists: salary 키는 확실히 존재합니다.\n";
}

echo "\n=== 4. araay_keys() & array_valuse() ===\n";
// 루비에서 .keys, .values

$keys = array_keys($profile);
$values = array_values($profile);

echo "Keys: " . implode(", ", $keys) . "\n";

// $values 안에 배열(skills)이 있어서 그냥 implode를 하면 에러가 남
echo "Valuse: " . $values[0] . "\n";

echo "\n=== 5. implode() & explode() ===\n";
// 루비에서 .join, .split

// implode: 배열 -> 문자열 (Glue, Pieces)
$skill_str = implode(" | ", $profile["skills"]);
echo "Implode 결과: {$skill_str}\n";

// explode: 문자열 -> 배열 (Separator, String)
$tags = "html, css, js";
$tag_arr = explode(", ", $tags);
echo "Explode 결과: ";
print_r($tag_arr);
