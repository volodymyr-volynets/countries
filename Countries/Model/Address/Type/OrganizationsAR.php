<?php

namespace Numbers\Countries\Countries\Model\Address\Type;
class OrganizationsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Countries\Model\Address\Type\Organizations::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cm_addrtporg_tenant_id','cm_addrtporg_type_code','cm_addrtporg_organization_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cm_addrtporg_tenant_id = NULL {
                        get => $this->cm_addrtporg_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cm_addrtporg_tenant_id', $value);
                            $this->cm_addrtporg_tenant_id = $value;
                        }
                    }

    /**
     * Code
     *
     *
     *
     * {domain{type_code}}
     *
     * @var string|null Domain: type_code Type: varchar
     */
    public string|null $cm_addrtporg_type_code = null {
                        get => $this->cm_addrtporg_type_code;
                        set {
                            $this->setFullPkAndFilledColumn('cm_addrtporg_type_code', $value);
                            $this->cm_addrtporg_type_code = $value;
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
    public int|null $cm_addrtporg_organization_id = NULL {
                        get => $this->cm_addrtporg_organization_id;
                        set {
                            $this->setFullPkAndFilledColumn('cm_addrtporg_organization_id', $value);
                            $this->cm_addrtporg_organization_id = $value;
                        }
                    }
}
