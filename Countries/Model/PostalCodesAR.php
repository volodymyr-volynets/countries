<?php

namespace Numbers\Countries\Countries\Model;
class PostalCodesAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Countries\Countries\Model\PostalCodes::class;

	/**
	 * Constructing object
	 *
	 * @param array $options
	 *		skip_db_object
	 *		skip_table_object
	 */
	public function __construct($options = []) {
		if (empty($options['skip_table_object'])) {
			$this->object_table_object = new $this->object_table_class($options);
		}
	}
	/**
	 * Tenant #
	 *
	 *
	 *
	 * {domain{tenant_id}}
	 *
	 * @var int Domain: tenant_id Type: integer
	 */
	public ?int $cm_postal_tenant_id = NULL;

	/**
	 * Country Code
	 *
	 *
	 *
	 * {domain{country_code}}
	 *
	 * @var string Domain: country_code Type: char
	 */
	public ?string $cm_postal_country_code = null;

	/**
	 * Province Code
	 *
	 *
	 *
	 * {domain{province_code}}
	 *
	 * @var string Domain: province_code Type: varchar
	 */
	public ?string $cm_postal_province_code = null;

	/**
	 * Postal Code
	 *
	 *
	 *
	 * {domain{postal_code}}
	 *
	 * @var string Domain: postal_code Type: varchar
	 */
	public ?string $cm_postal_postal_code = null;

	/**
	 * City
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $cm_postal_city = null;

	/**
	 * Latitude
	 *
	 *
	 *
	 * {domain{geo_coordinate}}
	 *
	 * @var float Domain: geo_coordinate Type: numeric
	 */
	public ?float $cm_postal_latitude = NULL;

	/**
	 * Longitude
	 *
	 *
	 *
	 * {domain{geo_coordinate}}
	 *
	 * @var float Domain: geo_coordinate Type: numeric
	 */
	public ?float $cm_postal_longitude = NULL;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $cm_postal_inactive = 0;
}