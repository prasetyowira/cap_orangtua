<?php
/**
 * @author Prasetyo Pandu <prasetyowira@gmail.com>
 * Date: 19/12/17
 * Time: 14.42
 */

namespace Ariwira\Orangtua\Http\Middleware;

use Ariwira\Orangtua\Orangtua;
class Authenticate {
	public function handle($request, $next)
	{
		return Orangtua::check($request) ? $next($request) : redirect()->route('orangtua.index');
	}
}