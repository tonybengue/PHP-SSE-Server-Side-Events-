<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SSE in PhP</title>
  <style>
    * { box-sizing: border-box; }

    body {
      margin: 0; 
      display: flex;
      flex-flow: column wrap;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      height: 100vh;
    }

    #serverData {
      width: 100px;
      height: 100px;
    }
  </style>
</head>
<body>
  <div id="serverData"></div>
  <script>
    const source = new EventSource('sse.php');

    source.onmessage = function(event) {
      document.getElementById("serverData").innerHTML = event.data;
    }; 
  </script>
</body>
</html>
