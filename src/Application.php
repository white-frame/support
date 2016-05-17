<?php namespace WhiteFrame\Support;

use WhiteFrame\Support\Applications\Laravel;
use WhiteFrame\Support\Applications\Lumen;
use WhiteFrame\Support\Exceptions\UnknownApplicationException;

/**
 * Class Application
 * @package WhiteFrame\Support
 */
class Application
{
	/**
	 * Say if the current application is a Lumen App
	 *
	 * @return boolean
	 */
	public static function isLumen()
	{
		return is_a(app(), 'Laravel\Lumen\Application');
	}

	/**
	 * Say if the current application is a Laravel App
	 *
	 * @return mixed
	 */
	public static function isLaravel()
	{
		return is_a(app(), 'Illuminate\Foundation\Application');
	}

	/**
	 * Register a new alias regardless the application type
	 *
	 * @param $class
	 * @param $alias
	 * @throws UnknownApplicationException
	 */
	public static function alias($class, $alias)
	{
		self::getApplication()->alias($class, $alias);
	}

	/**
	 * Get the application Laravel or Lumen
	 *
	 * @return Laravel|Lumen
	 * @throws UnknownApplicationException
	 */
	protected static function getApplication()
	{
		if(self::isLaravel()) {
			return new Laravel();
		}
		elseif(self::isLumen()) {
			return new Lumen();
		}
		else {
			throw new UnknownApplicationException();
		}
	}

	/**
	 * Handle static calls and route them to Laravel or Lumen
	 *
	 * @param $name
	 * @param $args
	 * @return mixed
	 * @throws UnknownApplicationException
	 */
	public static function __callStatic($name, $args)
	{
		return call_user_func_array([self::getApplication(), $name], $args);
	}
}