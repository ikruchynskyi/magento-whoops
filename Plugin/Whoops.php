<?php

namespace Ikruchynskyi\Whoops\Plugin;

use Magento\Framework\App\Bootstrap;
use Magento\Framework\App\Http;

/**
 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
 */
class Whoops
{
    /**
     * @var \Whoops\RunFactory
     */
    private $whoopsFactory;

    /**
     * @var \Whoops\Handler\PrettyPageHandlerFactory
     */
    private $prettyPageHandlerFactory;

    public function __construct(
        \Whoops\RunFactory $whoopsFactory,
        \Whoops\Handler\PrettyPageHandlerFactory $prettyPageHandlerFactory
    ) {
        $this->whoopsFactory = $whoopsFactory;
        $this->prettyPageHandlerFactory = $prettyPageHandlerFactory;
    }

    public function beforeCatchException(Http $subject, Bootstrap $bootstrap, \Exception $exception)
    {
        $whoops = $this->whoopsFactory->create();
        $whoops->pushHandler($this->prettyPageHandlerFactory->create());
        $whoops->handleException($exception);

        return [$bootstrap, $exception];
    }
}
