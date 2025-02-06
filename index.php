<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배너 아래 중앙 정렬</title>

    <?php
    
    $ads[0] = '<a href="https://link.coupang.com/a/cdaGC0" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835648?subId=&traceId=V0-301-879dd1202e5c73b2-I835648&w=728&h=90" alt=""></a>'; 
    $ads[1] = '<a href="https://link.coupang.com/a/cdaJxd" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835677?subId=&traceId=V0-301-969b06e95b87326d-I835677&w=728&h=90" alt=""></a>';
    $ads[2] = '<a href="https://link.coupang.com/a/cdaJLZ" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835649?subId=&traceId=V0-301-bae0f72e5e59e45f-I835649&w=728&h=90" alt=""></a>';
    $ads[3] = '<a href="https://link.coupang.com/a/cdaJTo" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835650?subId=&traceId=V0-301-50c6c2b97fba9aee-I835650&w=728&h=90" alt=""></a>';
    $ads[4] = '<a href="https://link.coupang.com/a/cdaJZ0" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835651?subId=&traceId=V0-301-371ae01f4226dec2-I835651&w=728&h=90" alt=""></a>';
    $ads[5] = '<a href="https://link.coupang.com/a/cdaJ5S" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835652?subId=&traceId=V0-301-5a8c79a76485eb21-I835652&w=728&h=90" alt=""></a>';
    $ads[6] = '<a href="https://link.coupang.com/a/cdaKg0" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835639?subId=&traceId=V0-301-5f9bd61900e673c0-I835639&w=728&h=90" alt=""></a>';
    $ads[7] = '<a href="https://link.coupang.com/a/cdaKlK" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835657?subId=&traceId=V0-301-f5c692db558def48-I835657&w=728&h=90" alt=""></a>';
    $ads[8] = '<a href="https://link.coupang.com/a/cdaKrF" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835656?subId=&traceId=V0-301-2f679fc6bd8f2e58-I835656&w=728&h=90" alt=""></a>';
    $ads[9] = '<a href="https://link.coupang.com/a/cdaKwx" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835655?subId=&traceId=V0-301-2b8ef06377ec8f50-I835655&w=728&h=90" alt=""></a>';
    $ads[10] = '<a href="https://link.coupang.com/a/cdaKCr" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835654?subId=&traceId=V0-301-5f4982b43e2b4522-I835654&w=728&h=90" alt=""></a>';
    $ads[11] = '<a href="https://link.coupang.com/a/cdaKL5" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835653?subId=&traceId=V0-301-7e6e8eb8ddfa1bfb-I835653&w=728&h=90" alt=""></a>';
    $ads[12] = '<a href="https://link.coupang.com/a/cdaKRf" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835658?subId=&traceId=V0-301-c1744fa69c93f626-I835658&w=728&h=90" alt=""></a>';
    $ads[13] = '<a href="https://link.coupang.com/a/cdaKWs" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835659?subId=&traceId=V0-301-0fd2df58973b32a5-I835659&w=728&h=90" alt=""></a>';
    $ads[14] = '<a href="https://link.coupang.com/a/cdaK1P" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835660?subId=&traceId=V0-301-12cd6d67384e2afb-I835660&w=728&h=90" alt=""></a>';
    $ads[15] = '<a href="https://link.coupang.com/a/cdaK8x" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835661?subId=&traceId=V0-301-efafde73812c2264-I835661&w=728&h=90" alt=""></a>';
    $ads[16] = '<a href="https://link.coupang.com/a/cdaLeT" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/835662?subId=&traceId=V0-301-8be2627c04ed5569-I835662&w=728&h=90" alt=""></a>';
    $ads[17] = '<a href="https://link.coupang.com/a/cdaLmA" target="_blank" referrerpolicy="unsafe-url"><img src="https://ads-partners.coupang.com/banners/836414?subId=&traceId=V0-301-5079b8362432a905-I836414&w=728&h=90" alt=""></a>';
    
    ?>

    <style>
        #banner {
            border: 0px solid red;
            z-index: 9999;
            position: fixed;
            left: 50%;
            margin-left: -364px;
            margin-bottom: 20px;
            bottom: 0;
            width: 728px;
            height: 90px;
            text-align: center;
        }

    </style>
</head>

<body>
    <div id="banner">
        <?php echo $ads[rand(0, count($ads)-1)]; ?>
    </div>
</body>

</html>
