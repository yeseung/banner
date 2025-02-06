<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배너 왼쪽/오른쪽 중앙 정렬</title>

    <?php
    
    $ad_left = [
        '<a href="https://link.coupang.com/a/cdlbDP" target="_blank" referrerpolicy="unsafe-url"><img src="https://image6.coupangcdn.com/image/affiliate/banner/46250e1c4c516a6bd86d544e77a5c197@2x.jpg" alt="앱코 저소음 텐키리스 멤브레인 87키 키보드, 블랙, MK87" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdlbRn" target="_blank" referrerpolicy="unsafe-url"><img src="https://image2.coupangcdn.com/image/affiliate/banner/eb017d19c2b9e5665f060e418ed5612b@2x.jpg" alt="앱코 저소음 텐키리스 108키 멤브레인 키보드, 블루, MK108" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdlb7i" target="_blank" referrerpolicy="unsafe-url"><img src="https://img1c.coupangcdn.com/image/affiliate/banner/f1ce8ead5848e0bcd2a381e3c622c5b4@2x.jpg" alt="앱코 축교환 레인보우 무빙 LED 기계식 유선 일반형 키보드, 블랙, K560, 적축" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdlclA" target="_blank" referrerpolicy="unsafe-url"><img src="https://img3c.coupangcdn.com/image/affiliate/banner/75cfa4e25ed8a2573da7324501b3e191@2x.jpg" alt="앱코 저소음 텐키리스 멤브레인 87키 키보드, 오트밀, MK87" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdlcAa" target="_blank" referrerpolicy="unsafe-url"><img src="https://image8.coupangcdn.com/image/affiliate/banner/80d1a3fc65a7a5adbe50711458e6740d@2x.jpg" alt="앱코 축교환 레인보우 무빙 LED 기계식 유선 일반형 키보드, 화이트, K560, 적축" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdlcHF" target="_blank" referrerpolicy="unsafe-url"><img src="https://img5c.coupangcdn.com/image/affiliate/banner/191e79b225876fc0dde2bfebd52038e4@2x.jpg" alt="COX 기계식 게이밍 유선 텐키리스 키보드, 그레이 + 화이트, CK01 TKL, 갈축" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdlc2v" target="_blank" referrerpolicy="unsafe-url"><img src="https://img4a.coupangcdn.com/image/affiliate/banner/9bc2556b7772fe0c3cd3ed6d2977f5a3@2x.jpg" alt="로지텍 무선 텐키리스 키보드, 도브 화이트, K380S" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdldfK" target="_blank" referrerpolicy="unsafe-url"><img src="https://image7.coupangcdn.com/image/affiliate/banner/7b8ad5c4cf6606cdd324c79d530c9ade@2x.jpg" alt="AULA F87 Pro 독거미 유무선 텐키리스 기계식 키보드 한글, 올리비아 화이트, 저소음 피치축" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdldzA" target="_blank" referrerpolicy="unsafe-url"><img src="https://img4c.coupangcdn.com/image/affiliate/banner/69322b08ba57a336480df463473d662a@2x.jpg" alt="COX 게이트론 LED 게이밍 기계식 유선 텐키리스 키보드, 크림 블루, CK87, 갈축" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdld91" target="_blank" referrerpolicy="unsafe-url"><img src="https://image3.coupangcdn.com/image/affiliate/banner/788bd2cc0208d46da8bde21bd9eecaf1@2x.jpg" alt="에이투 키5 기계식 게이밍 유선 텐키리스 키보드, 크리스탈, ATWO KEY 5, 백축" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdlezF" target="_blank" referrerpolicy="unsafe-url"><img src="https://img1a.coupangcdn.com/image/affiliate/banner/417c47860077d7a92cba444c9067816c@2x.jpg" alt="AULA 독거미 한글 오테뮤 저소음 피치축 V2 펀키스 기계식 유무선 키보드, 올리비아 화이트, F99, 제조사축" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdleKD" target="_blank" referrerpolicy="unsafe-url"><img src="https://image10.coupangcdn.com/image/affiliate/banner/5dfaa2362cf6c7e4595f587ed9da21ef@2x.jpg" alt="COX 게이트론 LED 게이밍 기계식 유선 텐키리스 키보드, 화이트, CK87, 황축" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdleV1" target="_blank" referrerpolicy="unsafe-url"><img src="https://img3c.coupangcdn.com/image/affiliate/banner/34f98961b433e4fb5830dd6caad85b74@2x.jpg" alt="에포메이커 RT100 한글자판 95% 레트로 기계식키보드 미니 디스플레이 가스켓 마운트 유무선 블루투스, Epo Wisteria Linear" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdlfdn" target="_blank" referrerpolicy="unsafe-url"><img src="https://image3.coupangcdn.com/image/affiliate/banner/7efb68cd57ebb15f543a4d9c5dea7474@2x.jpg" alt="PYHO 2.4G/BT 듀모드 유무선 키보드 V75 무선 블루투스 키보드 무소음 휴대용 오피스 게임 저소음, 라벤더 퍼플" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdlfCL" target="_blank" referrerpolicy="unsafe-url"><img src="https://img3c.coupangcdn.com/image/affiliate/banner/97fbd8341d552c707eb9d0a72384776d@2x.jpg" alt="darkFlash 유무선겸용 일반형 기계식 키보드, 밀크 브라운, GD108, 황축" width="120" height="240"></a>',
        '<a href="https://link.coupang.com/a/cdlfVQ" target="_blank" referrerpolicy="unsafe-url"><img src="https://image6.coupangcdn.com/image/affiliate/banner/9f9bd707335bc774cf6f0554869f143d@2x.jpg" alt="지클릭커 레트로 레드 슈퍼히어로 저소음 풀 윤활 기계식 게이밍 키보드, 저소음 적축" width="120" height="240"></a>'
    ];
    
    $ad_right = [
        '<a href="https://link.coupang.com/a/cdlrCi" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836832?subId=&traceId=V0-301-879dd1202e5c73b2-I836832&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlBUW" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836843?subId=&traceId=V0-301-969b06e95b87326d-I836843&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlB4T" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836844?subId=&traceId=V0-301-bae0f72e5e59e45f-I836844&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlCf3" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836845?subId=&traceId=V0-301-50c6c2b97fba9aee-I836845&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlCoh" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836846?subId=&traceId=V0-301-371ae01f4226dec2-I836846&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlCAc" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836847?subId=&traceId=V0-301-5a8c79a76485eb21-I836847&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlCO9" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835645?subId=&traceId=V0-301-5f9bd61900e673c0-I835645&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlCVp" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836848?subId=&traceId=V0-301-f5c692db558def48-I836848&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlC3X" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836849?subId=&traceId=V0-301-2f679fc6bd8f2e58-I836849&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlDbZ" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836850?subId=&traceId=V0-301-2b8ef06377ec8f50-I836850&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlDmV" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836851?subId=&traceId=V0-301-5f4982b43e2b4522-I836851&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlDuc" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836852?subId=&traceId=V0-301-7e6e8eb8ddfa1bfb-I836852&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlDGt" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836853?subId=&traceId=V0-301-c1744fa69c93f626-I836853&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlDN6" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836854?subId=&traceId=V0-301-0fd2df58973b32a5-I836854&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlD9L" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836855?subId=&traceId=V0-301-12cd6d67384e2afb-I836855&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlEiC" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836856?subId=&traceId=V0-301-efafde73812c2264-I836856&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlEp7" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836857?subId=&traceId=V0-301-8be2627c04ed5569-I836857&w=160&h=600" alt=""></a>',
        '<a href="https://link.coupang.com/a/cdlExV" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836816?subId=&traceId=V0-301-5079b8362432a905-I836816&w=160&h=600" alt=""></a>'
    ];

    ?>

    <style>
        #banner_left {
            border: 0px solid red;
            z-index: 9999;
            position: fixed;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 120px;
            height: 482px;
            margin-left: 20px;
            text-align: center;
        }

        #banner_right {
            border: 0px solid red;
            z-index: 9999;
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 160px;
            height: 600px;
            margin-right: 20px;
            text-align: center;
        }

    </style>
</head>

<body style="background: #ccc">
    <div id="banner_left">
        <div style="padding-bottom: 2px">
            <?php echo $ad_left[array_rand($ad_left)]; ?>
        </div>
        <div>
            <?php echo $ad_left[array_rand($ad_left)]; ?>
        </div>
    </div>

    <div id="banner_right">
        <?php echo $ad_right[array_rand($ad_right)]; ?>
    </div>
</body>

</html>
