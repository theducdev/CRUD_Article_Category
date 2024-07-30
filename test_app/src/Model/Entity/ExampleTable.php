<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExampleTable Entity
 *
 * @property int $id
 * @property int|null $tiny_int_column
 * @property int|null $small_int_column
 * @property int|null $medium_int_column
 * @property int|null $int_column
 * @property int|null $big_int_column
 * @property int|null $unsigned_int_column
 * @property string|null $decimal_column
 * @property float|null $float_column
 * @property float|null $double_column
 * @property string|null $char_column
 * @property string|null $varchar_column
 * @property string|null $text_column
 * @property string|null $mediumtext_column
 * @property string|null $longtext_column
 * @property string|resource|null $binary_column
 * @property string|resource|null $varbinary_column
 * @property string|resource|null $blob_column
 * @property string|resource|null $mediumblob_column
 * @property string|resource|null $longblob_column
 * @property \Cake\I18n\Date|null $date_column
 * @property \Cake\I18n\Time|null $time_column
 * @property \Cake\I18n\DateTime|null $datetime_column
 * @property \Cake\I18n\DateTime $timestamp_column
 * @property string|null $year_column
 * @property string|null $enum_column
 * @property string|null $set_column
 * @property bool|null $boolean_column
 * @property string|null $json_column
 * @property string|null $point_column
 * @property string|null $geometry_column
 * @property string|null $polygon_column
 * @property string|null $geometrycollection_column
 * @property string|null $linestring_column
 * @property string|null $multipoint_column
 * @property string|null $multilinestring_column
 * @property string|null $multipolygon_column
 */
class ExampleTable extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'tiny_int_column' => true,
        'small_int_column' => true,
        'medium_int_column' => true,
        'int_column' => true,
        'big_int_column' => true,
        'unsigned_int_column' => true,
        'decimal_column' => true,
        'float_column' => true,
        'double_column' => true,
        'char_column' => true,
        'varchar_column' => true,
        'text_column' => true,
        'mediumtext_column' => true,
        'longtext_column' => true,
        'binary_column' => true,
        'varbinary_column' => true,
        'blob_column' => true,
        'mediumblob_column' => true,
        'longblob_column' => true,
        'date_column' => true,
        'time_column' => true,
        'datetime_column' => true,
        'timestamp_column' => true,
        'year_column' => true,
        'enum_column' => true,
        'set_column' => true,
        'boolean_column' => true,
        'json_column' => true,
        'point_column' => true,
        'geometry_column' => true,
        'polygon_column' => true,
        'geometrycollection_column' => true,
        'linestring_column' => true,
        'multipoint_column' => true,
        'multilinestring_column' => true,
        'multipolygon_column' => true,
    ];
}
