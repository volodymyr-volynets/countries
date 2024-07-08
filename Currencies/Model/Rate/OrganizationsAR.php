<?php

namespace Numbers\Countries\Currencies\Model\Rate;
class OrganizationsAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Countries\Currencies\Model\Rate\Organizations::class;

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
	public ?int $cy_curateorg_tenant_id = NULL;

	/**
	 * Rate #
	 *
	 *
	 *
	 * {domain{currency_rate_id}}
	 *
	 * @var int Domain: currency_rate_id Type: bigint
	 */
	public ?int $cy_curateorg_rate_id = NULL;

	/**
	 * Organization #
	 *
	 *
	 *
	 * {domain{organization_id}}
	 *
	 * @var int Domain: organization_id Type: integer
	 */
	public ?int $cy_curateorg_organization_id = NULL;
}