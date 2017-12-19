<?php
/**
 * @author Prasetyo Pandu <prasetyowira@gmail.com>
 * Date: 19/12/17
 * Time: 14.43
 */

namespace Ariwira\Orangtua;
use Closure;
use Exception;

class Orangtua {
	public static $authUsing;

	public static function check($request)
	{
		return (static::$authUsing ?: function () {
			return false;
		})($request);
	}

	public static function auth(Closure $callback)
	{
		static::$authUsing = $callback;
		return new static;
	}
}