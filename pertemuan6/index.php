<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>

    <title>Document</title>
</head>
<body>
<main>
  <div class="container">
    <div class="text-center">
      <p id="title">Kalkulator Pertemuan 6</P>
    </div>
    <div class="text-center">
      <input id="inptAngka" class="text-right textBox" type="textBox" placeholder="" readonly>
      </input>
    </div>
    <div id="buttons">  
      <ul style="list-style-type:none">
        <li>
          <button id="clear" class="btn btn-default text-center" value="C">C</button>
          <button class="btn btn-default text-center" value="CE">CE</button>
          <button class="btn btn-default text-center" value="%">%</button>
          <button id="bagi" class="btn btn-default text-center" value="/">/</button>
        </li>
        <li>
          <button class="btn btn-default text-center" value="7">7</button>
          <button class="btn btn-default text-center" value="8">8</button>
          <button class="btn btn-default text-center" value="9">9</button>
          <button id="kali" class="btn btn-default text-center" value="*">x</button>
        </li>
        <li>
          <button class="btn btn-default text-center" value="4">4</button>
          <button class="btn btn-default text-center" value="5">5</button>
          <button class="btn btn-default text-center" value="6">6</button>
          <button id="kurang" class="btn btn-default text-center" value="-">-</button>
        </li>
        <li>
          <button class="btn btn-default text-center" value="1">1</button>
          <button class="btn btn-default text-center" value="2">2</button>
          <button class="btn btn-default text-center" value="3">3</button>
          <button id="tambah" class="btn btn-default text-center" value="+">+</button>
        </li>
        <li>
              <button id="kosong" class="btn btn-default text-center" value="0">0</button>          
              <button id="hasil" class="btn btn-default text-center" value="=">=</button>          
        </li>
      </ul>
    </div>
  </div>
</main>
</body>
</html>