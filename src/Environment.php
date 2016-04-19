<?php namespace WhiteFrame\Support;

/**
 * Class Environment
 * @package WhiteFrame\Support
 */
class Environment
{
	public static function isLumen()
	{
		return is_a(app(), 'Laravel\Lumen\Application');
	}

	public static function isLaravel()
	{
		return is_a(app(), 'Illuminate\Foundation\Application');
	}
}