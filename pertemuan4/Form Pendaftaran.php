<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<style>
    form{
        text-align: center;
    }
    input[type=text], input[type=password], input[type=email]{
        /* width: 100%; */
        padding: 10px;
        display: inline-block;
    }
    button{
        background-color: blue;
        cursor: pointer;
        padding: 14px 20px;
        border:none;
        margin: 8px 0;
        color: white;
        opacity: 0.9    ;
    }
</style>
<!-- <form method="post" class="formSignUp" id="formSignUp" onsubmit="return btnSub()"> -->
<form >
    <div class="container">
    <h1>Form Pendaftaran</h1>    
    <hr>
    <label  for="inpName"><b>Nama</b></label>
    <br> 
    <input placeholder="Input Nama" type="text" name="inpName" id="inpName">
    <br>
    <label for="inpEmail"><b>Email</b></label>
    <br>
    <input placeholder="Input Email" type="email" name="inpEmail" id="inpEmail">
    <br>
    <label><b>Password</b></label>
    <br>
    <input placeholder="Input Password" type="password" name="inpPswd" id="inpPswd">
    <br>
    <div class="clearfix">        
        <button type="submit" class="signupBtn" id="sbmtBtn"> Submit</button>
    </div>
    </div>    
</form>

</body>

<script>

    $('#sbmtBtn').on('click',function(e){
        e.preventDefault();
        var inptName = $("#inpName").val();
        var inptEmail = $("#inpEmail").val();
        var inptPswd = $("#inpPswd").val();
        if(inptName != "" && inptEmail != "" && inptPswd != ""){
            alert("Anda Berhasil Mendaftar");
            window.open('http://localhost/pertemuan4/pertemuan4.php');
        }
        if(inptEmail == "" && inptName == "" && inptPswd == ""){
             alert("Tolong Isi Inputan semuanya")

        }
        else if(inptName == ""){
            alert("Tolong Input Nama Anda")
        }
        else if(inptEmail == ""){
            alert("Tolong Input Email Anda")
        }
        else if(inptPswd == ""){
            alert("Tolong Input Password Anda")
        }
    })

</script>

</html>