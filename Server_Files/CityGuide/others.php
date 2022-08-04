<?
@header('Content-type: application/json');

include("connect.php");




		
?>
[<?


$bak2 = @mysql_query("Select * from CityGuide Where type='9'");  
			$control = @mysql_num_rows($bak2);
			
if($control=="" || $control==""){
				?>
                {
	"id":1,
	"title":"",
	"longitude":"",
	"description":" || || || || || || || ||9||||",
	"upload_date":" ",
	"thumbnail_medium":" ",
	"latitude":""}
    <?
			}else{
			
	
	  		$sorguxad = "Select * from CityGuide Where type='9' order by id desc limit 50";    // You can change 50 , will show latest 50 stores for this category
			$sonucxad =  @mysql_query($sorguxad) or die("Sorgulama yapIlamadI b");  
			
			$say="0";
				
				
			while ($row = mysql_fetch_object($sonucxad))  
			{  
			$id = $row->id;   
			$title = $row->title;   
			$description = $row->description;   
			$image = $row->image;   
			$rate = $row->rate;   
			$phone = $row->phone;   
			$mail = $row->mail;   
			$long = $row->long;   
			$lat = $row->lat;   
			$urladres = $row->url;   
			
		
			$say++;
			
			$bak = @mysql_query("Select * from CityGuide Where type='9' order by id desc limit 50");  // You can change 50 , will show latest 50 stores for this category
			$sayi = @mysql_num_rows($bak);
			
			
		
?>{
	"id":<? echo("$id"); ?>,
	"title":"<? echo("$title"); ?>",
	"longitude":"<? echo("$long"); ?>",
	"description":"<? echo("$lat"); ?>||<? echo("$long"); ?>||<? echo("$description"); ?>||<? echo("$url"); ?>Stores/<? echo("$image"); ?>||<? echo("$rate"); ?>||<? echo("$mail"); ?>||<? echo("$phone"); ?>||<? echo("$title"); ?>||<? echo("9"); ?>||<? echo("$urladres"); ?>||",
	"upload_date":"<? echo(""); ?>",
	"thumbnail_medium":"<? echo("$url"); ?>Stores/<? echo("$image"); ?>",
	"latitude":"<? echo("$lat"); ?>"}<? if($say==$sayi){ echo(""); }else{ echo(",
	"); } ?><?
	
	
			}
			}
	
	
	?>]