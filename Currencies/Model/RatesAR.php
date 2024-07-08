<?php

namespace Numbers\Countries\Currencies\Model;
class RatesAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Countries\Currencies\Model\Rates::class;

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
	public ?int $cy_currrate_tenant_id = NULL;

	/**
	 * Rate #
	 *
	 *
	 *
	 * {domain{currency_rate_id_sequence}}
	 *
	 * @var int Domain: currency_rate_id_sequence Type: bigserial
	 */
	public ?int $cy_currrate_id = null;

	/**
	 * Datetime
	 *
	 *
	 *
	 *
	 *
	 * @var string Type: datetime
	 */
	public ?string $cy_currrate_datetime = null;

	/**
	 * Type
	 *
	 *
	 *
	 * {domain{currency_type}}
	 *
	 * @var string Domain: currency_type Type: varchar
	 */
	public ?string $cy_currrate_currency_type = null;

	/**
	 * Source Currency
	 *
	 *
	 *
	 * {domain{currency_code}}
	 *
	 * @var string Domain: currency_code Type: char
	 */
	public ?string $cy_currrate_source_currency_code = null;

	/**
	 * Home Currency
	 *
	 *
	 *
	 * {domain{currency_code}}
	 *
	 * @var string Domain: currency_code Type: char
	 */
	public ?string $cy_currrate_home_currency_code = null;

	/**
	 * Rate
	 *
	 *
	 *
	 * {domain{currency_rate}}
	 *
	 * @var bcnumeric Domain: currency_rate Type: bcnumeric
	 */
	public ?bcnumeric $cy_currrate_rate = '1.00000000';

	/**
	 * Provider Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $cy_currrate_provider_name = null;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $cy_currrate_inactive = 0;

	/**
	 * Optimistic Lock
	 *
	 *
	 *
	 * {domain{optimistic_lock}}
	 *
	 * @var string Domain: optimistic_lock Type: timestamp
	 */
	public ?string $cy_currrate_optimistic_lock = 'now()';
}