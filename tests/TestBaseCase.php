<?php

namespace Cblink\Service\Marketing\Tests;

use Closure;
use PHPUnit\Framework\TestCase;
use Cblink\Service\Marketing\MarketingApp;

class TestBaseCase extends TestCase
{
    /**
     * @var MarketingApp
     */
    protected $application;

    protected function setUp(): void
    {
        $config = [
            // 配置信息
            'base_url' => 'http://127.0.0.1/',
            'appid' => 1,
            'secret' => 'test',
        ];

        if (file_exists($fileName = $this->basePath('./base.php'))) {
            $config = include $fileName;
        }

        $this->application = new MarketingApp($config);
    }

    /**
     * @param $path
     * @return string
     */
    public function basePath($path = '')
    {
        return __DIR__ . '/../' . $path;
    }

    /**
     * @param $name
     * @param $rebind
     * @return MarketingApp
     */
    public function rebindAppClient($name, $rebind)
    {
        if (!($rebind instanceof Closure)) {
            $rebind = function () use ($rebind) {
                return $rebind;
            };
        }

        $this->application->rebind($name, $rebind);

        return $this->application;
    }

    /**
     * @return MarketingApp
     */
    public function getApp()
    {
        return $this->application;
    }

    protected function tearDown(): void
    {
        \Mockery::close();
    }
}
