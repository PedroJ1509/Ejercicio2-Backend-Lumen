<?php

namespace App\Database\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class TimestampType extends Type
{
    const TIMESTAMP = 'timestamp';

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        // Devuelve cómo debe manejarse el tipo en SQL
        return $platform->getDateTimeTypeDeclarationSQL($fieldDeclaration);
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        // Convierte el valor a un formato PHP (DateTime)
        return $value !== null ? \DateTime::createFromFormat('Y-m-d H:i:s', $value) : null;
    }

    public function getName()
    {
        return self::TIMESTAMP; // Define el nombre del tipo
    }
}