<html>

<head>
  <title>Youtube playlist downloader</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<html>

</html>
<style>
  body {
    background-image: url('4.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
</style>

<body>
  <br>
  <div class="row col-md-12">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="card col-sm-8">
      <h5 class="card-body h6">

        <select name="country" id="country">

          <option value="1080">1080p</option>
          <option value="720">720p</option>
          <option value="480">480p</option>
          <option value="360" selected="">360p</option>
          <option value="240">240p</option>
          <option value="128">Mp3</option>

        </select>
        
        
        <!-- <p id="p1">Hello World!</p> -->

<!-- 
        function aayu() {

          <script> 
            document.getElementById("lodu").innerHTML = "New text!";
          </script>
    
      }; -->

      </h5>
      <div class="card-body">
        <center><span id="lodu">YouTube Video Downloader</span></center>
        <div class="md-form">
          <div class="col-md-12">
            <textarea type="text" style="text-align: center;" id="lista" maxlength="2800"
              class="md-textarea form-control" rows=""></textarea>
            <label for="lista">Paste Your Videos Link Here</label>
          </div>
        </div>
        <center>
          <button class="btn btn-primary" style="width: 200px; outline: none;" id="testar"
            onclick="enviar();lol();">START</button>

          <button class="btn btn-danger" style="width: 200px; outline: none;" id="hi"
            onclick="">Echo</button>

        </center>
      </div>

    </div>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="card col-sm-2">
      <h5 class="card-body h6">Informations:</h5>
      <div class="card-body">
        <span>Status:</span><span class="badge badge-secondary" id="p1"> Waiting.</span>
        <div class="md-form">
          <span>Success:</span>&nbsp&nbsp<span id="cLive" class="badge badge-success"> 0</span><br>
          <span>Fails:</span>&nbsp&nbsp&nbsp<span id="cDie" class="badge badge-danger"> 0</span><br>
          <span>Tested:</span>&nbsp&nbsp&nbsp<span id="total" class="badge badge-info"> 0</span><br>
          <span>Total:</span>&nbsp&nbsp<span id="carregadas" class="badge badge-dark">0</span><br>
        </div>
      </div>
    </div>
  </div>
  <br>

  <div class="col-md-12">
    <div class="card">
      <div style="position: absolute;
        top: 0;
        right: 0;">
        <button id="mostra" class="btn btn-primary">SHOW/HIDE</button>
      </div>
      <div class="card-body">
        <h6 style="font-weight: bold;" class="card-title">Downloads - <span id="cLive2"
            class="badge badge-success">0</span></h6>
        <div id="bode"><span id=".aprovadas" class="aprovadas"></span>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>
  <div class="col-md-12">
    <div class="card">
      <div style="position: absolute;
        top: 0;
        right: 0;">
        <button id="mostra2" class="btn btn-primary">SHOW/HIDE</button>
      </div>
      <div class="card-body">
        <h6 style="font-weight: bold;" class="card-title">Fails - <span id="cDie2" class="badge badge-danger">0</span>
        </h6>
        <div id="bode2"><span id=".reprovadas" class="reprovadas"></span>
        </div>
      </div>
    </div>
  </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
  <script type="text/javascript">

    $(document).ready(function () {


      $("#bode").hide();
      $("#esconde").show();

      $('#mostra').click(function () {
        $("#bode").slideToggle();
      });

    });


   function lol() {
    
        document.getElementById("p1").innerHTML = "Started!";
     
     
    };

  </script>

  <script type="text/javascript">

        $(document).ready(function () {


          $("#bode2").hide();
        $("#esconde2").show();

        $('#mostra2').click(function () {
          $("#bode2").slideToggle();
      });

    });


  </script>

  <script title="ajax do checker">


        // var e = document.getElementById("country");
        // var result = e.options[e.selectedIndex].value;
        //  //ID002
        let id = 1


        var multiplyTwo = function GetSelectedValue() {
      var e = document.getElementById("country");
        var resultx = e.options[e.selectedIndex].value;

        // document.getElementById("result").innerHTML = resultx;
        // alert(resultx);
        // var answer = multiplyTwo();
        return resultx;
     
    };
        // var answer = multiplyTwo();
        function enviar() {
      var linha = $("#lista").val();
        var linhaenviar = linha.split("\n");
        var total = linhaenviar.length;
        var ap = 0;
        var rp = 0;
        linhaenviar.forEach(function (value, index) {
          setTimeout(
            function () {
              $.ajax({
                url: 'api.php?lista=' + value + '|' + multiplyTwo(),
                type: 'GET',
                async: true,
                success: function (resultado) {
                  if (resultado.match("#Aprovada")) {
                    removelinha();
                    ap++;
                    aprovadas(resultado + "");
                  } else {
                    removelinha();
                    rp++;
                    reprovadas(resultado + "");
                  }
                  $('#carregadas').html(total);
                  var fila = parseInt(ap) + parseInt(rp);
                  $('#cLive').html(ap);
                  $('#cDie').html(rp);
                  $('#total').html(fila);
                  $('#cLive2').html(ap);
                  $('#cDie2').html(rp);
                }
              });
            }, 500 * index);
      });
    }
        function aprovadas(str) {
          $(".aprovadas").append(str + "<br>");
    }
        function reprovadas(str) {
          $(".reprovadas").append(str + "<br>");
    }
        function removelinha() {
      var lines = $("#lista").val().split('\n');
        lines.splice(0, 1);
        $("#lista").val(lines.join("\n"));
    }
  </script>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
</body>
<br>
<footer>


  <div class="footer-copyright text-center py-3">
    <a href="https://t.me/cyrax0p"> CLICK HERE TO CONTACT US</a>
  </div>


</footer>

</html>