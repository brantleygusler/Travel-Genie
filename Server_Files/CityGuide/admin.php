<?


@session_start();

$usernameold = $_SESSION['username'];


?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CityGuide - Admin</title>
<style type="text/css">
body {
background-image: url(assets/bg.png);
margin-left: 0px;
margin-top: 0px;
margin-right: 0px;
margin-bottom: 0px;
font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
font-size:13px;
}
body,td,th {
font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
font-style: normal;
font-weight: 13px;
}
</style>
</head>

<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="176" align="center" valign="middle"><a href="admin.php"><img src="assets/logo.png" width="152" height="152"  alt=""/></a></td>
  </tr>
</table>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="270" align="center" valign="top">
    
    
    <?
    
    
    $login = $_REQUEST['login'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $page = $_REQUEST['page'];
    $gelen = $_REQUEST['gelen'];
    







if($username=="admin" && $password=="password"){


    
 $_SESSION['username'] = "Admin";


}



if($usernameold==""){



}else{

$ok="1";

}
    
    if($ok=="1"){
    
    
?>
    <table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="35" align="center" valign="middle" bgcolor="#FEF1F0"><span style="color: #000"><strong><a href="admin.php?page=addstore" style="color: #000">Add Store</a></strong></span> | <strong><a href="admin.php?page=removestore" style="color: #000">Remove Store</a></strong></td>
      </tr>
    </table>
    <table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="26">&nbsp;</td>
      </tr>
    </table>
    <table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="26">&nbsp;</td>
      </tr>
    </table>
<?

 if($ok=="1" && $page=="addstore"){
    
 		
		
		if($gelen=="addstore"){
			
			
					
		$title = $_REQUEST['title'];
		$description = $_REQUEST['description'];
		$mail = $_REQUEST['mail'];
		$price = $_REQUEST['price'];
		$rate = $_REQUEST['rate'];
		$long = $_REQUEST['long'];
		$lat = $_REQUEST['lat'];
		$phone = $_REQUEST['phone'];
		$urlm = $_REQUEST['urlm'];


			
			
	 $userfile_size = $_FILES['image']['size']; 
     $gos = $_FILES['image']['type'];
	  
	  
	  
	  if($title=="" || $description=="" || $rate=="" || $gos=="" || $long=="" || $lat=="" ){
			
			
			
			?>
<table width="748" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25">&nbsp;</td>
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
        </tr>
        <tr>
          <td height="25" align="center" valign="middle" bgcolor="#ED333C"><span style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color: #FFF;">ERROR !</span></td>
        </tr>
        <tr>
          <td height="75" align="center" valign="middle" bgcolor="#FFFFFF">Please fill form with correct values !</td>
        </tr>
        <tr>
                <td height="35" align="center" valign="middle" bgcolor="#FFFFFF"><strong style="color: #000"><a href="javascript:history.go(-1)" style="color: #000"> ( Go Back )</a></strong></td>
        </tr>
      </table>
<table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="23">&nbsp;</td>
  </tr>
</table>
<?
			
			
	  }else{
			
			
		$title = $_REQUEST['title'];
		$description = $_REQUEST['description'];
		$mail = $_REQUEST['mail'];
		$price = $_REQUEST['price'];
		$rate = $_REQUEST['rate'];
		$long = $_REQUEST['long'];
		$lat = $_REQUEST['lat'];
		$phone = $_REQUEST['phone'];
		$urlm = $_REQUEST['urlm'];


			
			
	 $userfile_size = $_FILES['image']['size']; 
     $gos = $_FILES['image']['type'];
	  
	  
	  
	  
	 if ($gos!="")
	  
	 { 
		  
	
       $rand=rand(10,9000000);


       $size = 500; // the thumbnail height 
       $thumbdir = 'Stores/'; // the directory for the thumbnail image 
       $prefix=$rand; // the prefix to be added to the original name 

       $mode = '0666'; 
	   
	
	   $userfile_name = $_FILES['image']['name']; 
       $userfile_tmp = $_FILES['image']['tmp_name']; 
       $userfile_size = $_FILES['image']['size']; 
       $userfile_type = $_FILES['image']['type']; 
	   
	   
	    $userfile_name="$rand.jpg";
		
	   $dosya=$rand;
		
	  $dosyayaz="$dosya.jpg";
		 
		  
		  
		  
       if (isset($_FILES['image']['name']))  
      { 
           $prod_img_thumb = $thumbdir.$userfile_name; 
           move_uploaded_file($userfile_tmp, $prod_img_thumb ); 
           @chmod ($prod_img_thumb , octdec($mode)); 
           $sizes = @getimagesize($prod_img_thumb ); 
           @imagedestroy($destimg); 
		 
		 
		  $dosyayaz="$dosya.jpg"; 
      } 
	  
	  
	  }else{
	  
	     $dosya="";
		 $dosyayaz="";
	  
	  
	  }
	  
	  
	  
	  include("connect.php");
	  
	  
	  
	  $type = $_REQUEST['type'];
	  
	 $title =  preg_replace("/[^A-Za-z0-9 ]/", '', $title);
	 $description =  preg_replace("/[^A-Za-z0-9 ]/", '', $description);
	  
	  
$logkayits = @mysql_query("INSERT INTO CityGuide VALUES ('$id', '$title', '$description', '$long', '$lat','$dosyayaz', '$rate', '$phone', '$mail', '$urlm', '$type')");  

	?>
<table width="748" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="#33CC66"><span style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color: #FFF;">SUCCESS !</span></td>
  </tr>
  <tr>
    <td height="75" align="center" valign="middle" bgcolor="#FFFFFF">Store Added !</td>
  </tr>
  <tr>
    <td height="35" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<?  
	  }
    
   ?>
   
   
   
   
   
   
   
   
   
   <?
   
		}else{
			?>
    

    <form action="admin.php" method="post" name="login" enctype="multipart/form-data">
      <table width="200" border="1" cellspacing="0" cellpadding="0" bordercolor="#ED333C">
        <tr>
          <td><table width="748" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="36" colspan="3" align="center" valign="middle" bgcolor="#ED333C" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color: #FFF;">ADD STORE</td>
            </tr>
            <tr>
              <td height="26" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
            </tr>
            <tr>
              <td height="44" align="left" valign="middle" bgcolor="#F9F9F9" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#F9F9F9" >*Store Name : </td>
              <td align="left" valign="middle" bgcolor="#F9F9F9" ><input type="text" name="title" id="title"></td>
            </tr>
            <tr>
              <td height="110" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" >*Store Address :</td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" ><textarea name="description" cols="30" rows="5" id="description"></textarea></td>
            </tr>
            <input type="hidden" name="login3" value="1">
            <tr>
              <td height="44" align="left" valign="middle" bgcolor="#F9F9F9" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#F9F9F9" >Contact E-mail : </td>
              <td align="left" valign="middle" bgcolor="#F9F9F9" ><input type="text" name="mail" id="mail">
                Ex: info@magicworkers.com</td>
            </tr>
            <tr>
              <td height="25" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td align="left" valign="top" bgcolor="#FFFFFF" >Be careful write true e-mail address<strong> important!</strong></td>
            </tr>
            <tr>
              <td height="44" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" >Web Site : </td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" ><input type="text" name="urlm" id="urlm">
                Ex: http://www.magicworkers.com</td>
            </tr>
            <tr>
              <td height="44" align="left" valign="middle" bgcolor="#F9F9F9" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#F9F9F9" >Contact Phone: </td>
              <td align="left" valign="middle" bgcolor="#F9F9F9" ><input type="text" name="phone" id="phone">
                Ex: +1 111 22 3344</td>
            </tr>
            <tr>
              <td height="44" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" >*Latitude  : </td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" ><h4>
                <input type="text" name="long" id="long">
                Ex: 51.38131</h4></td>
            </tr>
            <tr>
              <td height="44" align="left" valign="middle" bgcolor="#F9F9F9" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#F9F9F9" >*Longitude :</td>
              <td align="left" valign="middle" bgcolor="#F9F9F9" ><h4>
                <input type="text" name="lat" id="username4">
                Ex: -2.35959</h4></td>
            </tr>
            <tr>
              <td height="44" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" >Store Type : </td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" ><h4>
                <select name="type" id="rate4">
                  <option value="1" selected>Stores</option>
                  <option value="2">Banks</option>
                  <option value="3">Atm</option>
                  <option value="4">Restourants</option>
                  <option value="5">Premium</option>
                  <option value="6">Pharmacy</option>
                  <option value="7">Emergency</option>
                  <option value="8">Cafe &amp; Bar</option>
                  <option value="9">Others</option>
                </select>
              </h4></td>
            </tr>
            <tr>
              <td height="44" align="left" valign="middle" bgcolor="#F9F9F9" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#F9F9F9" >Rate : </td>
              <td align="left" valign="middle" bgcolor="#F9F9F9" ><h4>
                <select name="rate" id="rate">
                  <option value="1">1 Star</option>
                  <option value="2">2 Star</option>
                  <option value="3">3 Star</option>
                  <option value="4" selected>4 Star</option>
                  <option value="5">5 Star</option>
                </select>
              </h4></td>
            </tr>
            <tr>
              <td height="45" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" >*Image : </td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" ><span class="style3">
                <input name="image" type="file" id="image" />
              </span></td>
            </tr>
            <tr>
              <td height="45" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td align="left" valign="top" bgcolor="#FFFFFF" ><strong>500x323 pixel  jpg file important !</strong></td>
            </tr>
            <input type="hidden" name="page" value="addstore">
            <tr>
              <input type="hidden" name="gelen" value="addstore">
              <td width="128" height="45" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td width="168" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
              <td width="452" align="left" valign="middle" bgcolor="#FFFFFF" ><input type="submit" name="Submit2" id="Submit2" value="Add Store"></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="200" border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td height="155">&nbsp;</td>
      </tr>
  </table>
    
    
    
    </form>
    
    
    
    <?
	
		}

?>

    <?

}else if($ok=="1" && $page=="removestore"){
    
   ?>
    
<table width="748" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="36" align="center" valign="middle" bgcolor="#000000" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color: #FFF;">REMOVE STORE</td>
  </tr>
  <tr>
    <td height="139" align="center" valign="middle" bgcolor="#FFFFFF" ><table width="200" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="33">&nbsp;</td>
      </tr>
    </table>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
      <table width="715" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="119" height="30" bgcolor="#F7F7F7">ID</td>
        <td width="132" bgcolor="#F7F7F7">IMAGE</td>
        <td width="402" bgcolor="#F7F7F7">NAME</td>
        <td width="62" bgcolor="#F7F7F7">ACTION</td>
      </tr>
      <tr>
        <td height="125" colspan="4" align="center" valign="top"><table width="200" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="33">&nbsp;</td>
          </tr>
        </table>
          <table width="721" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="721" height="157" align="center" valign="middle" bgcolor="#F7F7F7">
              
              
              
              <?
			  
			  
		
			  
			  $gelenid = $_REQUEST['id'];
			  
			  if($ok=="1" && $gelenid!=""){
				  
					  include("connect.php");  
				         
           $sorguxads = "Select * from CityGuide Where id='$gelenid'";  
			$sonucxads =  @mysql_query($sorguxads) or die("Sorgulama yapIlamadI b");  
			
		
				
			while ($row = mysql_fetch_object($sonucxads))  
			{  
	  
			$imagesil = $row->image;   
			
              
				  
				  
				  
				$delete = @mysql_query("DELETE FROM CityGuide WHERE id='$gelenid'");  
		
			  
				  

@chmod('Stores/'.$imagesil.'', 01777);
@unlink('Stores/'.$imagesil.'');


				  
				  ?>
              <table width="748" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="25" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="center" valign="middle" bgcolor="#33CC66"><span style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; color: #FFF;">SUCCESS !</span></td>
                </tr>
                <tr>
                  <td height="75" align="center" valign="middle" bgcolor="#FFFFFF">Store Deleted !</td>
                </tr>
                <tr>
                  <td height="35" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
              </table>
              <?
			  
			  
			}
				  
			  }else{
				  
				  
				  
				  
			  
				  
				  
				  
				  
				  
			  include("connect.php");
              
           $sorguxads = "Select * from CityGuide order by id desc";  
			$sonucxads =  @mysql_query($sorguxads) or die("Sorgulama yapIlamadI b");  
			
		
				
			while ($row = mysql_fetch_object($sonucxads))  
			{  
			$id = $row->id;   
			$title = $row->title;   
			$image = $row->image;   
			
              
            ?>  
              
              
              <table width="712" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="116" height="106" align="left" valign="middle" bgcolor="#FFFFFF"><strong><? echo("$id"); ?></strong></td>
                  <td width="132" align="left" valign="middle" bgcolor="#FFFFFF"><img src="Stores/<? echo("$image"); ?>" width="100"  alt=""/></td>
                  <td width="402" align="left" valign="middle" bgcolor="#FFFFFF"><? echo("$title"); ?></td>
                  <td width="62" align="center" valign="middle" bgcolor="#FEF6EB" style="color: #ED333C"><strong><a href="admin.php?page=removestore&gelen=sil&id=<? echo("$id"); ?>" style="color: #ED333C">DELETE</a></strong></td>
                </tr>
              </table>
              
              <?
			  
			  
			  
			}
			
			
				}
			
			?>
              
              
              
              
              
              
              
              
              </td>
            </tr>
          </table>
          <table width="200" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="33">&nbsp;</td>
            </tr>
        </table></td>
        </tr>
      <tr>
        <td height="30" colspan="4">&nbsp;</td>
        </tr>
    </table></td>
    </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
  </tr>
  <input type="hidden" name="login2" value="1">
  <input type="hidden" name="page2" value="addproduct">
  </table>
    
    <?

}


}else{
?>
    
    
    
    
    
    <form action="admin.php" method="post" name="login">
    
    <table width="748" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="44" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
        <td align="left" valign="middle" bgcolor="#FFFFFF" >Username : </td>
        <td align="left" valign="middle" bgcolor="#FFFFFF" ><input type="text" name="username" id="username"></td>
      </tr>
      <tr>
        <td height="43" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
        <td align="left" valign="middle" bgcolor="#FFFFFF" >Password :</td>
        <td align="left" valign="middle" bgcolor="#FFFFFF" ><input type="password" name="password" id="password"></td>
      </tr><input type="hidden" name="login" value="1">
      <tr>
        <td width="128" height="45" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
        <td width="168" align="left" valign="middle" bgcolor="#FFFFFF" >&nbsp;</td>
        <td width="452" align="left" valign="middle" bgcolor="#FFFFFF" ><input type="submit" name="Submit" id="Submit" value="Login"></td>
      </tr>
    </table>
    
    
    
    </form>
    
    
    <?
    
    
    }
    
    ?>
    
    </td>
  </tr>
</table>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="38" align="center" valign="middle" >All rights Reserved 2014- MagicWorkers - Envato</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
