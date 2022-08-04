<?


// Connect to database

$db_host="localhost";   // your mysql database host name
$db_username="dbusername";  // username
$db_pass="dbpassword";  				// password
$connnect=mysql_connect("$db_host","$db_username","$db_pass") or die("Databese Error, Please check your connection values !");  
@mysql_select_db (database);  // Select Your Database

$url ="http://magicworkers.com/CityGuide/";  // Change your City Guide Url


?>