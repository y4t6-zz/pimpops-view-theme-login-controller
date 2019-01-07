<?php

namespace Engine\Core\Config;

class Config
{
    public static function item($key, $group = 'main')
    {
        $groupItems = static::file();

        return isset($groupItems[$key]) ? $groupItems[$key] : null;
    }

    public static function file($group)
    {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/' . mb_strtolower(ENV) . '/Config/' . $group . '.php';

        if (file_exists($path))
        {
            $items = require $path;

            if (is_array($items))
            {
                return $items;
            }
            else
            {
                new \Exception(
                    sprintf('Config filefile <strong>%s</strong> does not exist.', $path)
                );
            }
        }

        else
        {
            new \Exception(
                sprintf('Cannot load config from file, file <strong>%s</strong> does not exist.', $path)
            );
        }

    }
}