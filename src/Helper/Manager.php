<?php namespace WhiteFrame\Support\Helper;

class Manager 
{
	protected $helpers = [];

	public function __call($method, $parameters) {
		if(isset($this->helpers[$method]))
			return call_user_func_array($this->helpers[$method], $parameters);	
	}

	public function all() {
		return $this->helpers;
	}

	public function add($name, callable $helper) {
		$this->helpers[$name] = $helper;
	}

	public function remove($name) {
		unset($this->helpers[$name]);
	}
}
