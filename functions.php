<?php

foreach (glob(TEMPLATEPATH . '/includes/*.php') as $file) {
	require_once $file;
}