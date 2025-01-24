<?php

namespace CCDI\Transformer\V0;

class AbstractTransformer
{
    public static function transform($value, $key = null): ?string
    {
        foreach (static::getMappings() as $mapping) {
            if (preg_match($mapping['regex'], $value)) {
                return $key ? ($mapping['value'][$key] ?? null) : $mapping['value'];
            }
        }

        return null;
    }

    public static function getMappings(): array
    {
        // @phpstan-ignore-next-line
        return static::$MAPPINGS ?? [];
    }
}
