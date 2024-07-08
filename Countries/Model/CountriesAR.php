<?php

namespace Numbers\Countries\Countries\Model;
class CountriesAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Countries\Countries\Model\Countries::class;

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
	public ?int $cm_country_tenant_id = NULL;

	/**
	 * Country Code
	 *
	 *
	 *
	 * {domain{country_code}}
	 *
	 * @var string Domain: country_code Type: char
	 */
	public ?string $cm_country_code = null;

	/**
	 * Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $cm_country_name = null;

	/**
	 * Code(3)
	 *
	 *
	 *
	 * {domain{country_code3}}
	 *
	 * @var string Domain: country_code3 Type: char
	 */
	public ?string $cm_country_code3 = null;

	/**
	 * Number
	 *
	 *
	 *
	 * {domain{country_number}}
	 *
	 * @var int Domain: country_number Type: smallint
	 */
	public ?int $cm_country_number = NULL;

	/**
	 * Region #
	 *
	 *
	 *
	 * {domain{country_number}}
	 *
	 * @var int Domain: country_number Type: smallint
	 */
	public ?int $cm_country_region_id = NULL;

	/**
	 * Sub Region #
	 *
	 *
	 *
	 * {domain{country_number}}
	 *
	 * @var int Domain: country_number Type: smallint
	 */
	public ?int $cm_country_sub_region_id = NULL;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $cm_country_inactive = 0;
}