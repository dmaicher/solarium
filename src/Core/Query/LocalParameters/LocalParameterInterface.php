<?php

declare(strict_types=1);

namespace Solarium\Core\Query\LocalParameters;

/**
 * Local Parameter Interface.
 *
 * @author wicliff <wicliff.wolda@gmail.com>
 */
interface LocalParameterInterface
{
    /**
     * Should return a key=value combo.
     *
     * @return string
     */
    public function __toString(): string;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return array
     */
    public function getValues(): array;

    /**
     * @return $this
     */
    public function clearValues(): self;

    /**
     * @param $value
     *
     * @return $this
     */
    public function addValue($value): self;

    /**
     * @param array $values
     *
     * @return $this
     */
    public function addValues(array $values): self;

    /**
     * @param $value
     *
     * @return $this
     */
    public function removeValue($value): self;
}
