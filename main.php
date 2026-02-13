<?php
// 라라벨에서는 필요없지만, 지금은 생 PHP니까 수동으로 불러옴
require_once 'Library/Book.php';
require_once 'Store/Book.php';

// 네임스페이스 사용 (use)

// 1. 도서관 책 불러오기
use Library\Book;

// 2. 서점 책 불러오기 (이름이 Book으로 겹침)
// 이때 as를 사용하여 별명을 만들어줌
use Store\Book as SellingBook;

echo "=== 네임스페이스 테스트 ===\n";

// 3. 사용하기
$libraryBook = new Book();          // Library\Book
$stroreBook = new SellingBook();    // Stroe\Book

echo $libraryBook->info() . "\n";
echo $stroreBook->info() . "\n";
