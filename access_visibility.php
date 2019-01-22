<?php
class MyProfile
{
	private $email = "b@correo.com";

	public function __construc()
	{

	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

}

$instMyProfile = new MyProfile();
//$instMyProfile->email = "robert@gmail.com";

echo $instMyProfile->getEmail();



?>