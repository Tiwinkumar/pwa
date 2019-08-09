<?php

if(!isset($_COOKIE["coffee"])) {
    $coffee = 0;
} else {
    $coffee = $_COOKIE["coffee"];
}

if(!isset($_COOKIE["tea"])) {
    $tea = 0;
} else {
    $tea = $_COOKIE["tea"];
}

if(!isset($_COOKIE["milk"])) {
    $milk = 0;
} else {
    $milk = $_COOKIE["milk"];
}

if(!isset($_COOKIE["sweet1"])) {
    $sweet1 = 0;
} else {
    $sweet1 = $_COOKIE["sweet1"];
}

if(!isset($_COOKIE["sweet2"])) {
    $sweet2 = 0;
} else {
    $sweet2 = $_COOKIE["sweet2"];
}

if(!isset($_COOKIE["sweet3"])) {
    $sweet3 = 0;
} else {
    $sweet3 = $_COOKIE["sweet3"];
}

if(!isset($_COOKIE["snack1"])) {
    $snack1 = 0;
} else {
    $snack1 = $_COOKIE["snack1"];
}

if(!isset($_COOKIE["snack2"])) {
    $snack2 = 0;
} else {
    $snack2 = $_COOKIE["snack2"];
}

if(!isset($_COOKIE["snack3"])) {
    $snack3 = 0;
} else {
    $snack3 = $_COOKIE["snack3"];
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Madras Coffee House</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel='stylesheet' href='./style.css' type='text/css' media='all' />

  <script type="text/javascript">
    
function Functionc() {
  var x = document.getElementById("myinpc");
  var y = document.getElementById("myinc");
  var z = document.getElementById("footer");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}

function Functiont() {
  var a = document.getElementById("myinpt");
  var b = document.getElementById("myint");
  var c = document.getElementById("footer");
  if (a.style.display === "none") {
    a.style.display = "block";
    b.style.display = "none";
  } else {
    a.style.display = "none";
    b.style.display = "block";
  }  
}

function Functionm() {
  var p = document.getElementById("myinpm");
  var q = document.getElementById("myinm");
  var r = document.getElementById("footer");
  if (p.style.display === "none") {
    p.style.display = "block";
    q.style.display = "none";
  } else {
    p.style.display = "none";
    q.style.display = "block";
  }
}

function myFunction() {
  var coffee = parseInt(document.getElementById("coffee").value);
  var tea = parseInt(document.getElementById("tea").value);
  var milk = parseInt(document.getElementById("milk").value);
  var res = coffee + tea + milk;
  var result = res * 25;
  document.getElementById("cost").innerHTML = result;
  setCookie("coffee", coffee);
    setCookie("tea", tea);
    setCookie("milk", milk);
    return true;
}


function Functionsw1() {
  var x = document.getElementById("myinpsw1");
  var y = document.getElementById("myinsw1");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}

function Functionsw2() {
  var a = document.getElementById("myinpsw2");
  var b = document.getElementById("myinsw2");
  if (a.style.display === "none") {
    a.style.display = "block";
    b.style.display = "none";
  } else {
    a.style.display = "none";
    b.style.display = "block";
  }  
}

function Functionsw3() {
  var p = document.getElementById("myinpsw3");
  var q = document.getElementById("myinsw3");
  if (p.style.display === "none") {
    p.style.display = "block";
    q.style.display = "none";
  } else {
    p.style.display = "none";
    q.style.display = "block";
  }
}

function Functionsn1() {
  var x = document.getElementById("myinpsn1");
  var y = document.getElementById("myinsn1");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}

function Functionsn2() {
  var a = document.getElementById("myinpsn2");
  var b = document.getElementById("myinsn2");
  if (a.style.display === "none") {
    a.style.display = "block";
    b.style.display = "none";
  } else {
    a.style.display = "none";
    b.style.display = "block";
  }  
}

function Functionsn3() {
  var p = document.getElementById("myinpsn3");
  var q = document.getElementById("myinsn3");
  if (p.style.display === "none") {
    p.style.display = "block";
    q.style.display = "none";
  } else {
    p.style.display = "none";
    q.style.display = "block";
  }
}

function myFunctionsnack() {
  var sweet1 = parseInt(document.getElementById("sweet1").value);
  var sweet2 = parseInt(document.getElementById("sweet2").value);
  var sweet3 = parseInt(document.getElementById("sweet3").value);
  var snack1 = parseInt(document.getElementById("snack1").value);
  var snack2 = parseInt(document.getElementById("snack2").value);
  var snack3 = parseInt(document.getElementById("snack3").value);
  var res = sweet1 + sweet2 + sweet3 + snack1 + snack2 + snack3;
  var result = res * 25;
  document.getElementById("cost").innerHTML = result;
}





$('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });

   


  </script>



</head>



<body onload="myFunction()" >

<nav class="navbar navbar-default" style="background-color: #E31E24;">
  <div class="container-fluid">
    <div class="brand-centered">
      <a class="navbar-brand" href="#"><img style="margin-right: 10px; padding: 0;" src="./logo.png" alt="Madras Coffee House"></a>
    </div>

    <ul class="nav navbar-nav">
      <li><a href="./index.html"><i class="fa fa-arrow-left"></i></a></li>
    </ul>
  </div>
</nav>


<div class="wrapper center-block">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
          Main Menu
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <section class="menu">
  <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><img src="./coffee.jpg" height="40px" width="40px"></th>
      <td>Coffee</td>
      <td>&#8377; 25</td>
      <td id="myinpc"><input type="number" class="form-control" min="0" id="coffee" onchange="myFunction()" value="<?php $coffee ?>" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="./tea.jpg" height="40px" width="40px"></th>
      <td>Tea</td>
      <td>&#8377; 25</td>
      <td id="myinpt"><input type="number" class="form-control" min="0" id="tea" onchange="myFunction()" value="0" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="./milk.png" height="40px" width="40px"></th>
      <td>Milk</td>
      <td>&#8377; 25</td>
      <td id="myinpm"><input type="number" class="form-control" min="0" id="milk" onchange="myFunction()" value="0" name="qty"></td>
    </tr>
  </tbody>
</table>
</div>
</section>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Sweets
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <section class="menu">
  <div class="container">
  <table class="table">
  <tbody>
    <tr>
      <th scope="row"><img src="./blank.jpg" height="40px" width="40px"></th>
      <td>Sweet 1</td>
      <td>&#8377; 25</td>
      <td id="myinsw1"  onclick="Functionsw1()"><i  class="fa fa-plus"></i></td>
      <td id="myinpsw1" style="display: none;"><input type="number" class="form-control" min="0" id="sweet1" onchange="myFunctionsnack()" value="0" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="./blank.jpg" height="40px" width="40px"></th>
      <td>Sweet 2</td>
      <td>&#8377; 25</td>
      <td id="myinsw2"  onclick="Functionsw2()"><i  class="fa fa-plus"></i></td>
      <td id="myinpsw2" style="display: none;"><input type="number" class="form-control" min="0" id="sweet2" onchange="myFunctionsnack()" value="0" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="./blank.jpg" height="40px" width="40px"></th>
      <td>Sweet 3</td>
      <td>&#8377; 25</td>
      <td id="myinsw3"  onclick="Functionsw3()"><i  class="fa fa-plus"></i></td>
      <td id="myinpsw3" style="display: none;"><input type="number" class="form-control" min="0" id="sweet3" onchange="myFunctionsnack()" value="0" name="qty"></td>
    </tr>
  </tbody>
</table>
</div>
</section>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Snacks
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <section class="menu">
  <div class="container">
  <table class="table">
  <tbody>
    <tr>
      <th scope="row"><img src="./blank.jpg" height="40px" width="40px"></th>
      <td>Snack 1</td>
      <td>&#8377; 25</td>
      <td id="myinsn1"  onclick="Functionsn1()"><i  class="fa fa-plus"></i></td>
      <td id="myinpsn1" style="display: none;"><input type="number" class="form-control" min="0" id="snack1" onchange="myFunctionsnack()" value="0" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="./blank.jpg" height="40px" width="40px"></th>
      <td>Snack 2</td>
      <td>&#8377; 25</td>
      <td id="myinsn2"  onclick="Functionsn2()"><i  class="fa fa-plus"></i></td>
      <td id="myinpsn2" style="display: none;"><input type="number" class="form-control" min="0" id="snack2" onchange="myFunctionsnack()" value="0" name="qty"></td>
    </tr>
    <tr>
      <th scope="row"><img src="./blank.jpg" height="40px" width="40px"></th>
      <td>Snack 3</td>
      <td>&#8377; 25</td>
      <td id="myinsn3"  onclick="Functionsn3()"><i  class="fa fa-plus"></i></td>
      <td id="myinpsn3" style="display: none;"><input type="number" class="form-control" min="0" id="snack3" onchange="myFunctionsnack()" value="0" name="qty"></td>
    </tr>
  </tbody>
</table>
</div>
</section>
      </div>
    </div>
  </div>
</div>
</div>

<div id="footer" class="container footter">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <h3 style="color: black;">Main Menu</h3>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <h3 style="color: red;font-weight: 800;"> &#8377; <span id="cost">0</span>  </h3>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <h3><button class="btn btn-danger" type="submit">Order Now</button></h3>
    </div>
  </div>
</div>

</body>
</html>
