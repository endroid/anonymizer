<?php

declare(strict_types=1);

namespace Endroid\Anonymizer\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Target("PROPERTY")
 */
class SensitiveData
{
    /** @var string */
    public $type;

    public function getType(): string
    {
        return $this->type;
    }
}
