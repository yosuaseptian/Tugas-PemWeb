<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>
<body>
<style>
* {
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, Helvetica, sans-serif;
      height: 70vh;
      margin: 0px;
    }
    
    /* Style the header */
    header {
      background-color: gray;
      padding: 10px;
      /* text-align: center; */
      /* font-size: 35px;    */
      color: white;
      /* height: auto; */
    }
    
    /* Create two columns/boxes that floats next to each other */
    nav {
      float: left;
      width: 30%;
      height: 77vh;
      background: #ccc;
      padding: 30px;
    }
    
    /* Style the list inside the menu */
    nav ul {
      list-style-type: none;
      padding: 0;
    }
    
    article {
      float: left;
      padding: 20px;
      width: 70%;
      background-color: #f1f1f1;      
      height: 77vh;
    }
    
    /* Clear floats after the columns */
    section::after {
      content: "";
      display: table;
      clear: both;
    }

    /* Style the footer */
    footer {
      background-color: blue;
      padding: 27px;
      text-align: center;
      color: white;
      height: auto;

    }
    
    /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
    @media (max-width: 600px) {
      nav, article {
        width: 100%;
        height: auto;
      }
    }
    .menu{
      background-color: yellow;
    }

    </style>

<body>

<div class="container">
<header>
  <h2 style="padding: 10px;">Tugas Pertemuan 4</h2>
  <p style="padding: 10px;"> Tutorial belajar membuat layout website sederhana</p>
</header>
<div class="menu">
  <table>
    <tr>
        <td colspan="1" style="padding: 10px;"><a href="?p=Home">Menu</a></td>
        <td colspan="1" style="padding: 10px;"><a href="?p=Form Pendaftaran">Form</a></td>
        <td colspan="1" style="padding: 10px;"><a href="?p=CSS">CSS</a></td>
        <td colspan="1" style="padding: 10px;"><a href="?p=PHP">PHP</a></td>
        <td colspan="1" style="padding: 10px;"><a href="?p=JQuery">jQuery</a></td>
    </tr>
</table>
</div>
<section>

  <nav>
    <ul>
      <li><a href="https://www.w3schools.com/html/" target="_blank">Tutorial HTML dasar</a></li>
      <li><a href="https://www.w3schools.com/css/" target="_blank">Tutorial CSS dasar</a></li>
      <li><a href="https://www.w3schools.com/php/" target="_blank">Tutorial PHP dasar</a></li>
      <li><a href="https://www.w3schools.com/jquery/" target="_blank">Tutorial JQuery dasar</a></li>
    </ul>
  </nav>
  
  <article>
    
   <?php
                        if (empty($_GET['p'])){
                            $filename="Home";
                        } else {
                            $filename=$_GET['p'];
                        }
                        require $filename.".php";
                    ?>
  </article>

</section>

<footer>
  <p>Footer</p>
</footer>

</div>

</body>

</html>