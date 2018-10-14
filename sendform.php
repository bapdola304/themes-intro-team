<?php
$errors = array();
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$vi = $_POST['vi'];
	$email = $_POST['email'];
	$twitter = $_POST['twitter'];

	$to = 'bapdola303@gmail.com';
	$subject = "New subscribe";
	$message="Name: ".$name."\n"."Email: ".$email."\n"."Vi: ".$vi."\n"."Twitter: ".$twitter;
	$headers = "From: ".$email;

		if(empty($name)){
			array_push($name, "Vui lòng  nhập tên");
		}
		else{
			if(empty($vi)){
				array_push($errors, "Vui lòng nhập ví");

			}
			else{
				if(empty($email)){
					array_push($errors, "Vui lòng nhập email");

				}
				else{
					if(empty($twitter)){
						array_push($errors, "Vui lòng nhập Twitter");
					}
					else{
						$send = mail($to, $subject, $message,$headers);
							if($send){
								echo "<br>";
								echo "THANKS FOR CONTACTING ME";
							}
							else{
								echo "error";
							}
					}
				}
			}
		}
}

?>
