<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan Kelima</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

    <style>
        @media screen and (min-width: 1440px) {
  .container {
    margin: 1em 2em;
  }
}
    form{
        text-align: center;
        /* margin-left: 1120px; */
        display: inline-block;   
        /* height: 10vh;      */
        /* padding: array_multisort; */
        margin-inline: 1000px;
    }
    table, #tr1, #tr2, #tr3, #tr4, #tr5{
        border: 1px solid black;
        border-radius: 10px;
        /* height: 10vh; */
    }
    input[type=text], input[type=password], input[type=email]{
        /* width: 100%; */
        padding: 10px;
        display: inline-block;
        background-color: grey;
        color: white;
    }
    button{
        background-color: blue;
        cursor: pointer;
        padding: 14px 20px;
        border:none;
        margin: 8px 0;
        color: white;
        opacity: 0.9 ;
    }    
    select{
        background-color: navy;
        color: white;
    }
    #myForm{
        background-color: yellow;
    }   
    </style>

 <div class="container"> 
 
 <!-- <form method="post" action="Calculators.PHP"> -->
 <form id="myForm">
 <header>
     <h1 style="text-align: center;"> Calculator</h1>
 </header>
     <table>
         <tr id="tr1">
            <td id="tr1"><label for="number1"> Angka Satu</label> </td>
            <td id="tr1">
            <input id="number1" name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
            </td>
         </tr>
         <tr id="tr2" style="margin-left: 10px;">
             <td id="tr2" align="center">
             <select id="operasi1" name="operation1" style="padding: 1px; width: 50px; height: 30px;">
             <option value="tambah">+</option>
             <option value="kurang">-</option>
             <option value="dikali">*</option>
             <option value="dibagi">/</option>
             </select>
             </td>
         </tr>
         <tr id="tr3">
            <td id="tr3"><label for="number2">Angka Dua</label></td>
            <td id="tr3">
            <input id="number2"  name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
            </td>
         </tr>
         <tr id="tr4">
             <td id="tr4">
             <select id="operasi2" name="operation2" style="padding: 1px; width: 50px; height: 30px;">
             <option value="tambah">+</option>
             <option value="kurang">-</option>
             <option value="dikali">*</option>
             <option value="dibagi">/</option>
            </select>
             </td>        
         </tr>
         <tr id="tr5">
            <td id="tr5"> <label for="number3"> Angka Ketiga</label></td>
            <td id="tr5">
            <input id="number3" name="number3" type="text" class="form-control" style="width: 150px; display: inline" />
            </td>
         </tr>
         <tr style="margin: 0px;">
            <td>
                <button type="submit" id="btnClear" style="background-color: green;"> Clear</button>
            </td>
             <td>
             <button type="submit" id="sbmtBtn" style="background-color: blue;"> Submit</button>
             </td>
         </tr>
         <tr>
             <td>Hasilnya Operasi Pertama <label id="hasilTotal"></label> </td>             
         </tr>
         <tr>
             <td>Hasilnya dari dua Operasi <label id="totalOperasi"></label> </td>             
         </tr>
     </table>
       </form>

 </div>

 <script>

     $('#btnClear').on('click', function (){
        $('#myForm').reset()
     })

     $('#sbmtBtn').on('click', function(e){
        e.preventDefault();
         var number1 = $("#number1").val();
         var number2 = $("#number2").val();
         var number3 = $("#number3").val();

         var operasi1 = $('#operasi1').val();
         var operasi2 = $('#operasi2').val();
         var total;
         var totals = $('#hasilTotal').val();
         var totalSemua;

         if( number1 != '' && number2 != '' ){
            //Print Total operasi Tambah
            if(operasi1 == 'tambah'){       
               total = parseInt(number1) + parseInt(number2);
               $('#hasilTotal').val(total);
               $('#hasilTotal').text(total);          

               if(number1 !='' && number2 != ''  && number3 != ''){
                if(operasi2 == 'tambah'){
                    totals = total;
                    totalSemua = parseInt(total) + parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'kurang'){
                    totals = total;
                    totalSemua = parseInt(total) - parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dikali'){
                    totals = total;
                    totalSemua = parseInt(total) * parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dibagi'){
                    totals = total;
                    totalSemua = parseInt(total) / parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                } 
            }

            else if(operasi1 == 'kurang'){
               total = parseInt(number1) - parseInt(number2);
               $('#hasilTotal').text(total);
               if(number1 !='' && number2 != ''  && number3 != ''){
                if(operasi2 == 'tambah'){
                    totals = total;
                    totalSemua = parseInt(total) + parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'kurang'){
                    totals = total;
                    totalSemua = parseInt(total) - parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dikali'){
                    totals = total;
                    totalSemua = parseInt(total) * parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dibagi'){
                    totals = total;
                    totalSemua = parseInt(total) / parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                }
               
            }

            else if(operasi1 == 'dikali'){
               total = parseInt(number1) * parseInt(number2);
               $('#hasilTotal').text(total);
               if(number1 !='' && number2 != ''  && number3 != ''){
                if(operasi2 == 'tambah'){
                    totals = total;
                    totalSemua = parseInt(total) + parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'kurang'){
                    totals = total;
                    totalSemua = parseInt(total) - parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dikali'){
                    totals = total;
                    totalSemua = parseInt(total) * parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dibagi'){
                    totals = total;
                    totalSemua = parseInt(total) / parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                }
               
            }
            else if(operasi1 == 'dibagi'){
               total = parseInt(number1) / parseInt(number2);
               $('#hasilTotal').text(total);
               if(number1 !='' && number2 != ''  && number3 != ''){
                if(operasi2 == 'tambah'){
                    totals = total;
                    totalSemua = parseInt(total) + parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'kurang'){
                    totals = total;
                    totalSemua = parseInt(total) - parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dikali'){
                    totals = total;
                    totalSemua = parseInt(total) * parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dibagi'){
                    totals = total;
                    totalSemua = parseInt(total) / parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                }
               
            }

         };

        if(number1 == '' && number2 == '' && number3 == ''){
            alert("Tolong Isi Inputan Angkanya")
        }

        if(number1 == ''){
            alert("Tolong isi Angka satu")
        }
        if(number2 == ''){
            alert("Tolong isi Angka Dua")
        }
        if(number3 == ''){
            alert("Tolong isi Angka Tiga")
        }

        if(number1 != '' && number2 != '' && number3 != '' ){
            if(operasi1 == 'tambah'){       
               total = parseInt(number1) + parseInt(number2);
               $('#hasilTotal').val(total);
               $('#hasilTotal').text(total);          

               if(number1 !='' && number2 != ''  && number3 != ''){
                if(operasi2 == 'tambah'){
                    totals = total;
                    totalSemua = parseInt(total) + parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'kurang'){
                    totals = total;
                    totalSemua = parseInt(total) - parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dikali'){
                    totals = total;
                    totalSemua = parseInt(total) * parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dibagi'){
                    totals = total;
                    totalSemua = parseInt(total) / parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                } 
            }

            else if(operasi1 == 'kurang'){
               total = parseInt(number1) - parseInt(number2);
               $('#hasilTotal').text(total);
               if(number1 !='' && number2 != ''  && number3 != ''){
                if(operasi2 == 'tambah'){
                    totals = total;
                    totalSemua = parseInt(total) + parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'kurang'){
                    totals = total;
                    totalSemua = parseInt(total) - parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dikali'){
                    totals = total;
                    totalSemua = parseInt(total) * parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dibagi'){
                    totals = total;
                    totalSemua = parseInt(total) / parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                }               
            }

            else if(operasi1 == 'dikali'){
               total = parseInt(number1) * parseInt(number2);
               $('#hasilTotal').text(total);
               if(number1 !='' && number2 != ''  && number3 != ''){
                if(operasi2 == 'tambah'){
                    totals = total;
                    totalSemua = parseInt(total) + parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'kurang'){
                    totals = total;
                    totalSemua = parseInt(total) - parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dikali'){
                    totals = total;
                    totalSemua = parseInt(total) * parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dibagi'){
                    totals = total;
                    totalSemua = parseInt(total) / parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                }
               
            }
            else if(operasi1 == 'dibagi'){
               total = parseInt(number1) / parseInt(number2);
               $('#hasilTotal').text(total);
               if(number1 !='' && number2 != ''  && number3 != ''){
                if(operasi2 == 'tambah'){
                    totals = total;
                    totalSemua = parseInt(total) + parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'kurang'){
                    totals = total;
                    totalSemua = parseInt(total) - parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dikali'){
                    totals = total;
                    totalSemua = parseInt(total) * parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                else if(operasi2 == 'dibagi'){
                    totals = total;
                    totalSemua = parseInt(total) / parseInt(number3);
                    $('#totalOperasi').text(totalSemua);
                }
                }
               
            }
        }

     });

 </script>

</div>
</body>
</html>