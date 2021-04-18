<?php

namespace Drnxloc\LaravelHtmlDom;

require 'simplehtmldom'.DIRECTORY_SEPARATOR.'simple_html_dom.php';

class HtmlDomParser {
	
	/**
	 * @return \simplehtmldom\simple_html_dom
	 */
	static public function file_get_html() {
		return call_user_func_array ( '\simplehtmldom\file_get_html' , func_get_args() );
	}

	/**
	 * get html dom from string
	 * @return \simplehtmldom\simple_html_dom
	 */
	static public function str_get_html() {
		return call_user_func_array ( '\simplehtmldom\str_get_html' , func_get_args() );
	}
}