<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\FileSize;

/**
 * @method static string|null|FileSize transform($permissibleValue, $key = null)
 */
class FileSizeTransformer extends AbstractTransformer
{
    // There are no mappings for FileSize
    protected static array $MAPPINGS = [];

    /**
     * There are no mappings for FileSize, and therefore no need for a transform method other to check if the given
     * value is a positive number.
     */
    public static function transform($value, $key = null): ?string
    {
        return is_numeric($value) && $value >= 0 ? $value : null;
    }
}
