<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  
</head>
<body class="bgcolour">
    <link rel="stylesheet" href="css/style.css">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                <h1>Link ur Codes</h1>
                <table class="table">
                <tr>
                    <td>Name</td>
                    <td><input type="text" class="formcontrol" id="name"></td>
                </tr>
                <tr>
                    <td>Roll number</td>
                    <td><input type="text" class="formcontrol" id="roll"></td>
                </tr>
                <tr><td><button onclick="buttonclick()" class="btn btn-success">Submit</button>
                </td></tr>
            </table>
            </div>
        </div>
    </div>
    
    
    
   <script>
       function buttonclick()
       { 
           var getname=document.getElementById("name").value
           var getroll=document.getElementById("roll").value
           console.log(getname)
           console.log(getroll)
       }

   </script> 
    
</body>
</html>