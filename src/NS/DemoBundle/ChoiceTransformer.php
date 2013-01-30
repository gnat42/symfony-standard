<?php
namespace NS\DemoBundle;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class ChoiceTransformer implements DataTransformerInterface
{
    /**
     * Transforms an object (issue) to a string (number).
     *
     * @param  IntegerChoice|null $issue
     * @return string
     */
    public function transform($issue)
    {
        if (null === $issue || empty($issue)) {
            return "";
        }
        
        return $issue->getValue();
    }

    /**
     * Transforms a string (number) to an object (issue).
     *
     * @param  string $number
     * @return IntergerChoice|null
     * @throws TransformationFailedException if object (issue) is not found.
     */
    public function reverseTransform($number)
    {
        if (!$number) {
            return null;
        }

        return new Form\Types\IntegerChoice($number);
    }
}
