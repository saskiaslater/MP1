<?
<!DOCTYPE html>
<html>

	<head>

		<!-- meta tags and title -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Input</title>

		<!-- external and on-page CSS goes here -->
		<link rel="stylesheet" href="styles.css" media="all">
		<style>
			/* on-page CSS, if any, goes here */
		</style>

		<!-- external and on-page JavaScript goes here -->
		<script type="text/javascript" src="scripts.js" defer></script>
		<script>
			// on-page JavaScript, if any, goes here
		</script>

	</head>

	<body>
  
 // if( ! playersRegistered()) {
 //     header("location: index.php");
//  }

// if ($_POST['cell']) {
  
//  if($win) {
  //  header("location: result.php?player=") .getTurn());
    
 // }
// }

//if(playCounts() >=9 {
 // header("location: result.php");
//}
   

   <form action="output.php" method="get" onsubmit="">
     
     <p>Top color: <input type ="color" name="topColor" id="topColor" value="#000099"></p>
     <p>Bottom Color: <input type="color" name="bottomColor" id="bottomColor" value="#A8B5ED";</p>
     
     <p>number of buildings: <select name="buildings" id="buildings">
       <option value="10">10</option>
       <option value="15">15</option>
       <option value="20">20</option>
     </select></p> 
       
       <p>Quote: <textarea name="quote" id="quote" rows="4"></textarea></p>
       
       <p>Quote Attribution: <input type="text" name="attribute" id="attribute" placeholder="Who said it?" required></p>
       
       <p><button type="submit">Make the skyline!</button></p>
       
    </form>
    
    
    
    
	</body>

</html>
   
 ?>