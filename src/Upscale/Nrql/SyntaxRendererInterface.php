<?php
declare(strict_types=1);

namespace Upscale\Nrql;

/**
 * Anything that has representation in NRQL syntax
 */
interface SyntaxRendererInterface
{
    /**
     * Return representation in NRQL syntax
     *
     * @return string
     */
    public function renderNrql(): string;
}
