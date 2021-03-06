<?php

/*
 * This file is part of the SensioLabsInsight package.
 *
 * (c) SensioLabs <contact@sensiolabs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SensioLabs\Insight\Sdk\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Violations implements \Countable, \IteratorAggregate
{
    /**
     * @Type("array<SensioLabs\Insight\Sdk\Model\Violation>")
     * @XmlList(inline = true, entry = "violation")
     */
    private $violations = array();

    public function count()
    {
        return count($this->violations);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->violations);
    }

    /**
     * @return Violation[]
     */
    public function getViolations()
    {
        return $this->violations;
    }
}
