<?php

$forum = [
    [
        "idx" => 1,
        "title" => "제목만 보여주기!",
        "writer" => "아임웹",
        "date" => "2017-11-20",
        "likes" => 0
    ],
    [
        "idx" => 2,
        "title" => "이번엔 가즈아아아아아아아!",
        "writer" => "아임웹",
        "date" => "2017-11-20",
        "likes" => 0
    ],
    [
        "idx" => 3,
        "title" => "응원합니다!",
        "writer" => "아임웹",
        "date" => "2017-11-20",
        "likes" => 0
    ],
    [
        "idx" => 4,
        "title" => "탭 메뉴 이미지",
        "writer" => "아임웹",
        "date" => "2017-11-20",
        "likes" => 0
    ],
    [
        "idx" => 5,
        "title" => "진짜로 갑니다~~",
        "writer" => "아임웹",
        "date" => "2017-11-20",
        "likes" => 0
    ],
    [
        "idx" => 6,
        "title" => "분위기 최고네요~!",
        "writer" => "아임웹",
        "date" => "2018-04-17",
        "likes" => 0
    ],
    [
        "idx" => 7,
        "title" => "아이폰 7 플러스",
        "writer" => "아임웹",
        "date" => "2018-05-14",
        "likes" => 0
    ],
    [
        "idx" => 8,
        "title" => "구글 지도 게시물에 임베드 하기",
        "writer" => "아임웹",
        "date" => "2019-12-16",
        "likes" => 0
    ],
    [
        "idx" => 9,
        "title" => "제목",
        "writer" => "아임웹",
        "date" => "2019-12-16",
        "likes" => 0
    ],
    [
        "idx" => 10,
        "title" => "네이버 지도(v5) 임베드",
        "writer" => "아임웹",
        "date" => "2019-12-17",
        "likes" => 0
    ],
    [
        "idx" => 11,
        "title" => "제목만 보여주기!",
        "writer" => "아임웹",
        "date" => "2017-11-20",
        "likes" => 0
    ],
    [
        "idx" => 12,
        "title" => "이번엔 가즈아아아아아아아!",
        "writer" => "아임웹",
        "date" => "2017-11-20",
        "likes" => 0
    ],
    [
        "idx" => 13,
        "title" => "응원합니다!",
        "writer" => "아임웹",
        "date" => "2017-11-20",
        "likes" => 0
    ],
    [
        "idx" => 14,
        "title" => "탭 메뉴 이미지",
        "writer" => "아임웹",
        "date" => "2017-11-20",
        "likes" => 0
    ],
    [
        "idx" => 15,
        "title" => "진짜로 갑니다~~",
        "writer" => "아임웹",
        "date" => "2017-11-20",
        "likes" => 0
    ],
    [
        "idx" => 16,
        "title" => "분위기 최고네요~!",
        "writer" => "아임웹",
        "date" => "2018-04-17",
        "likes" => 0
    ],
    [
        "idx" => 17,
        "title" => "아이폰 7 플러스",
        "writer" => "아임웹",
        "date" => "2018-05-14",
        "likes" => 0
    ],
    [
        "idx" => 18,
        "title" => "구글 지도 게시물에 임베드 하기",
        "writer" => "아임웹",
        "date" => "2019-12-16",
        "likes" => 0
    ],
    [
        "idx" => 19,
        "title" => "제목",
        "writer" => "아임웹",
        "date" => "2019-12-16",
        "likes" => 0
    ],
    [
        "idx" => 20,
        "title" => "네이버 지도(v5) 임베드",
        "writer" => "아임웹",
        "date" => "2019-12-17",
        "likes" => 0
    ]

    ];
$num = count($forum);
/*한 페이지 당 데이터 개수*/
$list_num = 5;
/*한 블럭 당 페이지 수*/
$page_num = 5;

$page = isset($_GET["page"])? $_GET["page"] : 1;

$now = ($page-1) * $list_num;

$total_page = ceil($num / $list_num);

$total_block = ceil($total_page / $page_num);

$now_block = ceil($page/$page_num);

$s_page = 1;

$e_page = $now_block * $page_num;

$s_pageNum = ($now_block - 1) * $page_num + 1;

if($s_pageNum <= 0){
    $s_pageNum = 1;
}

$e_pageNum = $now_block * $page_num;

if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
}

?>