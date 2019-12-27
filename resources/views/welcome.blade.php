<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About_Me</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/105/three.min.js"></script>
            <script>
                $(function() {
                    setTimeout(function(){
                        $('.start p').fadeIn(1600);
                    },500); //0.5秒後にロゴをフェードイン!
                    setTimeout(function(){
                        $('.start').fadeOut(500);
                    },2000); //2秒後にロゴ含め真っ白背景をフェードアウト！
                });

                window.addEventListener('DOMContentLoaded', init);

                    function init() {
                        var container = document.getElementById( 'view' );
                        document.body.appendChild( container );

                        var width = container.clientWidth;
                        var height = container.clientHeight;

                        // レンダラーを作成
                        var renderer = new THREE.WebGLRenderer();
                        renderer.setSize(width, height );
                        container.appendChild( renderer.domElement );

                        // シーンを作成
                        var scene = new THREE.Scene();

                        // カメラを作成
                        var camera = new THREE.PerspectiveCamera(45, width / height, 1, 10000);
                        camera.position.set(0, 100, 100);

                        // オブジェクトを作成
                        var geometry = new THREE.SphereGeometry( 100, 40, 40 );

                        var material = new THREE.MeshPhongMaterial( {
                            color: 0x000000,
                            polygonOffset: true,
                            polygonOffsetFactor: 1,
                            polygonOffsetUnits: 1
                        } );

                        var mesh = new THREE.Mesh(geometry, material);
                        scene.add( mesh );

                        // ワイヤーフレーム
                        var geo = new THREE.EdgesGeometry( mesh.geometry );
                        var mat = new THREE.LineBasicMaterial( { color: 0x666666, linewidth: 2 } );
                        var wireframe = new THREE.LineSegments( geo, mat );
                        mesh.add( wireframe );
                        
                        // ライト作成
                        var light = new THREE.AmbientLight( 0x404040, 1 ); // soft white light
                        scene.add( light );

                        renderer.render(scene, camera);


                        // アニメーション実行
                        animate();
                        function animate() {
                            requestAnimationFrame(animate);

                            // オブジェクト回転
                            // mesh.rotation.x += 0.01;
                            mesh.rotation.y += 0.001;

                            // レンダリング
                            renderer.render(scene, camera);
                        }
                    }
            </script>
        </script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>

            * {
                margin: 0;
                padding: 0;
            }
            *, *:before, *:after {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                -ms-box-sizing: border-box;
                box-sizing: border-box;
            }
            body {
                font-family: 'Roboto', sans-serif;
            }

            #view {
                position: fixed;
                color: #fff;
                width: 100%;
                height: 200px;
                text-align: center;
                background: #000;
                bottom: 0px;
            }
            #view h1 {
                top: 50%;
                margin-top: -20px;
                position: absolute;
                width: 100%;
                text-align: center;
            }
            
            html, body {
                background-color: #333333;
                color: #777777;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                height: 100%;
                width: 100%;
                top: 0px;
                position: absolute;
            }

            .left_content{
                width: 15%;
                top: 0px;
            }


            a {
                display: block;
                margin: 150px; 
                transform: rotate(270deg);
                color: #777777;
                right: 0;
                font-size: 22px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .center_content {
                border-left: solid 1px #FF8C00;
                border-right: solid 1px #FF8C00;
                font-size: 100px;
                height: 100vh;
                width: 70%;
                
            }
            .center_content_shadow {
                top: 0;
                left: 200px;
                border-left: solid 1px #FFA500;
                border-right: solid 1px #FFA500;
                font-size: 100px;
                height: 100vh;
                width: 72%;
                position: absolute;
            }

            .title{
                margin: 12% 20px;
                color: #AAAAAA;
                position: absolute;
            }

            .title_shadow{
                margin: 20% 35px;
                color: #666666;
            }

            .accent_1{
                position: absolute;
                color: #FF8C00;
                top: 364px;
                font-size: 120px;
                left: 439px;
                
            }

            .accent_2{
                position: absolute;
                color: #FF8C00;
                top: 80px;
                font-size: 200px;
                left: 542px;
            }

            .accent_1_shadow{
                position: absolute;
                color: #FFA500;
                left: 453px;
                top: 391px;
                font-size: 120px;
            }

            .accent_2_shadow{
                position: absolute;
                color: #FFA500;
                top: 105px;
                font-size: 200px;
                left: 560px;
            }

            .boxes_1{
                width: 85%;
                position: absolute;
                border-bottom: solid 1px #FF8C00;
                top: 10vh;
                right: 0px;
            }
            .boxes_2{
                width: 85%;
                position: absolute;
                border-bottom: solid 1px #FF8C00;
                bottom: 10vh;
                left: 0px
            }
            .boxes_1_shadow{
                width: 85%;
                position: absolute;
                border-bottom: solid 1px #FFA500;
                top: 8vh;
                right: 1%;
            }
            .boxes_2_shadow{
                width: 85%;
                position: absolute;
                border-bottom: solid 1px #FFA500;
                bottom: 8vh;
                left: 1%;
            }

            .right_content{
                height: 100vh;
                width: 15%;
                right: 0px;
            }

            .right_text{
                transform: rotate(270deg);
                margin-top: 600px;
                font-size: 20px;
                width: 300px;
            }

            .start {
                background: #222222;
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                z-index: 9000;
            }
            .start p {
                position: fixed;
                right: 580px;
                transform: translate(-50%, -50%);
                width: 280px;
                color: #FF8C00;
                font-size: 200px;
                bottom: -390px;
                display: none;
            }

        </style>
    </head>
    <body>
        <!-- <div class="start">
            <p>WELCOME</p>
        </div> -->
        <div class="content">
            <div id="view">
                <h1>Sphere Wireframe</h1>
            </div>
            <div class ="left_content">
                <ul class="links">
                    <a href="/work">Works</a>
                    <a href="https://github.com/ryoryo12">GitHub</a>
                    <a href="https://www.facebook.com/ryota.hirata.986">Facebook</a>
                    <a href="/contact_form">Contact</a>
                </ul>
            </div>
                <!-- <div class ="center_content"> 
                <div class="title">
                    Thanks
                <br>
                    For
                <br>
                    Coming
                </div>
                <div class="title_shadow">
                    Thanks
                <br>
                    For
                <br>
                    Coming
                </div>
                <div class="accent_1">
                .
                </div>
                <div class="accent_2">
                .
                </div>
                <div class="accent_1_shadow">
                .
                </div>
                <div class="accent_2_shadow">
                .
                </div> 
                <div class="boxes_1"></div>
                <div class="boxes_2"></div>
                <div class="boxes_1_shadow"></div>
                <div class="boxes_2_shadow"></div>
            <div class ="center_content_shadow"></div>

            </div>
        -->
            <div class ="right_content">
                <div class="right_text">
                    I'm Ryota
                <br>
                    I will work as a system engineer
                <br>
                    based in Tokyo
                </div>
            </div>
            
        </div>
    </body>
</html>
