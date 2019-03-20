<?php
/******************************************************************************/
/*The user class                                                              */
/******************************************************************************/
Class User{
	
	public function __construct(){

	}
	public function login(){
	}
	public function logout(){
	}
	public function register(){
	}
	//validate an email by regex or similar
	private function validate_email(){
	}
	//validate email by connecting to email box through smtp
	private function secure_validate_email(){
	}
	//check an email
	public function check_email($secure=False){
	}
	//verify email
	public function verify_email(){
	}

}
