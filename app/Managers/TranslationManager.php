<?php

namespace App\Managers;

use Illuminate\Support\Manager;
use App\Contracts\TranslationDriver;
use App\Drivers\JSONTranslationDriver;
use App\Drivers\ArrayTranslationDriver;
use App\Exceptions\NoDefaultDriverException;
use App\Drivers\MySQL\MySQLTranslationDriver;
use App\Exceptions\InvalidTranslationDriverException;

class TranslationManager extends Manager
{
    /**
     * The default driver to be used.
     *
     * @var string
     */
    protected $defaultDriver;

    /**
     * Create the JSON translation driver.
     *
     * @return \App\Drivers\JSONTranslationDriver
     */
    public function createJsonDriver()
    {
        return $this->container->make(JSONTranslationDriver::class);
    }

    /**
     * Create the MySQL translation driver.
     *
     * @return \App\Drivers\MySQL\MySQLTranslationDriver
     */
    public function createMysqlDriver()
    {
        return $this->container->make(MySQLTranslationDriver::class);
    }

    /**
     * Create the array translation driver.
     *
     * @return \App\Drivers\ArrayTranslationDriver
     */
    public function createArrayDriver()
    {
        return $this->container->make(ArrayTranslationDriver::class);
    }

    /**
     * Returns the default driver's name.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        if ($this->defaultDriver === null) {
            $configDriver = $this->container['config']['translation.driver'];
            if ($configDriver === null) {
                $message = 'A default translation driver has not been specified.';
                throw new NoDefaultDriverException($message);
            }

            $this->defaultDriver = $configDriver;
        }

        return $this->defaultDriver;
    }

    /**
     * Set the default driver in runtime.
     *
     * @param string $driver
     * @return self
     */
    public function setDefaultDriver(string $driver)
    {
        $this->defaultDriver = $driver;

        return $this;
    }

    /**
     * Returns a list of all the instantiable drivers.
     *
     * @return array
     */
    public function getAvailableDrivers()
    {
        return array_merge(
            [
            'json', 'mysql', 'array',
            ],
            $this->getRegisteredExtensionNames()
        );
    }

    /**
     * Returns an array of all the registered extensions.
     *
     * @return array
     */
    public function getRegisteredExtensionNames()
    {
        return array_keys($this->customCreators);
    }

    /**
     * We override this method to ensure that all the drivers
     * provided by this manager implement the TranslationDriver interface.
     *
     * @param  string|null $driver
     * @throws InvalidTranslationDriverException
     * @return TranslationDriver
     */
    public function driver($driver = null)
    {
        $driverConcrete = parent::driver($driver);

        if (! $driverConcrete instanceof TranslationDriver) {
            $message = 'All translation drivers must implement the TranslationDriver interface.';
            throw new InvalidTranslationDriverException($message);
        }

        return $driverConcrete;
    }
}
