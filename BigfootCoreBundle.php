<?php

namespace Bigfoot\Bundle\CoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use Bigfoot\Bundle\CoreBundle\Theme\Menu\Item;

class BigfootCoreBundle extends Bundle
{
    public function boot()
    {
        $this->container->get('bigfoot.route_manager')->addBundle($this->getName());
    }
}
