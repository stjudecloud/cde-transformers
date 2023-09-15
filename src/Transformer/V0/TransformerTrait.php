<?php

namespace CCDI\Transformer\V0;

trait TransformerTrait
{
    public static function transform($permissibleValue)
    {
        foreach (self::MAPPING as $item) {
            if(preg_match($item['regex'], $permissibleValue)) {
                return $item['value'];
            }
        }

        return null;
    }
}