<?php

declare(strict_types=1);

namespace PreemStudio\CharacterBuilder;

final class Path
{
    public static function parts(string $child): string
    {
        $path = config('laravel-character-builder.paths.parts');

        if ($child) {
            return $path.DIRECTORY_SEPARATOR.$child;
        }

        return $path;
    }

    public static function characters(string $child): string
    {
        $path = config('laravel-character-builder.paths.characters');

        if ($child) {
            return $path.DIRECTORY_SEPARATOR.$child;
        }

        return $path;
    }
}
