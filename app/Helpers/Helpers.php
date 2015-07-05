<?php namespace Rahasi\Helpers;
trait Helpers {
/**
 * Builds an http query string.
 * @param array $query  // of key value pairs to be used in the query
 * @return string       // http query string.
 **/
	function build_http_query($query) {

		$query_array = array();

		foreach ($query as $key => $key_value) {

			$query_array[] = urlencode($key) . '=' . urlencode($key_value);

		}

		return implode('&', $query_array);

	}
}