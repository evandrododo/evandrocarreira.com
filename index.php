<!doctype html>

<?php
  $jobs = array("Web Developer", "Programador", "UX Designer", "Cientista", "Pirata");
  $hobbies = array("cozinheiro de improviso", "localhost hacker", "entusiasta opensource" );
  $brisas = array("trompetista solo", "baixista aposentado", "poser", "VJ");

  $fator = 0.3;
  $job = floor($fator*count($jobs));
  $hobbie = floor($fator*count($hobbies));
  $brisa = floor($fator*count($brisas));

  $frase = "<span itemprop='jobTitle'>".$jobs[$job]."</span>, ".$hobbies[$hobbie].", ".$brisas[$brisa]." e eterno aprendiz da vida";
?><html lang="en">

<head>
    <meta charset="utf-8">

    <title>Evandro Carreira - Code, Math &amp Art</title>

    <meta name="description" solidbg="Evandro Carreira - Code, Math and Art">
    <meta name="author" solidbg="Evandro Carreira">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,700" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Shadows+Into+Light:400" type="text/css" charset="utf-8">

    <link rel="icon" href="img/icon-16.png" sizes="16x16">
    <link rel="icon" href="img/icon-32.png" sizes="32x32">

    <link rel="stylesheet" href="css/style.css">

    <style>
        h1 a {
            text-decoration: none;
            color: white;
        }
        a {
            text-decoration: none;
            color: inherit;
        }
        #lastfm .solidbg {
            background-color: rgba(255, 48, 64, 1);
        }
        #twitter .solidbg {
            background-color: rgba(10, 90, 50, 1);
        }
        #linkedin .solidbg {
            background-color: rgba(34, 136, 255, 1);
        }
        #webfonts .solidbg {
            background-color: rgba(34, 136, 255, 1);
        }
        #sobre .solidbg {
            background-color: #7cf;
        }
        #webgl .solidbg {
            background-color: rgba(238, 136, 221, 1);
        }
        #contato .solidbg {
            background-color: rgba(255, 96, 50, 1);
        }
        #gplus .solidbg {
            background-color: rgba(66, 66, 66, 1);
        }
        #github .solidbg {
            background-color: rgba(0, 0, 0, 1);
        }
        #facebook .solidbg {
            background-color: rgba(74, 103, 168, 1);
        }
        #taoofprogramming .solidbg {
            background-color: #FFD079;
        }
        .icon-container {
            width: 50%;
            height: 50%;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            margin: auto;
            top: 0;
            transform: rotate(0);
        }
        #lastfm .icon-container {
            background-image: url("img/lastfmicon.png");
        }
        #twitter .icon-container {
            background-image: url("img/twittericon.png");
        }
        #linkedin .icon-container {
            background-image: url("img/linkedinicon.png");
        }
        #webfonts .icon-container {
            background-image: url("img/webfontsicon.png");
        }
        #sobre .icon-container {
            background-image: url("img/grouchoicon.png");
        }
        #webgl .icon-container {
            background-image: url("img/webglicon.png");
        }
        #contato .icon-container {
            background-image: url("img/emailicon.png");
        }
        #gplus .icon-container {
            background-image: url("img/gplusicon.png");
        }
        #github .icon-container {
            background-image: url("img/githubicon.png");
        }
        #facebook .icon-container {
            background-image: url("img/facebookicon.png");
        }
        #taoofprogramming .icon-container {
            background-image: url("img/taoicon.png");
        }
        #lastfm {
            background: url("img/lastfmbg.png") center center no-repeat;
            background-size: cover;
        }
        #twitter {
            background: url("img/twitterbg.png") center center no-repeat;
            background-size: cover;
        }
        #linkedin {
            background: url("img/linkedinbg.png") center center no-repeat;
            background-size: cover;
        }
        #webfonts {
            background: url("img/webftonsbg.png") center center no-repeat;
            background-size: cover;
        }
        #sobre {
            background: url("img/sobrebg.png") center center no-repeat;
            background-size: cover;
        }
        #webgl {
            background: url("img/webglbg.png") center center no-repeat;
            background-size: cover;
        }
        #contato {
            background: url("img/emailbg.png") center center no-repeat;
            background-size: cover;
        }
        #gplus {
            background: url("img/gplusbg.png") center center no-repeat;
            background-size: cover;
        }
        #github {
            background: url("img/githubbg.png") center center no-repeat;
            background-size: cover;
        }
        #facebook {
            background: url("img/facebookbg.png") center center no-repeat;
            background-size: cover;
        }
        #taoofprogramming {
            background: url("img/taobg.png") center center no-repeat;
            background-size: cover;
        }
        .hover-f2:hover {
            flex: 2;
        }
        .hover-f3:hover {
            flex: 3;
        }
        .hover-f4:hover {
            flex: 4;
        }
        .icon-box {
            position: relative;
            transition: all 1s;
        }
        .icon-box .content {
            position: absolute;
            height: 100%;
            opacity: 0;
            width: 100%;
            overflow: hidden;
            transition-delay: 0s;
        }
        .icon-box:hover .content {
            height: 100%;
            width: 100%;
            opacity: 1;
            transition-delay: 0.3s;
        }
        .icon-box .content > span {
            text-align: left;
            width: 94%;
            height: 68%;
            overflow: visible;
            padding: 3%;
            margin: 0;
            background-color: rgba(255, 255, 255, 0.7);
            border-top: 0px solid black;
            border-bottom: 0px solid black;
            display: block;
            position: absolute;
            bottom: 0;
            font-family: "Raleway", Arial, sans-serif;
            font-size:1em;
        }
        .icon-box .content > span h2 {
            position: absolute;
            font-size: 2em;
            top: -3em;
            color: white;
            text-shadow: 1px 1px 1px #000, 0px 0px 3px #000;
        }
        .icon-box .content img {
            max-width: 70%;
            max-height: 80%;
            margin: 10% 15%;
        }
        .icon-box .solidbg {
            position: absolute;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }
        .icon-box:hover .solidbg {
            opacity: 0;
        }
        #sobre h1 {
            font-family: "Shadows Into Light", cursive;
            font-weight: bold;
            text-shadow: 1px 1px 1px #000, 0px 0px 3px #000;
            color: white;
        }
        h2 {
            font-family: "Shadows Into Light", cursive;
            font-weight: bold;
        }
        #sobre p {
            font-family: "Raleway", Arial, sans-serif;
        }
        /* wow, such media queries */
        body,
        html {
            font-size: 16px;
        }
        @media (max-width: 1000px) {
            body,
            html {
                font-size: 14px;
            }
            #sobre {
                text-align: center;
            }
            #sobre h1 {
                margin: 0;
            }
        }
        /* medium */
        @media (max-width: 768px) {
            body,
            html {
                font-size: 12px;
            }
        }
    </style>
    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-53642504-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
</head>

<body>

    <div class="wrapper flex-row ">
        <div class="flex-col flex-1 hover-f2">
            <aside id="facebook" class="flex-1 hover-f2 icon-box">
                <div class="solidbg flex">
                    <div class="icon-container"></div>
                </div>
                <div class="content flex">
                    <span>
                        <h2><a href ="http://facebook.com/evandro.carreira" target="_blank">mim add no feisse</a></h2>
                        A Rede Social que já tem toda a sua família. Vovó, casal com perfil compartilhado e até cachorro.<br> Também coleta seus dados te enche de propaganda, mas dizem que é a globo que te manipula.
                    </span>
                </div>
            </aside>
            <header id="sobre" class="flex-1  hover-f3 icon-box">
                <div class="solidbg flex">
                    <div class="icon-container"></div>
                </div>
                <div class="content flex media-flex background-doido" itemscope itemtype="http://schema.org/Person">
                    <div>
                        <img src="img/freedom.png" alt="Foto do cara mais gato desse site" />
                    </div>
                    <div>
                        <h1 itemprop="name"> Evandro Carreira </h1>
                        <p>
                            <?=$frase?>
                        </p>
                        <!-- <a href="#" class="whitelink">+ Skills</a> -->

                    </div>
                </div>
            </header>
            <footer id="contato" class="flex-1  hover-f2 icon-box">
                <div class="solidbg flex">
                    <div class="icon-container"></div>
                </div>
                <div class="content flex">
                    
                    <span>
                        <h2><a href ="mailto:evandro.carreira@gmail.com" target="_blank">evandro.carreira@gmail.com</a></h2>
                        <br>
                        Olá,<br>
                        Caso tenha uma mensagem importante, favor enviar um e-mail.<br>
                        Por mais importante que seja, seja espontâneo.<br>
                        <br>
                        Atenciosamente,<br>
                        Evandro Carreira<br>
                    </span>
                </div>
            </footer>
        </div>
        <div class="flex-col flex-1 hover-f2">
            <!--
        <aside id="horajs" class="flex-3 hover-f4 icon-box"> 
          <div class="solidbg flex"> 
            <div class="icon-container"></div>
          </div>
          <div class="content flex"> 
            <a href ="/fuzzy">Fuzzy Horário</a>
          </div>
        </aside> -->

            <aside id="taoofprogramming" class="flex-3 hover-f4 icon-box">
                <div class="solidbg flex">
                    <div class="icon-container"></div>
                </div>
                <div class="content flex">
                    <span>
                        <h2><a href ="tao/thetaoofprogramming.html">The Tao of Programming</a></h2>
                        Livro escrito em 1987 por <a href="http://en.wikipedia.org/wiki/Geoffrey_James_%28writer%29">Geoffrey James</a>, navegou por vários lugares da internet.<br>Fiz uma versão web para estudar o que dava pra fazer com CSS puro.
                    </span>
                </div>
            </aside>

            <aside id="twitter" class="flex-2  hover-f3 icon-box">
                <div class="solidbg flex">
                    <div class="icon-container"></div>
                </div>
                <div class="content flex">
                    <span>
                        <h2><a href ="http://www.twitter.com/evandro_dodo">twitter.com/evandro_dodo</a></h2>
                        Links sobre webdev em geral (css, js, html);<br>
                        Retweets engraçados (o que eu achar engraçado);<br>
                        Não sei pq tenho twitter.
                    </span>
                </div>
            </aside>
        </div>
        <div class="flex-col flex-1 hover-f2">
            <article id="lastfm" class="flex-2 hover-f3 icon-box">
                <div class="solidbg flex">
                    <div class="icon-container"></div>
                </div>
                <div class="content flex">
                    <span>
                        <h2><a href ="http://www.lastfm.com.br/user/evandro_dodo" target="_blank">last.fm</a></h2>
                        Registro de (quase) tudo o qe eu ouvi atualmente em um computador.<br>Uso de base pra descobrir novas músicas, me surpreender com alguma banda que eu não lembrava que já tinha escutado e tentar encontrar a trilha sonora ideal pro dia a dia.
                    </span>
                </div>
            </article>
            <aside id="webgl" class="flex-3 hover-f4 icon-box">
                <div class="solidbg flex">
                    <div class="icon-container"></div>
                </div>
                <div class="content flex">
                    <span>
                <h2><a href ="webgl/">WebGL Experiments</a></h2>
                    Projetos , Estudos e Brisas aleatórias com WebGL. 
            </span>
                </div>
            </aside>
        </div>
        <div class="flex-col flex-1 hover-f2">
            <aside id="webfonts" class="flex-1 hover-f3 icon-box">
                <div class="solidbg flex">
                    <div class="icon-container"></div>
                </div>
                <div class="content flex">
                    <span>
                        <h2><a href ="webfonts/" target="_blank">Webfonts</a></h2>

                    </span>
                </div>
            </aside>
            <aside id="github" class="flex-2 hover-f3 icon-box">
                <div class="solidbg flex">
                    <div class="icon-container"></div>
                </div>
                <div class="content flex">
                    <span>
                <h2><a href ="https://www.github.com/evandrododo" target="_blank">Github</a></h2>
                        Acredito que não exista posse sobre o conhecimento humano, quanto mais nos comunicarmos e trocarmos informação mais inteligentes seremos.<br>
                        Repositório online com o código de um monte de coisa que já desenvolvi, incluindo esse site.
            </span>
                </div>
            </aside>
            <aside id="gplus" class="flex-1 hover-f2 icon-box">
                <div class="solidbg flex">
                    <div class="icon-container"></div>
                </div>
                <div class="content flex">
                    <span>
                        <h2><a href ="https://plus.google.com/+EvandroCarreira" target="_blank">plus/+EvandroCarreira</a></h2>
                        Alguém usa isso?
                    </span>
                </div>
            </aside>
        </div>

    </div>
</body>

</html>
