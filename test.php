<?php

use diversen\gravatar;

// You will not need 'include_once' if the autoloading is set up normally
// It is just for testing

include_once "../../autoload.php";

$email = 'test@test.com';
$size = 120;

// Get image tag
echo gravatar::getGravatarImg($email, $size);

// Full options: 
// gravatar::getGravatarImg($email, $s = 80, $d = 'identicon', $r = 'g', $img = true, $atts = array())

// Only get tag
echo gravatar::getGravatar($email, $size);

// Full options: 
// gravatar::getGravatar($email, $s = 80, $d = 'identicon', $r = 'g', $img = false, $atts = array())

