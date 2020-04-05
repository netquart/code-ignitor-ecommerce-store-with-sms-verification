<?php


/*if($_GET['str']=='Mdghty0945poritght675Mty')

{
	*/
	

$link = mysqli_connect("localhost", "root", "", "shop_database");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}



$query = mysqli_query($link,"select id from products where quantity<5 and visibility=1");


if(mysqli_num_rows($query)>0)
{
	
$array_id = '';	
	
while($array = mysqli_fetch_array($query))

{
	
	
	$array_id[]  = $array['id'];
		
	
}

}

$message =  'Dear admin here are the products whose quantities are less then five ['.implode(',',$array_id).'] hurry up to add more products (sms posted on '.date("F j, Y, g:i a").')';

                 mysqli_close($link);	
	
	
	
	
	            $username = "923085506487";///Your Username
				$password = "3529";///Your Password
				$mobile = '923009657646';///Recepient Mobile Number
				$sender = "Raafay Mall";
				$message = $message;
				
				//sending sms
				
				$post1 = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
				$url = "http://sendpk.com/api/sms.php?username=".$username."&password=".$password."";
				$ch = curl_init();
				$timeout = 0; // set to zero for no timeout
				
				curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
				curl_setopt($ch, CURLOPT_URL,$url);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS,$post1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
				
				$result = curl_exec($ch); 
	
	
	
	
	
	
	
	
/*}*/


?>
