<?php include ("../assets/includes/headers.php");?>
<title>HTML5 Image Processor by John Calder</title>
<?php include ("../assets/includes/bootstrap.php");?>

<?php
	$font = $_GET["font"];
 	$size = $_GET["size"];
 	$fontcolor = $_GET["fontcolor"];
 	$fontstyle = $_GET["fontstyle"];
	$pagecolor = $_GET["pagecolor"];
 	$scale = $_GET["scale"];
	$pad = $_GET["pad"];
 	$right = $_GET["right"];
 	$centerP = $_GET["center"];
 	$left = $_GET["left"];
 	$vert = $_GET["vert"];
	$fontSize = $size; 
	$padding = $pad;
	$shim = $padding/2;
//	$filename="file_name";
	
//	if(!isset($_COOKIE[$filename])) {
 //  echo "Cookie named '" . $filename . "' is not set!";
//} else {
   // echo "Cookie '" . $filename . "' is set!<br>";
   //echo "Value is: " . $_COOKIE[$filename];
	// 	$file_name = $_COOKIE[$filename];

//}

	
	
	$defaultText ="http://www.johnstevencalder.com/apps/FileProcessor.php?left=Left+Text&amp;right=Right+Text&amp;center=Center+Text&amp;font=Helvetica&amp;size=20&amp;fontcolor=Black&amp;pagecolor=White&amp;pad=40&amp;vert=B&amp;fontstyle=None&amp;scale=300";
	
?>
</head>
<body class="textCenter">
<br>
<div class="container textCenter">
        <span class="h1 red ">HTML5 Image Processor<br>
       	<a href="http://www.johnstevencalder.com/apps/FileProcessor.php" target="_self">File</a> | <a href="http://www.johnstevencalder.com/apps/WebProcessor.php" target="_self">Web</a></span>
		<span class="h3 text-info" style="text-align: center"><br> 
          By John Steven Calder</span>          
          <br>For best results use Firefox Version 35+<br>
          <span class="license" style="text-align: center"><a href="mailto:jcalder@well.com?subject=JohnStevenCalder%20File%20Image%20Processor%20code%20contact">Source code available for free for Non-Commercial use</a></span>
        <br><hr class="style-eight"><br>
      <a href=
 <?php echo $defaultText
 ?>
  title="Processor_Demo" target="_top" class="hack">Click to Load Defaults</a>
<h5><br>
  <span> Copy Special Characters, Paste into Text Fields</span>:
  <br>&nbsp;&copy;&nbsp;&reg;&nbsp;&euro;
  <br>
  
  <br>
</h5>
<div class="container">
	<form class="form-horizontal" role="form" name="processor" id="processor" action="FileProcessor.php" method="GET">
	<fieldset class="formA">
   	<div class="form-group">
    <label class="control-label col-sm-2" for="imgfile">Select File:</label>
    <div class="col-sm-10">
    <input type='file' id='imgfile' accept="image/*" /> <!-- Add  capture="camera" to take cell photo automatically-->
    </div></div>          
    
     <div class="form-group">
	<label class="control-label col-sm-2" for="scale">Printer Resolution - DPI:</label>
    <div class="col-sm-10">
    <select name="scale" id="scale" class="form-control input-md" >
					<option value="<?php echo $_GET['scale']?>"><?php echo $scale ?></option> 
                    <option value="720">720</option>
                    <option value="300">300</option>
                    <option value="150">150</option>
                    <option value="96">96</option>
                    <option value="72">72</option>
    </select>
    </div></div> 
   
    <div class="form-group">
	<label class="control-label col-sm-2" for="left">Left Justified Text:</label>
     <div class="col-sm-10">
    <input id="left" name="left" type="text" value="<?php echo $_GET['left'] ?>" class="form-control input-md"  >
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="right">Right Justified Text:</label>
    <div class="col-sm-10">
    <input id="right" name="right" type="text" value="<?php echo $_GET['right'] ?>" class="form-control input-md">
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="center">Center Justified Text:</label>
    <div class="col-sm-10">
    <input id="center" name="center" type="text"  value="<?php echo $_GET['center'] ?>" class="form-control input-md">
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="font">Font:</label>
    <div class="col-sm-10">
    <select name="font" id="font" class="form-control input-md" >
					<option value="<?php echo $_GET['font']?>"><?php echo $font ?></option> 
                    <option value="Helvetica">Helvetica *</option>
                    <option value="Arial">Arial *</option>
					<option value="Times">Times *</option>
					<option value="Georgia">Georgia *</option>
					<option value="Courier">Courier *</option>
                    <option value="Courier New">Courier New *</option>
					<option value="Trebuchet MS">Trebuchet MS *</option>
					<option value="Times New Roman">Times New Roman *</option> 
					<option value="Times">Times *</option> 
                    <option value="Verdana">Verdana *</option>                    
					<option value="Avant Garde">Avant Garde</option>
                    <option value="Comic Sans MS">Comic Sans MS</option>
					<option value="Impact">Impact</option>
					<option value="Arial Black">Arial Black</option>
					<option value="Tahoma">Tahoma</option>
					<option value="Trebuchet MS">Trebuchet MS</option>
    </select>
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="size">Font Size:</label>
    <div class="col-sm-10">
    <input name="size" id="size" type="number" value="<?php echo $_GET['size'] ?>" class="form-control input-md" >
    </div></div>          
   	 <div class="form-group">
	<label class="control-label col-sm-2" for="fontstyle">Font Style:</label>
    <div class="col-sm-10">
    <select name="fontstyle" id="fontstyle" class="form-control input-md" >
  					<option value="<?php echo $_GET['fontstyle']?>"><?php echo $fontstyle ?></option> 
					<option value="Bold ">Bold</option>
					<option value="Italic ">Italic</option>
					<option value="Bold Italic ">Bold & Italic</option>
					<option value="None">Normal</option>
    </select>
    </div></div>          
    <div class="form-group">
	<label class="control-label col-sm-2" for="fontcolor">Font Color:</label>
    <div class="col-sm-10">
    <select name="fontcolor" id="fontcolor" class="form-control input-md" >
  					<option value="<?php echo $_GET['fontcolor']?>"><?php echo $fontcolor ?></option> 
					<option value="Black">Black</option>
					<option value="White">White</option>
					<option value="Red">Red</option>
		    		<option value="Orange">Orange</option>
		   			<option value="Pink">Pink</option>
		    		<option value="Blue">Blue</option>
					<option value="Red">Purple</option>
                    <option value="Olive">Olive</option>
                    <option value="Silver">Silver</option>
                    <option value="Grey">Grey</option>
                    <option value="DarkBlue">DarkBlue</option>
                    <option value="LightBlue">LightBlue</option>
                    <option value="LightBlue">LightBlue</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Magenta">Magenta</option>
                    <option value="Green">Green</option>
                    <option value="Lime">Lime</option>
                    <option value="Maroon">Maroon</option>
    </select>
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="pagecolor">Background Color:</label>
    <div class="col-sm-10">
	<select name="pagecolor" id="pagecolor" class="form-control input-md" >
  					<option value="<?php echo $_GET['pagecolor']?>"><?php echo $pagecolor ?></option> 
					<option value="White">White</option>
					<option value="Black">Black</option>
                    <option value="Red">Red</option>
		    		<option value="Orange">Orange</option>
		   			<option value="Pink">Pink</option>
		    		<option value="Blue">Blue</option>
					<option value="Red">Purple</option>
                    <option value="Olive">Olive</option>
                    <option value="Silver">Silver</option>
                    <option value="Grey">Grey</option>
                    <option value="DarkBlue">DarkBlue</option>
                    <option value="LightBlue">LightBlue</option>
                    <option value="LightBlue">LightBlue</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Magenta">Magenta</option>
                    <option value="Green">Green</option>
                    <option value="Lime">Lime</option>
                    <option value="Maroon">Maroon</option>
	</select>
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="pad">Border Size:</label>
    <div class="col-sm-10">
	<input id="pad" name="pad"  type="number" value="<?php echo $_GET['pad'] ?>" class="form-control input-md" >
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="vert">Vertical Placement:<br>
    T = Top B = Bottom<br>C = Center or Number</label>
    <div class="col-sm-10">
	<input id="vert" name="vert" type="text" value="<?php echo $_GET['vert'] ?>" class="form-control input-md" >
    </div></div>          
                <div>
 				<button class="Ghack" type="submit" formaction="FileProcessor.php">Update Form</button>&nbsp;&nbsp;
    			<input type='button' class="hack" id='load' value='Generate Image' onclick='loadImage();' />
                </div>
				<span> <br>
				<strong>Notes:</strong></span>
				<span> <br>
				- The border is not saved in the image. Used for spacing reference</span>
				<span> <br>- Vertical option "B" will center the text vertically by adding 1/2 Border value</span>
	 		 <span> <br><strong>*</strong>&nbsp;Indicates Mobile Safe Font</span>
                </fieldset>
				</form>
				</div><!-- Container  -->

<br>
 <canvas style="margin-left: auto; margin-right: auto; border: 1px solid grey; box-shadow: 10px 10px 5px #888888;" id="myCanvas" class="img-responsive"></canvas> 
</div>
<script>

function SetCookie(cookieName,cookieValue,nDays) {
 var today = new Date();
 var expire = new Date();
 if (nDays==null || nDays==0) nDays=1;
 expire.setTime(today.getTime() + 3600000*24*nDays);
 document.cookie = cookieName+"="+escape(cookieValue)
                 + ";expires="+expire.toGMTString();
}


  function loadImage() {
        var input, file, fr, img;


        if (typeof FileReader !== 'function') {
            write("The file API isn't supported on this browser yet.");
            return;
        }
        input = document.getElementById('imgfile');
		var z = input.value;
		SetCookie("file_name",z,1);
		
	//	alert (input.value)
		
		if (!input) {
            write("Um, couldn't find the imgfile element.");
        }
        else if (!input.files) {
            write("This browser doesn't seem to support the `files` property of file inputs.");
        }
        else if (!input.files[0]) {
            write("Please select a file before clicking 'Generate Image'");
        }
        else {
            file = input.files[0];
		    fr = new FileReader();
            fr.onload = process;
		    fr.readAsDataURL(file);
		}


function process(){
   
        img = new Image();
        img.onload = imageLoaded;
		img.src = fr.result;

function imageLoaded() {
   
   
   
   	var fontHeight = "<?php echo $fontSize; ?>";
   	var padding = "<?php echo $pad; ?>";
   	var vertical = "<?php echo $vert; ?>";
   	var contentL = "<?php echo $left; ?>";
   	var contentC = "<?php echo $centerP; ?>";
   	var contentR = "<?php echo $right; ?>";
   	var padding = "<?php echo $padding; ?>";
   	var wfont = "<?php echo $font; ?>";
   	var size = "<?php echo $size; ?>";
   	var pagecolor = "<?php echo $pagecolor; ?>";
   	var fcolor = "<?php echo $fontcolor; ?>";
   	var fstyle = "<?php echo $fontstyle; ?>";   
    var scale = "<?php echo $scale; ?>";
	var shim = "<?php echo $shim; ?>";
   	var image_width = img.width;
	var image_height = img.height;
   	var canvasWidth = parseInt(image_width) + parseInt(padding) + parseInt(padding);
	var canvasHeight = parseInt(image_height) + parseInt(padding) + parseInt(padding);
	 
		if (vertical == 'B'){
			vertical = (canvasHeight - shim  + parseInt(size));
			canvasHeight = parseInt(image_height) + parseInt(size) + parseInt(padding) + parseInt(padding);
		} else  if  ( vertical == 'T'){
			vertical = size;
		} else  if  ( vertical == 'C'){
			vertical = canvasHeight/2;
			}
	loadImageSize(image_height,image_width)
 	loadSize(canvasHeight,canvasWidth)
	
	var posR = parseInt(image_width) + parseInt(padding);
  	var posC = parseInt(image_width/2) + parseInt(padding);
   	var posL = parseInt(padding);
	var canvas = document.getElementById("myCanvas");
   		canvas.width = canvasWidth;
		canvas.height = canvasHeight;

   	var context = canvas.getContext("2d");
		context.rect( 0, 0, canvasWidth, canvasHeight);
		context.fillStyle= pagecolor;
		context.fill();	 
		context.drawImage(img, padding, padding, image_width, image_height);
			// set the font details
		if (fstyle == 'None'){ fstyle ='';};

			context.font = fstyle + fontHeight + "pt " + wfont ;
     		context.fillStyle = fcolor;
			// place the text
			context.textAlign = 'start';
			context.fillText(contentL, posL, vertical);
     		context.textAlign = 'center';
			context.fillText(contentC, posC, vertical);
      		context.textAlign = 'end';
			context.fillText(contentR, posR, vertical);
			
	 	};
	};
};
 
	document.write('<br><p id="imagesize"></p>');   	
	document.write('<p id="canvasize"></p>');   	
	document.write('<p id="printsize"></p>');   	
	
	function loadImageSize(image_height,image_width){
	document.getElementById('imagesize').innerHTML = '<h3>Source Image Height = ' + image_height + 'px <br>Source Image Width = ' + image_width + 'px</h3><br>';};
	
	function loadSize(h,w){
  	var res = "<?php echo $scale; ?>";
	document.getElementById('canvasize').innerHTML = '<h3>Output Image Height = ' + h + 'px <br>Output Image Width = ' + w + 'px</h3><br>';
	document.getElementById('printsize').innerHTML = '<h3>Printed Height = ' + ((h/res).toFixed(2)) + ' inches at ' + res +' DPI<br>Printed Width = ' + ((w/res).toFixed(2)) + ' inches at ' + res +' DPI</h3><br>'; };
	document.write('<h3>Right Click Image and "Save As" PNG <br>Left Click to Open Image in New Window as JPEG</h3>'); 
	document.write('<h4 red>For best results use Firefox Version 35+</h4><br>'); 

	document.write('<a id="link"></a>');   	
   	var contentC = "<?php echo $centerP; ?>";
	var link = document.createElement('a');
link.innerHTML = '<button class="hack">Download PNG Image</button>';
link.addEventListener('click', function(ev) {
    link.href = myCanvas.toDataURL();
    link.download = contentC + ".png";
}, false);
//document.body.appendChild(link);
document.getElementById("link").appendChild(link);

	
	document.getElementById("myCanvas").addEventListener("click", function(){
    var dataURL = myCanvas.toDataURL("image/jpeg");
	var Mywindow = window.open("", "contentC");
	Mywindow.document.write('<img src="'+dataURL+'" />');
});

</script>
<br><br>
<?php include ("../assets/includes/footer.php");?>
<br>
</body>
</html>