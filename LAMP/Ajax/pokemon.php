<!doctype html>
<html lang= "en">
<head>
  <meta charset= "UTF 8">
  <title>Pokeman</title>
  <script src= "https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <style type="text/css">
    #container{
      width: 970px;
      margin: 0 auto;
    }
    #bulbasour{
      vertical-align: top;
      display: inline-block;
      width: 600px;
    }
    #pokedex{
      display: inline-block;
      vertical-align: top;
      width: 250px;
      height: 500px;
      border: 20px solid red;
    }
  </style>
  <script>
    $(document).ready(function(){

      var image_str = "";
      for (var i = 1; i <= 151; i++) 
      {
        image_str += '<img id=" ' + i + ' "src= "http://pokeapi.co/media/img/' + i + '.png">';
      }
        $("#bulbasour").html(image_str);
        $("img").click(function(){
          // $(this).append("#pokedex");
          $("#pokedex").append('<img id= src= "http://pokeapi.co/media/img/ .png">');
        // alert("Image Selected");
      });
    });
  </script>
</head>
<body>
  <div "container">
    <div id= "bulbasour">
      <h4>Famous Pokemon's here</h4>
    </div>
    <div id= "pokedex">
    </div>
  </div>
</body>
</html>
