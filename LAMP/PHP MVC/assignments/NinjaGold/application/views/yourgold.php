<html>
<head>
	<title>Ninja Gold</title>
	<style type="text/css">
  #container{
    width: 960px;
    margin: 0 auto;
    padding: 0;
  }
		#your_gold{
			width: 200px;
			}
		.ninja_places{
			width: 220px;
			height: 220px;
			text-align: center;
			border: 1px solid black;
			display: inline-block;
			vertical-align: top;
			margin-right: 20px;
      margin-top: 50px;
    }
    .ninja_places_four{
      width: 220px;
      height: 220px;
      text-align: center;
      border: 1px solid black;
      display: inline-block;
      vertical-align: top;
      margin-top: 50px;
      }
		.ninja_places h2, p, .ninja_places_four h2, p{
			margin-top: 30px;
		}
		.ninja_places p, .ninja_places_four p{
			font-size: 25px;
		}
		.ninja_places h2, .ninja_places_four h2{
			font-size: 36px;
    }
    #reset{
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div id= "container">
    <h1>Your Gold:</h1>
    <fieldset id= "your_gold"><?= $this->session->userdata('gold_pieces') ?></fieldset>
    <div id= "reset">
      <form action= "ninja/reset" method= "post">
        <input type= "hidden" name= "reset" value= "reset">
        <input type= "submit" value= "Reset">
      </form>
    </div>
    <div class="ninja_places">
      <h2>Farm</h2>
      <p>(earns 10-20 gold pieces)</p>
      <form action= "ninja/process_money" method= "post">
        <input type= "hidden" name= "building" value= "farm">
        <input type= "submit" value= "Find Gold!">
      </form>
    </div><!-- 
     --><div class="ninja_places">
      <h2>Cave</h2>
      <p>(earns 5-10 gold pieces)</p>
      <form action= "ninja/process_money" method= "post">
        <input type= "hidden" name= "building" value= "cave">
        <input type= "submit" value= "Find Gold!">
      </form>
    </div><!-- 
     --><div class="ninja_places">
      <h2>House</h2>
      <p>(earns 2-5 gold pieces)</p>
      <form action= "ninja/process_money" method= "post">
        <input type= "hidden" name= "building" value= "house">
        <input type= "submit" value= "Find Gold!">
      </form>
    </div><!-- 
     --><div class="ninja_places_four">
      <h2>Casino</h2>
      <p>(earns/takes 0-50 gold pieces)</p>
      <form action= "ninja/process_money" method= "post">
        <input type= "hidden" name= "building" value= "casino">
        <input type= "submit" value= "Find Gold!">
      </form>
    </div>
    <div id= "activies">
      <h1>Activities:</h1>
      <fieldset id= "activities">
          <?php
            if($this->session->userdata('total_gold'))
            {
              foreach($this->session->userdata('total_gold') as $total_gold){
                if(strpos($total_gold, 'Ouch'))
                  echo $total_gold;
                else
                  echo $total_gold;
                ?><br><?php
              }
            }
            ?>
      </fieldset>
    </div>
	</div><!--end of container-->
</body>
</html>




