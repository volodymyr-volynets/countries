<?php

namespace Numbers\Countries\Countries\Model;
class ProvincesAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Countries\Countries\Model\Provinces::class;

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
	public ?int $cm_province_tenant_id = NULL;

	/**
	 * Country Code
	 *
	 *
	 *
	 * {domain{country_code}}
	 *
	 * @var string Domain: country_code Type: char
	 */
	public ?string $cm_province_country_code = null;

	/**
	 * Province Code
	 *
	 *
	 *
	 * {domain{province_code}}
	 *
	 * @var string Domain: province_code Type: varchar
	 */
	public ?string $cm_province_province_code = null;

	/**
	 * Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $cm_province_name = null;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $cm_province_inactive = 0;
}