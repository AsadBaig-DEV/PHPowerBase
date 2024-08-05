<?php

require "function.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// dd(parse_url($uri));
// dd($uri);
if ($uri === "/") {
  require "controllers/index.php";
} elseif ($uri === "/about") {
  require "controllers/about.php";
} elseif ($uri === "/contact") {
  require "controllers/contact.php";
}
