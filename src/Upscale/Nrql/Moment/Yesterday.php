<?php
declare(strict_types=1);

namespace Upscale\Nrql\Moment;

/**
 * Relative moment one day in the past
 */
class Yesterday extends MomentAbstract
{
    /**
     * {@inheritdoc}
     */
    public function renderNrql(): string
    {
        return 'YESTERDAY';
    }
}
