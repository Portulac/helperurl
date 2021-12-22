<?php

namespace portulac\helperurl;

class HelperURL
{
	/**
	 * @return mixed
	 */
	public function GetCurePageURL()
	{
		$pageURL = "http";
		if (isset($_SERVER["HTTPS"]))
		{
			if ($_SERVER["HTTPS"] == "on")
			{
				$pageURL .= "s";
			}
		}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80")
		{
			$pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"];
		}
		else
		{
			$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
		}

		return $pageURL;
	}
}