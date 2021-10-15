<?php

require_once 'core/core.php';

foreach (glob(TEMPLATEPATH . '/core/includes/*.php') as $file) {
	require_once $file;
}
