<?php

/*
	Plugin Name: Email Subscription
	Plugin URI: https://github.com/ProThoughts/q2a-email-subscription
	Plugin Description: Email Subscription Box in Sidebar
	Plugin Version: 1.0
	Plugin Date: 2016-10-08
	Plugin Author: ProThoughts
	Plugin Author URI: http://www.ProThoughts.com/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.6
	Plugin Update Check URI: https://raw.githubusercontent.com/ProThoughts/q2a-email-subscription/master/qa-plugin.php
*/

	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

qa_register_plugin_layer('qa-email-subscription-layer.php', 'Email Subscription');
qa_register_plugin_module('module', 'qa-email-subscription-options.php', 'pt_qa_email_subscription', 'Email Subscription Options');
	
?>