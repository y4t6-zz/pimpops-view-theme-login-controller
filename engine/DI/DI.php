<?php

namespace Engine\DI;

class DI
{
    private $container = [];

    public function set($key, $value)
    {
        $this->container[$key] = $value;

        return $this;
    }

    public function get($key)
    {
        return $this->has($key) ?
            $this->container[$key] :
            trigger_error($key . " exist in 
                DI-container", E_USER_ERROR);
    }

    public function has($key)
    {
        return isset($this->container[$key]);
    }
}