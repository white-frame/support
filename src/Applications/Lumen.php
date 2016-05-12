<?php namespace WhiteFrame\Support\Applications;

/**
 * Class Lumen
 * @package WhiteFrame\Support\Applications
 */
class Lumen
{
	public function alias($class, $alias)
	{
		if(!class_exists($class)) {
			class_alias($alias, $class);
		}
	}
}