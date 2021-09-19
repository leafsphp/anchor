<?php

namespace Leaf;

/**
 * Leaf Security Module
 * ---------------------------------
 * Simple to use security based utility methods
 * 
 * @author Michael Darko <mickdd22@gmail.com>
 * @since v2.2
 * @version 1.0
 */
class Anchor
{
	public static function sanitize($data)
	{
		if (is_array($data)) {
			foreach ($data as $key => $value) {
				$data[self::sanitize($key)] = self::sanitize($value);
			}
		} else {
			$data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
		}

		return $data;
	}
}
