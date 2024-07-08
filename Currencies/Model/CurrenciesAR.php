<?php

namespace Numbers\Countries\Currencies\Model;
class CurrenciesAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Countries\Currencies\Model\Currencies::class;

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
	public ?int $cy_currency_tenant_id = NULL;

	/**
	 * Currency Code
	 *
	 *
	 *
	 * {domain{currency_code}}
	 *
	 * @var string Domain: currency_code Type: char
	 */
	public ?string $cy_currency_code = null;

	/**
	 * Name
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $cy_currency_name = null;

	/**
	 * Symbol
	 *
	 *
	 *
	 * {domain{name}}
	 *
	 * @var string Domain: name Type: varchar
	 */
	public ?string $cy_currency_symbol = null;

	/**
	 * Fraction Digits
	 *
	 *
	 * {options_model{\Numbers\Countries\Currencies\Model\Fractions}}
	 * {domain{fraction_digits}}
	 *
	 * @var int Domain: fraction_digits Type: smallint
	 */
	public ?int $cy_currency_fraction_digits = 2;

	/**
	 * Inactive
	 *
	 *
	 *
	 *
	 *
	 * @var int Type: boolean
	 */
	public ?int $cy_currency_inactive = 0;

	/**
	 * Optimistic Lock
	 *
	 *
	 *
	 * {domain{optimistic_lock}}
	 *
	 * @var string Domain: optimistic_lock Type: timestamp
	 */
	public ?string $cy_currency_optimistic_lock = 'now()';
}