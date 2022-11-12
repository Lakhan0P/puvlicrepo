<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }

    ul li {
      list-style-type: none;
      padding: 20px;
      margin: 10px;
    }

    img {
      margin-bottom: 10px;
      width: 450px;
    }

    h5 {
      position: absolute;
      display: inline;
      padding: 10px;
      font-size: 17px;
    }

    div {
      border: 2px solid black;
      padding: 10px 0px 0px 8px;
    }

    button {
      bottom: 71px;
      /* height: 32px; */
      width: 60%;
      padding: 10px;
      background: silver;
      border: none;
      border-radius: 10px;
      position: relative;
      margin: 10px;
    }
    }
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <?php

  $api_key = 'AIzaSyCZMaXIy8VsjqLjmSLGNPevax8_I2BSJgE';

  $playlist_id =  'PLu0W_9lII9agiCUZYRsvtGTXdxkzPyItg';

  $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=3&playlistId=PLu0W_9lII9agiCUZYRsvtGTXdxkzPyItg&key=AIzaSyCZMaXIy8VsjqLjmSLGNPevax8_I2BSJgE';

  $playlist = json_decode(file_get_contents($api_url));
  $hiii = file_get_contents($api_url);
  echo "<pre>";
  // var_dump($hiii);
  echo "</pre>";


  error_reporting(0);
  set_time_limit(0);
  error_reporting(0);
  date_default_timezone_set('America/Buenos_Aires');

  require 'function.php';

  error_reporting(0);
  date_default_timezone_set('Asia/Jakarta');

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
  } elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
  }
  function multiexplode($delimiters, $string)
  {
    $one = str_replace($delimiters, $delimiters[0], $string);
    $two = explode($delimiters[0], $one);
    return $two;
  }


  function GetStr($string, $start, $end)
  {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
  }
  function xcodeproxy()
  {
    $poxySocks = file("proxy.txt");
    $myproxy = rand(0, sizeof($poxySocks) - 1);
    $poxySocks = $poxySocks[$myproxy];
    return $poxySocks;
  }
  $poxySocks4 = xcodeproxy();


  $arr = array('1' => one);
  ?>

  <ul>
    <li>
      <div>
        <img src="thumb.png">
        <h5>Introduction to HTML, CSS, JavaScript &amp; How websites work? | Web Development Tutorials #1</h5>

        <button>Download</button>

      </div>
    </li>
    <li>
      <div>
        <img src="thumb.png">
        <h5>Introduction to HTML, CSS, JavaScript &amp; How websites work? | Web Development Tutorials #1</h5>
        <button>Download</button>
      </div>
    </li>
    <li>
      <div>
        <img src="thumb.png">
        <h5>Introduction to HTML, CSS, JavaScript &amp; How websites work? | Web Development Tutorials #1</h5>
        <button>Download</button>
      </div>
    </li>

  </ul>

</body>

</html>
<!--  -->