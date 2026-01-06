<?php
// 1. 변수 선언 (모든 변수는 $로 시작함)
$greeting = "안녕하세요";
$target = "라라벨";
$year = 2026;

// 2. 데이터 타입 확인
$message = $greeting . ", " . $target . "! 지금은 " . $year . "년입니다.";

// 3. 화면 출력 (echo)
echo "=== PHP 기초 실습 ===\n";
echo $message;
echo "\n";

// 4. 문자열 안에서 변수 사용
// [방법 1] 큰따옴표 ""와 중괄호 {} 사용
$message_v1 = "{$greeting}, {$target}! 지금은 {$year}년입니다.";

// [방법 2] sprintf 사용 (포맷팅이 필요할 때 유용)
// %s는 문자열(String), %d는 숫자(Interger) 자리를 의미함
$message_v2 = sprintf("%s, %s! 지금은 %d년입니다.", $greeting, $target, $year);

echo "=== 문자열 연결 ===\n";
echo "방법 1 (보간법): {$message_v1}\n";
echo "방법 2 (sprintf): {$message_v2}\n";

// 5. 불리언(Boolean) 타입과 조건문
$is_studying = true;

if ($is_studying) {
    echo "현재 불리언 공부 중\n";
}
