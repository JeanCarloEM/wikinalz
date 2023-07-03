<?php
/* SAINDO DA PASTA SPLASH */
if (strtolower(trim($_SERVER["HTTP_HOST"])) === 'localhost'){
  $folderPai = pathinfo( dirname ( dirname (__file__) ) );
  
  $url = "http://localhost/git/__DOM__/" . $folderPai["basename"] . "/";
}else
  $url = "http://" . strtolower(trim($_SERVER["HTTP_HOST"])) . "/";

if (preg_match('/^(.*)?\/splash(\/.*)?$/', $_SERVER["REQUEST_URI"]))
  header("location: $url");
  
?><!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Wikinalz, o conhecimento.</title>
  <link href="splash.css" rel="stylesheet" />  

  <!-- FAV and TOUCH ICONS -->
  <link rel="shortcut icon" type="image/x-icon" href="LOGOs/logo.ico?ver=2" />  
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="LOGOs/png144.png?ver=2">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="LOGOs/png114.png?ver=2">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="LOGOs/png72.png?ver=2">
  <link rel="apple-touch-icon-precomposed" href="images/ico/LOGOs/png57.png?ver=2">
  
</head>

<body> 
  <div id="logo">
  </div>
  
  <footer> 
    <div id="propriedade">
      &COPY; Organização <b>Wikinalz</b><br />
    </div>
    
    <span id="descri">Wikinalz é uma organização informal (por enquanto) sem fins lucrativos com objetivos educacionais, que mantêm site(s) colaborativo(s) wiki, como o <a href="//www.wikiscrito.org">wikiscrito.org</a>.</span>
            
    <hr style="margin: .5em 0 1em;" />
      
    <b>Deseja colaborar de alguma forma?</b> Procura-se pessoas comprometidas, que estejam disposta a doar tempo, mão de obra, recursos monetários e assessoria especializada. Sua ajuda será muito bem vida, mande um e-mail para <a href="maito:projetos@wikinalz.org">projetos@wikinalz.org</a> e se engaje!<br />
      
    <hr style="margin: 1em 0 .5em;" />

    <a id="licenca" rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.pt_BR">
      <img alt="Licença Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" style="margin: 0px;"/>
    </a>
    
    <span id="licencatext">O texto desta obra é disponibilizado nos termos da licença <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.pt_BR">Atribuição-Partilha nos Mesmos Termos 3.0 não Adaptada (CC BY-SA 3.0)</a>; pode estar sujeito a condições adicionais.</span>
  </footer>
</body>

</html>