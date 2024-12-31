<?php

namespace Numbers\Countries\Currencies\Model\Type;
class OrganizationsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Currencies\Model\Type\Organizations::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cy_curtypeorg_tenant_id','cy_curtypeorg_type_code','cy_curtypeorg_organization_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cy_curtypeorg_tenant_id = NULL {
                        get => $this->cy_curtypeorg_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cy_curtypeorg_tenant_id', $value);
                            $this->cy_curtypeorg_tenant_id = $value;
                        }
                    }

    /**
     * Type Code
     *
     *
     *
     * {domain{currency_type}}
     *
     * @var string|null Domain: currency_type Type: varchar
     */
    public string|null $cy_curtypeorg_type_code = null {
                        get => $this->cy_curtypeorg_type_code;
                        set {
                            $this->setFullPkAndFilledColumn('cy_curtypeorg_type_code', $value);
                            $this->cy_curtypeorg_type_code = $value;
                        }
                    }

    /**
     * Organization #
     *
     *
     *
     * {domain{organization_id}}
     *
     * @var int|null Domain: organization_id Type: integer
     */
    public int|null $cy_curtypeorg_organization_id = NULL {
                        get => $this->cy_curtypeorg_organization_id;
                        set {
                            $this->setFullPkAndFilledColumn('cy_curtypeorg_organization_id', $value);
                            $this->cy_curtypeorg_organization_id = $value;
                        }
                    }
}
