<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2015 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Component\Sitemap\Renderer\Interfaces;

/**
 * Interface SitemapRendererInterface
 */
interface SitemapRendererInterface
{
    /**
     * Given an array of sitemapElements, render the Sitemap
     *
     * @param array $sitemapElements Elements
     *
     * @return string Render
     */
    public function render(array $sitemapElements);
}
