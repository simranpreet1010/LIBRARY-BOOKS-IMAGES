<?php
// create function for logging in a particular user
function login($login_id) {
	$_SESSION['login_id'] = $login_id;
}

// create function for logging out the current user
function logout() {
	unset($_SESSION['login_id']);
}

// create function for returning whether a user is logged in
function is_logged_in() {
	return isset($_SESSION['login_id']);
}

// create function for returning whether the logged-in user is 'admin'
function is_admin() {
	return is_logged_in() and (logged_in_user() === 'admin');
}

// create function for getting the current logged-in id
function logged_in_user() {
	return $_SESSION['login_id'];
}

// create function for redirecting user if not logged in
function require_login() {
	if(!is_logged_in()) {
		header('Location: ../../membership.php');
		exit;
	}
}