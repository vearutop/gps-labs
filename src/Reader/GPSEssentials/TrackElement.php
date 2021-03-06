<?php

namespace GeoTool\Reader\GPSEssentials;

use Yaoi\Database\Definition\Column;
use Yaoi\Database\Definition\Table;
use Yaoi\Database\Entity;

class TrackElement extends Entity
{
    public $id;
    public $trackId;
    public $time;
    public $distance;
    public $speed;
    public $altitude;
    public $bearing;
    public $longitude;
    public $latitude;
    public $accuracy;
    public $options;
    public $gain;


    static function setUpColumns($columns)
    {
        $columns->id = Column::create(Column::AUTO_ID);
        $columns->trackId = Track::columns()->id;

        $columns->time = Column::INTEGER;
        $columns->distance = Column::FLOAT;
        $columns->speed = Column::FLOAT;
        $columns->altitude = Column::FLOAT;
        $columns->bearing = Column::FLOAT;
        $columns->longitude = Column::FLOAT;
        $columns->latitude = Column::FLOAT;
        $columns->accuracy = Column::FLOAT;
        $columns->options = Column::STRING;
        $columns->gain = Column::FLOAT;
    }

    static function setUpTable(\Yaoi\Database\Definition\Table $table, $columns)
    {
        $table->setSchemaName('TrackElement');
        Column::cast($columns->id)->schemaName = '_id';
        Column::cast($columns->trackId)->schemaName = 'trackId';
    }


}