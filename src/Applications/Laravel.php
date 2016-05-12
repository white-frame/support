<?php namespace WhiteFrame\Support\Applications;

/**
 * Class Laravel
 * @package WhiteFrame\Support\Applications
 */
class Laravel
{
	public function alias($class, $alias)
	{
		$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		$loader->alias($class, $alias);
	}
}