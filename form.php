<?php
  $name=$_POST['name'];
  $yearsOld=$_POST['yearsOld'];
  $email=$_POST['email'];
  $favColor=$_POST['favColor'];
  if($favColor=='white'){
    echo "<!DOCTYPE html>
  <html lang='pt-br'>
    <head>
      <meta charset='UTF-8' />
      <meta http-equiv='X-UA-Compatible' content='IE=edge' />
      <meta name='viewport' content='width=device-width, initial-scale=1.0' />
      <title>Projeto Y</title>
      <style>
      * {
        margin: 0;
      }
      body {
        background-color: ".$favColor.";
      }
      .menu {
        width: 100%;
        height: 8.5vh;
        background-color: ".$favColor.";
      }
      #imgOne {
        width: 100%;
        height: 87vh;
      }
      .btnDefault {
        width: 12vw;
        height: 4vh;
        margin-left: 5vw;
        margin-top: 1.8vh;
        background-color: ".$favColor.";
        color: black;
        border: 1px solid black;
      }
      .btnDefault:hover {
        cursor: grab;
        width: 12vw;
        height: 4.5vh;
        margin-left: 5vw;
        background-color: ".$favColor.";
        color: black;
        border-bottom: 4px solid black;
      }
      .divHino {
        align-items: center;
      }
      .textHino {
        font-family: 'PT Sans Caption', sans-serif;
        font-size: 18px;
        color: white;
      }
      .fanVasco {
        width: 60vw;
        height: 15vh;
        border: 1px solid white;
        color: white;
        font-family: 'PT Sans Caption', sans-serif;
        font-size: 18px;
      }
      #fanVascoText {
        margin-left: 3vw;
      }
      .footer {
        width: 100%;
        margin-top: 17vh;
        height: 10vh;
        background-color: black;
      }
      </style>
    </head>
    <body>
      <div class='menu'>
        <button class='btnDefault'>Rio de janeiro</button>
        <button class='btnDefault'>Futebol</button>
        <button class='btnDefault'>Clube</button>
        <button class='btnDefault'>Instagram</button>
        <button class='btnDefault'>Twitter</button>
      </div>
      <img src='img/iconVasco.jpg' id='imgOne' alt='Vasco da Gama' />
      <center>
        <div class='divHino'>
        <div class='fanVasco'>
          <br />
          <h7 id='fanVascoText'>
            <br />Carteira de identificação de torcedor do Vascão da massa<br />Nome: ".$name."
            <br />Email: ".$email."<br />Idade: ".$yearsOld."<br />
          </h7>
        </div>
          <span class='textHino'>
            <br /><br />Hino do gigante da colina<br /><br /><br /><br />
            A Cruz de Malta é o meu pendão
            <br />
            Tu tens o nome do heroico português
            <br />
            Vasco da Gama, a tua fama assim se fez!
            <br />
            <br />
            Tua imensa torcida é bem feliz
            <br />
            Norte-Sul, Norte-Sul deste país
            <br />
            Tua estrela, na terra a brilhar
            <br />
            Ilumina o mar
            <br />
            <br />
            No atletismo, és um braço
            <br />
            No remo, és imortal
            <br />
            No futebol, és um traço
            <br />
            De união Brasil-Portugal
            <br />
            <br />
            No atletismo, és um braço
            <br />
            No remo, és imortal
            <br />
            No futebol, és um traço
            <br />
            De união Brasil-Portugal
            <br /><br />
            Vamos todos cantar de coração
            <br />
            A Cruz de Malta é o meu pendão!
            <br />
            Tu tens o nome do heroico português
            <br />
            Vasco da Gama, a tua fama assim se fez!
            <br /><br />
            Tua imensa torcida é bem feliz
            <br />
            Norte-Sul, Norte-Sul deste país
            <br />
            Tua estrela, na terra a brilhar
            <br />
            Ilumina o mar
            <br />
            <br />
            No atletismo, és um braço
            <br />
            No remo, és imortal
            <br />
            No futebol, és um traço
            <br />
            De união Brasil-Portugal
            <br /><br />
            No atletismo, és um braço
            <br />
            No remo, és imortal
            <br />
            No futebol, és um traço
            <br />
            De união Brasil-Portugal</span
          >
        </div>
      </center>
      <div class='footer'></div>
    </body>
  </html>
  ";
  } else{
    echo "<!DOCTYPE html>
  <html lang='pt-br'>
    <head>
      <meta charset='UTF-8' />
      <meta http-equiv='X-UA-Compatible' content='IE=edge' />
      <meta name='viewport' content='width=device-width, initial-scale=1.0' />
      <title>Projeto Y</title>
      <style>
      * {
        margin: 0;
      }
      body {
        background-color: ".$favColor.";
      }
      .menu {
        width: 100%;
        height: 8.5vh;
        background-color: ".$favColor.";
      }
      #imgOne {
        width: 100%;
        height: 87vh;
      }
      .btnDefault {
        width: 12vw;
        height: 4vh;
        margin-left: 5vw;
        margin-top: 1.8vh;
        background-color: ".$favColor.";
        color: white;
        border: 1px solid white;
      }
      .btnDefault:hover {
        cursor: grab;
        width: 12vw;
        height: 4.5vh;
        margin-left: 5vw;
        background-color: ".$favColor.";
        color: white;
        border-bottom: 4px solid white;
      }
      .divHino {
        align-items: center;
      }
      .textHino {
        font-family: 'PT Sans Caption', sans-serif;
        font-size: 18px;
        color: white;
      }
      .fanVasco {
        width: 60vw;
        height: 15vh;
        border: 1px solid white;
        color: white;
        font-family: 'PT Sans Caption', sans-serif;
        font-size: 18px;
      }
      #fanVascoText {
        margin-left: 3vw;
      }
      .footer {
        width: 100%;
        margin-top: 17vh;
        height: 10vh;
        background-color: white;
      }
      </style>
    </head>
    <body>
      <div class='menu'>
        <button class='btnDefault'>Rio de janeiro</button>
        <button class='btnDefault'>Futebol</button>
        <button class='btnDefault'>Clube</button>
        <button class='btnDefault'>Instagram</button>
        <button class='btnDefault'>Twitter</button>
      </div>
      <img src='img/iconVasco.jpg' id='imgOne' alt='Vasco da Gama' />
      <br /><br /><br />
      <center>
        <div class='divHino'>
        <div class='fanVasco'>
          <h7 id='fanVascoText'>
          <br />Carteira de identificação de torcedor do Vascão da massa<br />Nome: ".$name."
          <br />Email: ".$email."<br />Idade: ".$yearsOld."
          </h7>
        </div>
          <span class='textHino'>
            <br /><br />Hino do gigante da colina<br /><br /><br /><br />
            A Cruz de Malta é o meu pendão
            <br />
            Tu tens o nome do heroico português
            <br />
            Vasco da Gama, a tua fama assim se fez!
            <br />
            <br />
            Tua imensa torcida é bem feliz
            <br />
            Norte-Sul, Norte-Sul deste país
            <br />
            Tua estrela, na terra a brilhar
            <br />
            Ilumina o mar
            <br />
            <br />
            No atletismo, és um braço
            <br />
            No remo, és imortal
            <br />
            No futebol, és um traço
            <br />
            De união Brasil-Portugal
            <br />
            <br />
            No atletismo, és um braço
            <br />
            No remo, és imortal
            <br />
            No futebol, és um traço
            <br />
            De união Brasil-Portugal
            <br /><br />
            Vamos todos cantar de coração
            <br />
            A Cruz de Malta é o meu pendão!
            <br />
            Tu tens o nome do heroico português
            <br />
            Vasco da Gama, a tua fama assim se fez!
            <br /><br />
            Tua imensa torcida é bem feliz
            <br />
            Norte-Sul, Norte-Sul deste país
            <br />
            Tua estrela, na terra a brilhar
            <br />
            Ilumina o mar
            <br />
            <br />
            No atletismo, és um braço
            <br />
            No remo, és imortal
            <br />
            No futebol, és um traço
            <br />
            De união Brasil-Portugal
            <br /><br />
            No atletismo, és um braço
            <br />
            No remo, és imortal
            <br />
            No futebol, és um traço
            <br />
            De união Brasil-Portugal</span
          >
        </div>
      </center>
      <div class='footer'></div>
    </body>
  </html>
  ";
  }
?>