<?php

namespace FuelPHP\Config;

use Symfony\Component\Yaml\Yaml;

class Yml implements Handler
{
    /**
     * Load a config file
     *
     * @param  string $file file path
     * @return array  config contents
     */
    public function load($file)
    {
        $contents = file_get_contents($file);

        return Yaml::parse($contents);
    }

    /**
     * Format a config file for saving.
     *
     * @param  array  $data config data
     * @return string data export
     */
    public function format($data)
    {
        return Yaml::dump($data);
    }
}
