<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>

    <link rel="stylesheet" href="css/start/start.css">
</head>
<body>

<div class="container">
    <section class="gallery">

        <div class="frame">
            <div class="frame__content">
                <h2>World Travel Guide</h2>
            </div>
        </div>

        <div class="frame">
            <div class="frame__content">
                <div class="frame-media frame-media_left" style="background-image: url(images/start/1.jpg)"></div>
            </div>
        </div>

        <div class="frame frame_bg">
            <div class="frame__content">
                <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video>
            </div>
        </div>

        <div class="frame"></div>

        <!--			<div class="frame">-->
        <!--				<div class="frame__content text-right">-->
        <!--					<h3>Pure planet</h3>-->
        <!--					<p>Lorem ipsum dolor sit amet, consectetur elit adipisicing. Nemo fugit, rerum dolorem assumenda consequatur dicta error iure laboriosam temporibus.</p>-->
        <!--				</div>-->
        <!--			</div>-->

        <div class="frame frame_bg">
            <div class="frame__content">
                <div class="frame-media frame-media_left" style="background-image: url(images/start/2.jpg)"></div>
            </div>
        </div>

        <div class="frame"></div>

        <div class="frame frame_bg">
            <div class="frame__content">
                <div class="frame-media frame-media_right" style="background-image: url(images/start/3.jpg)"></div>
            </div>
        </div>

        <div class="frame"></div>

        <!--			<div class="frame">-->
        <!--				<div class="frame__content text-left">-->
        <!--					<h3>Ask the Mountains</h3>-->
        <!--					<p>Lorem ipsum dolor sit amet, consectetur elit. Rerum dolorem assumenda consequatur dicta error iure laboriosam temporibus omnis quae eaque aliquam esse unde accusamus dolores non soluta.</p>-->
        <!--				</div>-->
        <!--			</div>-->

        <div class="frame frame_bg">
            <div class="frame__content">
                <div class="frame-media frame-media_right" style="background-image: url(images/start/4.jpg)"></div>
            </div>
        </div>

        <div class="frame">
            <div class="frame__content">
                <video class="frame-media frame-media_left" src="media/video_optimized.mp4" autoplay loop muted></video>
            </div>
        </div>

        <div class="frame"></div>
        <div class="frame"></div>

        <div class="frame frame_bg">
            <div class="frame__content">
                <div class="frame-media frame-media_right" style="background-image: url(images/start/5.jpg)"></div>
            </div>
        </div>

        <div class="frame frame_bg">
            <div class="frame__content">
                <video class="frame-media" src="media/video_optimized.mp4" autoplay loop muted></video>
            </div>
        </div>

        <div class="frame"></div>
        <div class="frame"></div>

        <div class="frame">
            <div class="frame__content" id="end" style="transition: all 1s ease-in">
                <a href="#" onclick="inWay()" style="text-decoration: none; color: white;">Вперед к нам</a>
            </div>
        </div>

    </section>
</div>

<img class="soundbutton paused" src="images/start/sound.gif" alt="Alt">
<audio class="audio" src="media/ambient.mp3" loop></audio>

<script src="js/start/start.js"></script>
</body>
</html>