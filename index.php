<!doctype html>

<html lang="en">
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

  <style>
  a {
    color:#000;
    text-decoration: none;
    font-family: "goudyserif",Georgia,serif;
  }
  #lastfm .solidbg { background-color: rgba(255, 48, 64, 1);}
  #dentclean .solidbg { background-color: rgba(0, 84, 128, 1);}
  #linkedin .solidbg { background-color: rgba(34, 136, 255, 1);}
  #sobre .solidbg { background-color: #7cf;}
  #webgl .solidbg { background-color: rgba(238, 136, 221, 1);}
  #contato .solidbg { background-color: rgba(255, 96, 50, 1);}
  #gplus .solidbg { background-color: rgba(66, 66, 66, 1);}
  #github .solidbg { background-color: rgba(0, 0, 0, 1);}
  #facebook .solidbg {  background-color: rgba(74, 103, 168, 1);}
  #horajs .solidbg { background-color: #294;}


  .icon-container { width:50%; height:50%; background-size:contain; background-position: center; background-repeat: no-repeat; margin:auto; top: 0; transform: rotate(0);}

  #lastfm .icon-container {background-image: url("img/lastfmicon.png"); }
  #dentclean .icon-container {background-image: url("img/dentelimpoicon.png"); }
  #linkedin .icon-container {background-image: url("img/linkedinicon.png"); }
  #sobre .icon-container {background-image: url("img/grouchoicon.png"); }
  #webgl .icon-container {background-image: url("img/webglicon.png"); }
  #contato .icon-container {background-image: url("img/emailicon.png"); }
  #gplus .icon-container {background-image: url("img/gplusicon.png"); }
  #github .icon-container {background-image: url("img/githubicon.png"); }
  #facebook .icon-container {background-image: url("img/facebookicon.png");  }
  #horajs .icon-container {background-image: url("img/worldclock.png"); }

  #lastfm{ background: url("img/lastfmbg.png") center center no-repeat; background-size: cover;}
  #dentclean{ background: url("img/dentcleanbg.png") center center no-repeat; background-size: cover;}
  #linkedin{ background: url("img/linkedinbg.png") center center no-repeat; background-size: cover;}
  #sobre{ background: url("img/sobrebg.png") center center no-repeat; background-size: cover;}
  #webgl{ background: url("img/webglbg.png") center center no-repeat; background-size: cover;}
  #contato{ background: url("img/emailbg.png") center center no-repeat; background-size: cover;}
  #gplus{ background: url("img/gplusbg.png") center center no-repeat; background-size: cover;}
  #github{ background: url("img/githubbg.png") center center no-repeat; background-size: cover;}
  #facebook{ background: url("img/facebookbg.png") center center no-repeat; background-size: cover;}
  #horajs{ background: url("img/worldclockbg.png") center center no-repeat; background-size: cover;}
 
  .hover-f2:hover { flex:2; }
  .hover-f3:hover { flex:3; }
  .hover-f4:hover { flex:4; }

  .icon-box { position:relative; transition: all 1s; }

  .icon-box .content { position:absolute; height:100%; opacity:0; width:100%; overflow:hidden;  transition-delay:0s;}
  .icon-box:hover .content { height:100%;width:100%; opacity:1; transition-delay:0.3s; }
    .icon-box .content > a {
      text-align: center;
      line-height:3rem;
      font-size: 3rem;
      padding: 2rem 0;
      width:100%;
      top:50%;
      margin-top:-1rem;
      background-color: white;
      border-top: 0px solid black; 
      border-bottom: 0px solid black;
      display: block;
    }
    .icon-box .content a:hover {
      text-decoration: underline;transition: all 0.3s; 
    }
  .icon-box .content img { max-width: 70%;max-height: 80%; margin: 10% 15%;}
  .icon-box .solidbg { position:absolute; height:100%; width:100%; overflow:hidden;}
  .icon-box:hover .solidbg { opacity:0;}

  #sobre h1 { 
    font-family: "goudyserif",Georgia,serif; font-weight: bold;
  }
  #sobre p {
    font-family: "pt_sansregular", Arial, sans-serif;
  }

  /* wow, such media queries */

  body, html {
      font-size:18px;
  }
  @media (max-width: 1000px) {
    body, html {
      font-size:16px;
    }
    #sobre { text-align: center;}
    #sobre h1 { margin: 0;}
  }
  /* medium */
  @media (max-width: 768px) {
    body, html {
      font-size:14px;
    }
  }
  </style>
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
              <img src="img/freedom.png" alt="Foto do cara mais gato desse site"/>
            </div>
            <div>
              <h1 itemprop="name"> Evandro Carreira </h1>
              <p><span itemprop="jobTitle">Web Developer</span>, cozinheiro de improviso, trompetista solo e eterno aprendiz da vida.</p>
              <a href="#" class="whitelink">+ Skills</a>
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
        <aside id="horajs" class="flex-3 hover-f4 icon-box"> 
          <div class="solidbg flex"> 
            <div class="icon-container"></div>
          </div>
          <div class="content flex"> 
            <a href ="/fuzzy">Fuzzy Horário</a>
          </div>
        </aside>
        <aside id="dentclean" class="flex-2  hover-f3 icon-box"> 
          <div class="solidbg flex"> 
            <div class="icon-container"></div>
          </div>
          <div class="content flex"> 
            <a href ="/jogos">Jogos Odontológicos</a>
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
        <aside id="linkedin" class="flex-1 hover-f3 icon-box"> 
          <div class="solidbg flex"> 
            <div class="icon-container"></div>
          </div>
          <div class="content flex"> 
            <a href ="https://www.linkedin.com/profile/view?id=24704595" target="_blank">linkedin.com/eu</a>
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
        <aside id="gplus" class="flex-1 hover-f2 icon-box"> 
          <div class="solidbg flex"> 
            <div class="icon-container"></div>
          </div>
          <div class="content flex"> 
            <a href ="https://plus.google.com/+EvandroCarreira" target="_blank">plus/+EvandroCarreira</a>
          </div>
        </aside>
      </div>

    </div>
</body>
</html>