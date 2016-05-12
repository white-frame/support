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

	public static function registerAlias($class, $alias)
	{
		if(self::isLaravel()) {
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias($class, $alias);
		}
		elseif(self::isLumen()) {
			if(!class_exists($class)) {
				class_alias($alias, $class);
			}
		}
	}

	public static function registerHelper($name, callable $helper)
	{
		app()
			->make('white-frame.support.helper.manager')
			->add($name, $helper);
	}
}