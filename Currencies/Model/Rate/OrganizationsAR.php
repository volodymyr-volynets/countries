<?php

namespace Numbers\Countries\Currencies\Model\Rate;
class OrganizationsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Currencies\Model\Rate\Organizations::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cy_curateorg_tenant_id','cy_curateorg_rate_id','cy_curateorg_organization_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cy_curateorg_tenant_id = NULL {
                        get => $this->cy_curateorg_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cy_curateorg_tenant_id', $value);
                            $this->cy_curateorg_tenant_id = $value;
                        }
                    }

    /**
     * Rate #
     *
     *
     *
     * {domain{currency_rate_id}}
     *
     * @var int|null Domain: currency_rate_id Type: bigint
     */
    public int|null $cy_curateorg_rate_id = NULL {
                        get => $this->cy_curateorg_rate_id;
                        set {
                            $this->setFullPkAndFilledColumn('cy_curateorg_rate_id', $value);
                            $this->cy_curateorg_rate_id = $value;
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
    public int|null $cy_curateorg_organization_id = NULL {
                        get => $this->cy_curateorg_organization_id;
                        set {
                            $this->setFullPkAndFilledColumn('cy_curateorg_organization_id', $value);
                            $this->cy_curateorg_organization_id = $value;
                        }
                    }
}
