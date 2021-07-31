<!DOCTYPE html>
<html>

<body>

  <div id="demo">
    <h2>The XMLHttpRequest Object</h2>
    <button type="button" onclick="loadDoc()">Change Content</button>
  </div>

  <script>
    function loadDoc() {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("demo").innerHTML =
          this.responseText;
      }
      xhttp.open("GET", "./ajax.php");
      xhttp.send();
    }
  </script>

</body>

</html>