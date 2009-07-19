<?php
class Qstme {
	public static $error = false;

	public static function getUrl($url) {
		self::$error = false;
		$url = "http://qst.me/api.php?url=" . filter_var($url, FILTER_SANITIZE_URL);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		$info = curl_getinfo($ch);
		self::_checkError($info);
		curl_close($ch);
		return $result;
	}

	private static function _checkError($info) {
		if(200 !== intval($info['http_code'])) {
			self::$error = true;
		}
	}
}
?>