<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="robots" content="index, follow">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css?8084">
	<link rel="stylesheet" type="text/css" href="style.css?3139">
	
    <title>Home</title>


    
<!-- Analytics -->
 
<!-- Analytics END -->
    
</head>
<body>

<!-- Preloader -->
<div id="page-loading-blocs-notifaction" class="page-preloader"></div>
<!-- Preloader END -->


<!-- Main container -->
<div class="page-container">
    
<!-- bloc-0 -->
<div class="bloc l-bloc nomargintop full-width-bloc" id="bloc-0">
	<div class="container bloc-lg bloc-no-padding-md">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<h3 class="mg-clear">
							Delar
						</h3>
					</div>
					<div class="card-body">
						<div class=" nomargintop">
							<form method="post" id="form_35999">  
Storlek på behållare:  
<input type="number" name="number1" id="undefined_35999"><br><br>  
Blandningsförhållande:  
<input type="number" name="number2" id="undefined_35999"><br><br>  
<input type="submit" name="submit" value="Add" id="undefined_35999">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $Dkonc =  $number2*0.01*$number1;
		$Dvatt =  $number1-$Dkonc;

    
echo "Börja med att fyll först på ".$Dvatt; echo"ml vatten i behållaren och häll sedan i ".$Dkonc; echo"ml koncentrat.";
}  
?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bloc-0 END -->

<!-- bloc-1 -->
<div class="bloc l-bloc nomargintop full-width-bloc" id="bloc-1">
	<div class="container bloc-lg bloc-no-padding-md">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<h3 class="mg-clear">
							Procent<br>
						</h3>
					</div>
					<div class="card-body">
						<div class=" nomargintop ">
							<form method="post" id="form_35999">  
Storlek på behållare:  
<input type="number" name="number1" id="undefined_35999"><br><br>  
Blandningsförhållande:  
<input type="number" name="number2" id="undefined_35999"><br><br>  
<input type="submit" name="submit" value="Add" id="undefined_35999">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $Dkonc =  $number2*0.01*$number1;
		$Dvatt =  $number1-$Dkonc;

    
echo "Börja med att fyll först på ".$Dvatt; echo"ml vatten i behållaren och häll sedan i ".$Dkonc; echo"ml koncentrat.";
}  
?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bloc-1 END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1',this)"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32"><path class="scroll-to-top-btn-icon" d="M30,22.656l-14-13-14,13"/></svg></a>
<!-- ScrollToTop Button END-->


</div>
<!-- Main container END -->
    


<!-- Additional JS -->
<script src="./js/bootstrap.bundle.min.js?6767"></script>
<script src="./js/blocs.min.js?9729"></script>
<script src="./js/lazysizes.min.js" defer></script><!-- Additional JS END -->


</body>
</html>
