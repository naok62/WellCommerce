<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\ProducerBundle\Controller\Front;

use WellCommerce\Bundle\CoreBundle\Controller\Front\AbstractFrontController;
use WellCommerce\Bundle\CoreBundle\Controller\Front\FrontControllerInterface;

/**
 * Class ProducerController
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ProducerController extends AbstractFrontController implements FrontControllerInterface
{
    public function indexAction()
    {
        return $this->render('WellCommerceProducerBundle:Front/Producer:index.html.twig');
    }
}
