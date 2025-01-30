<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\AnatomicalSite;

/**
 * @method static string|null|AnatomicalSite transform($permissibleValue, $key = null)
 */
class AnatomicalSiteTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => null,
            'regex' => '/^.*$/i', // Matches any string
        ],
    ];
}
