<?php

namespace CCDI\Transformer\V0;

class AbstractTransformer
{
    public static function transform($permissibleValue)
    {
        foreach (static::getMappings() as $item) {
            if (preg_match($item['regex'], $permissibleValue)) {
                return $item['value'];
            }
        }

        return null;
    }

    public static function getMappings(): array
    {
        if (static::$MAPPINGS) {
            return static::$MAPPINGS;
        }

        return [];
    }
}