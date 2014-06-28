<?php
namespace Asgard\Auth;

interface IAuth {
	public function isConnected();
	public function isGuest();
	public function check(); #throw NotAuthenticated()
	public function attempt($user, $password);
	public function attemptRemember();
	public function remember($user, $password);
	public function connect($id);
	public function disconnect();
	public function user();
}