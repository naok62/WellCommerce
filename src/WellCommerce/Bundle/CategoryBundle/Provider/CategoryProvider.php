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

namespace WellCommerce\Bundle\CategoryBundle\Provider;

use WellCommerce\Bundle\CategoryBundle\Entity\Category;

/**
 * Class CategoryProvider
 *
 * @package WellCommerce\Bundle\CategoryBundle\Provider
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class CategoryProvider
{
    /**
     * @var Category
     */
    protected $currentCategory;

    public function setCurrentCategory(Category $category)
    {
        $this->currentCategory = $category;
    }

    public function getCurrentCategory()
    {
        return $this->currentCategory;
    }
} 