var clear = false;
var result = "";
var calc = "";;

$(document).ready(function() {
  $("button").click(function(e) {
    //Cara untuk mengambil hasil yang di click.
    var text = $(this).attr("value");
    //Ambil Value dari Inputan yang di Click
    var inputAngka = $(".textBox").val();

    //Mengecek hasil value yang di click lalu disesuaikan dengan kondisinya.
    if (parseInt(text, 10) == text ||
                      text === "%" ||
                      text === "/" ||
                      text === "*" ||
                      text === "-" ||
                      text === "+" ){
    
     // Jika Kondisi misalnya kita isi 00 tidak bisa di input harus isi angka depan terlebih dahulu.                 
    if(        
        inputAngka.slice(0, 1) == '0'){
        $("#inptAngka").val("");
        alert("Tolong isi Angka Depannya");
        e.preventDefault();
      }                
      // Jika Kondisi hasil dari clear sama dengan kondisi maka menjalankan kondisi dibawah ini                   
      else if (clear === false) {
        calc += text;
        $(".textBox").val(calc);
      }    
      // Jika kondisi di atas tidak sesuai maka akan menjalankan Else (atau kondisi dibawah ini)
      else {
        calc = text;
        $(".textBox").val(calc);
        clear = false;
      }
    }

    switch (text) {
      //Clear inputan.
      case "C":
        calc = "";
        $(".textBox").val("");
        break;

      //Clear karakter terakhir yang di input.
      case "CE":
        calc = calc.slice(0, -1);
        $(".textBox").val(calc);
        break;

        //Kalkulasi lalu tampilkan resultnya.
      case "=":
        result = eval(calc);
        $(".textBox").val(result);
        clear = true;
        break;

    }
  });
});