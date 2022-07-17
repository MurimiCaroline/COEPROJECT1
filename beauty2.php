<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEAUTY 2</title>
    <link rel="stylesheet" href="css/index.css?t=<?php echo time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="beaut2">
    <h1>SPICE UP YOUR LOOKS</h1>
    <nav>
        <a class="index" href="index.html">Home Page</a>
     <div class="links" id="link">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li><a class = "active" href="beauty1.html">LUXURY</a></li>         
            <li><a href="beauty2.html">GLAMOUR</a></li>         
            <li><a href="beauty3.html">VICIOUS SPA</a></li>         
            <li><a href="beauty4.html">ANNEX SPA</a></li>               
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()" ></i>
   </nav> 
  
    
        <table class="myform">
            <h1>BEAUTY ONE LATEST PRICES</h1>
            <tr>
                <th>SERVICES</th>
                <th>PRICES</th>
            </tr>
            <tr>
                <td>MANICURE</td>
                <td>300</td>
                <td><input class="booking" type="button" id="success" value="Book Session" onclick="booked()"> </td>
                
            </tr>
            <tr>
                <td>GEL MANICURE</td>
                <td>300</td>
                <td><input class="booking" type="button" id="success" value="Book Session" onclick="booked()"> </td>
                
            </tr>
            <tr>
                <td>HALF MANICURE</td>
                <td>250</td>
                <td><input class="booking" type="button" id="success" value="Book Session" onclick="booked()"> </td>
                
            </tr>
            <tr>
                <td>PEDICURE</td>
                <td>800</td>
                <td><input class="booking" type="button" id="success" value="Book Session" onclick="booked()"> </td>
                
            </tr>
            <tr>
                <td>GEL PEDICURE</td>
                <td>1200</td>
                <td><input class="booking" type="button" id="success" value="Book Session" onclick="booked()"> </td>
                
            </tr>
            <tr>
                <td>HALF PEDICURE</td>
                <td>500</td>
                <td><input class="booking" type="button" id="success" value="Book Session" onclick="booked()"> </td>
               
            </tr>
            <tr>
                <td>FULL BODY MASSAGE</td>
                <td>800</td>
                <td><input class="booking" type="button" id="success" value="Book Session" onclick="booked()"> </td>
                
            </tr>
            <tr>
                <td>FULL FACIAL</td>
                <td>700</td>
                <td><input class="booking" type="button" id="success" value="Book Session" onclick="booked()"> </td>
               
            </tr>
            <tr>
                <td>KOREAN FACIAL</td>
                <td>3000</td>
                <td><input class="booking" type="button" id="success" value="Book Session" onclick="booked()"> </td>
                
            </tr>
            <tr>
                <td>FULL BRAZILIAN WAXING</td>
                <td>1300</td>
                <td><input class="booking" type="button" id="success" value="Book Session" onclick="booked()"> </td>
            </tr>
        </table>
    
   
   </div>
   <script>
    var link = document.getElementById("link");

     function showMenu(){
         link.style.right = "0";
     }
     function hideMenu(){
         link.style.right = "-200px";
     }
     var myForm = document.querySelector(".myform");
        function booked(){
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'BOOKING SUCCESSFUL',
            showConfirmButton: false,
            timer: 1500
            })
        }
        
</script>
</body>
</html>