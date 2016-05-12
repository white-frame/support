<?php namespace WhiteFrame\Support\Helper;

class Manager 
{
	protected $helpers = [];

	/**
	 * Call a new helper with the name and the arguments
	 *
	 * @param $method
	 * @param $parameters
	 * @return null
	 */
	public function __call($method, $parameters) {
		if(isset($this->helpers[$method]))
			return call_user_func_array($this->helpers[$method], $parameters);
		else
			return null;
	}

	/**
	 * Get all helpers registered
	 *
	 * @return array
	 */
	public function all() {
		return $this->helpers;
	}

	/**
	 * Add a new helper
	 *
	 * @param $name
	 * @param callable $helper
	 */
	public function add($name, callable $helper) {
		$this->helpers[$name] = $helper;
	}

	/**
	 * Remove a registered helper
	 *
	 * @param $name
	 */
	public function remove($name) {
		unset($this->helpers[$name]);
	}
}
