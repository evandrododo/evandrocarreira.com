<?php
  $jobs = array("web developer", "web developer", "web designer", "programador", "web developer", "ux designer", "web developer", "cientista", "pirata");
  $hobbies = array("cozinheiro de improviso", "localhost hacker", "entusiasta opensource", "ativista de sofá" );
  $brisas = array("trompetista solo", "baixista aposentado", "malabarista nas horas vagas", "poser", "VJ");

  $fator = mt_rand(0,100)/100;
  $job = floor($fator*count($jobs));
  $hobbie = floor($fator*count($hobbies));
  $brisa = floor($fator*count($brisas));

  $frase = "<span itemprop='jobTitle'>_".$jobs[$job]."</span>
            <br>_".$hobbies[$hobbie]."
            <br>_".$brisas[$brisa]."
            <br>_eterno aprendiz da vida";
?>
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

  <link rel="stylesheet" href="fonts/ptsansregular/stylesheet.css" type="text/css" charset="utf-8">
  <link rel="stylesheet" href="fonts/goudyserif/stylesheet.css" type="text/css" charset="utf-8">

  <link rel="icon" href="img/icon-16.png" sizes="16x16">
  <link rel="icon" href="img/icon-32.png" sizes="32x32">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/site.css">

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

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
            <a href ="http://facebook.com/evandro.carreira" target="_blank">fb.com/evandro.carreira</a>
          </div>
        </aside>
        <header id="sobre" class="flex-1  hover-f3 icon-box">
          <div class="solidbg flex">
            <div class="icon-container"></div>
          </div>
          <div class="content flex media-flex background-doido"  itemscope  itemtype="http://schema.org/Person">
            <div>
              <img src="img/freedom.png" alt="Foto do cara mais gato desse site" title="Quem sabe um sorriso"/>
            </div>
            <div>
              <h1 itemprop="name"> Evandro Carreira </h1>
              <p><?php echo $frase; ?></p>
             <!-- <a href="#" class="whitelink">+ Skills</a> -->
            </div>
          </div>
        </header>
        <footer id="contato" class="flex-1  hover-f2 icon-box">
          <div class="solidbg flex">
            <div class="icon-container"></div>
          </div>
          <div class="content flex">
            <a href ="mailto:evandro.carreira@gmail.com" target="_blank">evandro.carreira@gmail.com</a>
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
            <a href ="tao/thetaoofprogramming.html">The Tao of Programming</a>
          </div>
        </aside>

        <aside id="twitter" class="flex-2  hover-f3 icon-box">
          <div class="solidbg flex">
            <div class="icon-container"></div>
          </div>
          <div class="content flex">
            <a href ="http://www.twitter.com/evandro_dodo">twitter.com/evandro_dodo</a>
          </div>
        </aside>
      </div>
      <div class="flex-col flex-1 hover-f2">
        <article id="lastfm"class="flex-2 hover-f3 icon-box">
          <div class="solidbg flex">
            <div class="icon-container"></div>
          </div>
          <div class="content flex">
            <a href ="http://www.lastfm.com.br/user/evandro_dodo" target="_blank">lastfm.com/evandro_dodo</a>
          </div>
        </article>
        <aside id="webgl" class="flex-3 hover-f4 icon-box">
          <div class="solidbg flex">
            <div class="icon-container"></div>
          </div>
          <div class="content flex">
            <a href ="webgl/">WebGL Experiments</a>
          </div>
        </aside>
      </div>
      <div class="flex-col flex-1 hover-f2">
        <aside id="yeswequero" class="flex-1 hover-f3 icon-box">
          <div class="solidbg flex">
            <div class="icon-container"></div>
          </div>
          <div class="content flex">
            <a href="yeswequero43">Yes We Quero</a>
          </div>
        </aside>
        <aside id="github" class="flex-2 hover-f3 icon-box">
          <div class="solidbg flex">
            <div class="icon-container"></div>
          </div>
          <div class="content flex">
            <a href ="https://www.github.com/evandrododo" target="_blank">github.com/evandrododo</a>
          </div>
        </aside>
        <aside id="webfonts" class="flex-1 hover-f2 icon-box">
          <div class="solidbg flex">
            <div class="icon-container"></div>
          </div>
          <div class="content flex">
            <a href="webfonts">Webfonts</a>
          </div>
        </aside>
      </div>

    </div>
</body>

</html>
