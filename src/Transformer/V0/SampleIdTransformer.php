<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\SampleId;

/**
 * @method static string|null|SampleId transform($permissibleValue, $key = null)
 */
class SampleIdTransformer extends AbstractTransformer
{
    // There are no mappings for SampleId
    protected static array $MAPPINGS = [];

    /**
     * There are no mappings for SampleId
     */
    public static function transform($value, $key = null): ?string
    {
        return $value;
    }
}
