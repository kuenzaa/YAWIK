<?php
/**
 * Cross Applicant Management
 *
 * @filesource
 * @copyright (c) 2013 Cross Solution (http://cross-solution.de)
 * @license   AGPLv3
 */

/** ArrayCollection.php */ 
namespace Core\Entity\Collection;

class ArrayCollection extends \Doctrine\Common\Collections\ArrayCollection
{
    public function fromArray(array $elements)
    {
        /*
         * This must be an foreach loop and call the inherited method add,
         * because $_elements is declared PRIVATE.
         * Doctrine is build very unextendable! :(
         */
        foreach ($elements as $element) {
            $this->add($element);
        }
        return $this;
    }
}
