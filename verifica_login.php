<?php
if(!$_SESSION['nome']) {
	header('Location: ?p=login');
	exit();
}