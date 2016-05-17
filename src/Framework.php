<?php namespace WhiteFrame\Support;

/**
 * Class Framework
 * @package WhiteFrame\Support
 */
class Framework
{
	protected static $packages = [];

	/**
	 * Register a white-frame package
	 *
	 * @param $name
	 */
	public static function registerPackage($name)
	{
		self::$packages[$name] = true;
	}

	/**
	 * Return if a white-frame package is registered or not
	 *
	 * @param $name
	 * @return bool
	 */
	public static function hasPackage($name)
	{
		return isset(self::$packages[$name]);
	}
}