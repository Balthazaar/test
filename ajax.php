<?php
require_once 'config.php';

if (!empty($_GET['parse_url']) and !empty($_GET['parse_element'])) {

	Parser::ParseUrl($_GET['parse_url'], $_GET['parse_element']);
}