<?php
// Strict Mode: 이 파일에서는 타입을 엄격하게 검사하도록 설정
// declare(strict_types=1);

// 1. 함수 정의
// string $name: 이름은 문자열이어야 함
// int $age: 나이는 정수여야 함
// : string: 결과는 무조건 문자열로 나옴
function introduce(string $name, int $age): string
{
    return "제 이름은 $name 이고, 나이는 $age 살입니다.\n";
}

// 2. 정상 호출
echo introduce("라라벨", 5);

// 3. 타입 변환 테스트 (문자열 "10"을 넣음)
// declare(strict_types=1);가 켜져 있으면 에러가 터짐
// 꺼져 있으면 PHP가 "10"을 숫자 10으로 바꿔서 실행해 줌
echo introduce("PHP", "10");

// 4. Nullable 테스트 (?int)
// ?가 없으면 null을 넣었을 때 에러가 남
function checkScore(?int $score)
{
    if ($score === null) {
        echo "점수가 입력되지 않았습니다.\n";
    } else {
        echo "점수: $score 점\n";
    }
}

checkScore(100);
checkScore(null);
