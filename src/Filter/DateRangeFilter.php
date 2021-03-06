<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminSearchBundle\Filter;

use Sonata\AdminBundle\Form\Type\Filter\DateRangeType;

class DateRangeFilter extends AbstractDateFilter implements RangeFilterInterface
{
    /**
     * This is a range filter.
     *
     * @var bool
     *
     * NEXT_MAJOR: Remove this property
     *
     * @deprecated since 1.1, will be removed in 2.0.
     */
    protected $range = true;

    /**
     * {@inheritdoc}
     */
    protected function getFilterTypeClass()
    {
        return DateRangeType::class;
    }
}
