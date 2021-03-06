<?php 

namespace vendor\core\auth;

use vendor\core\helper\Cookie;

class Auth implements AuthInterface{
	
	/**
	 * 
	 * @var bool
	 */
	protected $authorized = false;
	protected $user = null;
	
	/**
	 * @return bool
	 */
	public function authorized(){
		return $this->authorized;
	}
	
	/**
	 * @return mixed
	 */
	public function user(){
		return $this->user;
	}
	
	/**
	 * User authorization
	 * @param $user
	 */
	public function authorize($user){
		Cookie::set('auth_authorized', true);
		Cookie::set('auth_user', $user);
		
		$this->authorized = true;
		$this->user = $user;
	}
	
	/**
	 * User unauthorization
	 * @return void
	 */
	public function unAuthorize(){
		Cookie::delete('auth_authorized');
		Cookie::delete('auth_user');
	
		$this->authorized = false;
		$this->user = null;
	}
	
	/**
	 * Generates a new random password salt
	 * @return int
	 */
	public static function salt(){
		return (string) rand(10000000, 99999999);
	}
	
	/**
	 * Generates a hash
	 * @param $password
	 * @param $salt
	 * @return string
	 */
	public static function encryptPassword($password, $salt = ''){
		return hash('sha256', $password . $salt);
	}
	
}