<?php

namespace CCDI\Transformer\V0;

trait TransformerTrait
{
    public static function transform($permissibleValue)
    {
        foreach (self::getMappings() as $item) {
            if (preg_match($item['regex'], $permissibleValue)) {
                return $item['value'];
            }
        }

        return null;
    }

    public static function getMappings()
    {
        if (self::MAPPING) {
            return self::MAPPING;
        }

        return [];
    }
}