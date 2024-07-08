<?php

namespace Numbers\Countries\Currencies\Model\Type;
class OrganizationsAR extends \Object\ActiveRecord {
	/**
	 * @var string
	 */
	public string $object_table_class = \Numbers\Countries\Currencies\Model\Type\Organizations::class;

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
	public ?int $cy_curtypeorg_tenant_id = NULL;

	/**
	 * Type Code
	 *
	 *
	 *
	 * {domain{currency_type}}
	 *
	 * @var string Domain: currency_type Type: varchar
	 */
	public ?string $cy_curtypeorg_type_code = null;

	/**
	 * Organization #
	 *
	 *
	 *
	 * {domain{organization_id}}
	 *
	 * @var int Domain: organization_id Type: integer
	 */
	public ?int $cy_curtypeorg_organization_id = NULL;
}