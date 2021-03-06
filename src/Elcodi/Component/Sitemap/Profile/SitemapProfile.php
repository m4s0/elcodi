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

namespace Elcodi\Component\Sitemap\Profile;

use Elcodi\Component\Sitemap\Dumper\SitemapDumper;

/**
 * Class SitemapProfile
 */
class SitemapProfile
{
    /**
     * @var array
     *
     * Languages
     */
    protected $languages;

    /**
     * @var SitemapDumper[]
     *
     * Array of SitemapDumpers
     */
    protected $sitemapDumpers;

    /**
     * Construct
     *
     * @var array $languages Languages
     */
    public function __construct(array $languages = null)
    {
        $this->languages = $languages;
    }

    /**
     * Add a sitemapDumper
     *
     * @param SitemapDumper $sitemapDumper Sitemap Dumper
     *
     * @return $this Self object
     */
    public function addSitemapDumper(SitemapDumper $sitemapDumper)
    {
        $this->sitemapDumpers[] = $sitemapDumper;

        return $this;
    }

    /**
     * Build full profile
     *
     * @return $this Self object
     */
    public function dump()
    {
        foreach ($this->sitemapDumpers as $sitemapDumper) {
            if (is_array($this->languages)) {
                foreach ($this->languages as $language) {
                    $sitemapDumper->dump($language);
                }
            } else {
                $sitemapDumper->dump();
            }
        }

        return $this;
    }
}
