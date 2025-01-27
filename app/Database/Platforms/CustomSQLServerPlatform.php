<?php

namespace App\Database\Platforms;

use Doctrine\DBAL\Platforms\SQLServer2012Platform;

class CustomSQLServerPlatform extends SQLServer2012Platform
{
    /**
     * Inicializa los mapeos de tipos personalizados para Doctrine.
     */
    public function initializeDoctrineTypeMappings()
    {
        parent::initializeDoctrineTypeMappings();

        // Agrega soporte para el tipo "timestamp"
        $this->doctrineTypeMapping['timestamp'] = 'datetime'; // Mapea 'timestamp' a 'datetime'
    }
}