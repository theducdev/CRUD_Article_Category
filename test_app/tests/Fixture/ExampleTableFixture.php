<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExampleTableFixture
 */
class ExampleTableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'example_table';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'tiny_int_column' => 1,
                'small_int_column' => 1,
                'medium_int_column' => 1,
                'int_column' => 1,
                'big_int_column' => 1,
                'unsigned_int_column' => 1,
                'decimal_column' => 1.5,
                'float_column' => 1,
                'double_column' => 1,
                'char_column' => '',
                'varchar_column' => 'Lorem ipsum dolor sit amet',
                'text_column' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'mediumtext_column' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'longtext_column' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'binary_column' => 'Lorem ipsum dolor ',
                'varbinary_column' => 'Lorem ipsum dolor sit amet',
                'blob_column' => 'Lorem ipsum dolor sit amet',
                'mediumblob_column' => 'Lorem ipsum dolor sit amet',
                'longblob_column' => 'Lorem ipsum dolor sit amet',
                'date_column' => '2024-07-24',
                'time_column' => '09:41:37',
                'datetime_column' => '2024-07-24 09:41:37',
                'timestamp_column' => 1721814097,
                'year_column' => 'Lorem ipsum dolor sit amet',
                'enum_column' => 'Lorem ipsum dolor sit amet',
                'set_column' => 'Lorem ipsum dolor sit amet',
                'boolean_column' => 1,
                'json_column' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'point_column' => 'Lorem ipsum dolor sit amet',
                'geometry_column' => 'Lorem ipsum dolor sit amet',
                'polygon_column' => 'Lorem ipsum dolor sit amet',
                'geometrycollection_column' => 'Lorem ipsum dolor sit amet',
                'linestring_column' => 'Lorem ipsum dolor sit amet',
                'multipoint_column' => 'Lorem ipsum dolor sit amet',
                'multilinestring_column' => 'Lorem ipsum dolor sit amet',
                'multipolygon_column' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
