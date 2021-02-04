<!DOCTYPE html>
<html>

<head>
    <title>吃掉小鹿乃</title>
    <meta item="description" content="你无聊吗？" />
    <meta name="Keywords" content="吃掉小鹿乃" />
    <meta itemprop="image" content="https://www.thac.cc/kano/res/logo.jpg" />
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <?php
    session_start();
    $str = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890');
    $_SESSION['token'] = $str;
    echo '<script>var __token="' . $str . '"</script>'
    ?>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?d41fa227018de3772f58108c76d3dfd5";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        console.log("修改的人我劝你好自为之，这种小游戏都需要修改？")
        document.onkeydown = function(e) {
            if (e.ctrlKey &&
                (e.keyCode === 65 ||
                    e.keyCode === 67 ||
                    e.keyCode === 73 ||
                    e.keyCode === 74 ||
                    e.keyCode === 80 ||
                    e.keyCode === 83 ||
                    e.keyCode === 85 ||
                    e.keyCode === 86 ||
                    e.keyCode === 117
                )) {
                return false;
            }
            if (e.keyCode == 18 || e.keyCode == 123) {
                return false
            }
        };
    </script>
    <meta name="viewport" content="initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, width=device-width,target-densitydpi=device-dpi" />
    <script type="text/javascript" src="scripts/createjs.js"></script>
    <script type="text/javascript">
        var isDesktop = navigator['userAgent'].match(/(ipad|iphone|ipod|android|windows phone)/i) ? false : true;

        var fontunit = isDesktop ? 20 : ((window.innerWidth > window.innerHeight ? window.innerHeight : window.innerWidth) / 320) * 10;

        document.write('<style type="text/css">' +

            'html,body {font-size:' + (fontunit < 30 ? fontunit : '30') + 'px;}' +

            (isDesktop ? '#welcome,#GameTimeLayer,#GameLayerBG,#GameScoreLayer.SHADE{position: absolute;}' :

                '#welcome,#GameTimeLayer,#GameLayerBG,#GameScoreLayer.SHADE{position:fixed;}@media screen and (orientation:landscape) {#landscape {display: box; display: -webkit-box; display: -moz-box; display: -ms-flexbox;}}') +

            '</style>');
    </script>
    <link href="./index.css" rel="stylesheet" type="text/css">
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-0536909684105118",
            enable_page_level_ads: true
        });
    </script>
</head>

<body onLoad="init()">
    <!--别修改了，好好脚踏实地玩吧-->
    <script src="./scripts/main.js" type="text/javascript"></script>
    <div id="GameScoreLayer" class="BBOX SHADE bgc1" style="display:none;">
        <div style="padding:0 5%;margin-top: 250px;">
            <div id="GameScoreLayer-text"></div>
            <div id="GameScoreLayer-score" style="margin:10px 0;">得分</div>
            <div id="GameScoreLayer-bast">最佳</div>
            <div id="GameScoreLayer-btn" class="BOX" style="margin-top:10px;">
                <div class="btn BOX-S" onClick="replayBtn()"><text style="color: #fff;">重来</text></div>&nbsp;
            </div>
            <div id="GameScoreLayer-btn" class="BOX" style="margin-top:10px;">
                <div class="btn BOX-S" onClick="gotoRank()"><text style="color: #fff;">排行榜</text></div>&nbsp;
            </div>
            <div class="pageContent" id="dd2" style="margin-top:10px;"></div>
        </div>
    </div>
    <div id="welcome" class="SHADE BOX-M">
        <div class="welcome-bg FILL"></div>
        <div class="FILL BOX-M" style="position:absolute;top:0;left:0;right:0;bottom:0;z-index:5;">
            <div style="margin:0 8% 0 9%;">
                <div style="font-size:2.6em; color:#FEF002;">你无聊吗？</div><br />
                <div style="font-size:2.2em; color:#fff; line-height:1.5em;">从最下面的小鹿乃开始，<br />20秒内看你能恰掉多少！<br /></div>
                <br />
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">名字</span>
                    </div>
                    <input type="text" id="name" class="form-control" maxlength=8 placeholder="用于纪录排行(特殊字符会被过滤)" aria-label="username" aria-describedby="basic-addon1">
                </div>
                <br />
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">留言</span>
                    </div>
                    <input type="text" id="message" class="form-control" maxlength=50 placeholder="可不填(特殊字符会被过滤)" aria-label="username" aria-describedby="basic-addon1">
                </div>
                <br />
                <div id="ready-btn" class="btn loading" style="display:inline-block; margin:0 auto; width:8em; height:1.7em; line-height:1.7em; font-size:2.2em; color:#fff;">
                </div>
                <div id="dd1" style="margin: 10px 0 0 0;">
                    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-6t+ed+2i-1n-4w" data-ad-client="ca-pub-0536909684105118" data-ad-slot="7781906075"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div id="landscape" class="SHADE BOX-M" style="background:rgba(0,0,0,.9);">
        <div class="welcome-bg FILL"></div>
        <div id="landscape-text" style="color:#fff;font-size:3em;">请竖屏玩耍</div>
    </div>
    <script type="text/javascript">
        if (isDesktop)
            document.write('</div>');
    </script>
    <script>
        (function() {
            var s = "_" + Math.random().toString(36).slice(2);
            document.write('<div id="' + s + '"></div>');
            (window.slotbydup = window.slotbydup || []).push({
                id: '2414325',
                container: s,
                size: '0,0',
                display: 'inlay-fix'
            });
        })();
    </script>
</body>

</html>