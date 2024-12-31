<?php

namespace Numbers\Countries\Currencies\Model\Currency;
class OrganizationsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Currencies\Model\Currency\Organizations::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cy_currorg_tenant_id','cy_currorg_currency_code','cy_currorg_organization_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cy_currorg_tenant_id = NULL {
                        get => $this->cy_currorg_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currorg_tenant_id', $value);
                            $this->cy_currorg_tenant_id = $value;
                        }
                    }

    /**
     * Currency Code
     *
     *
     *
     * {domain{currency_code}}
     *
     * @var string|null Domain: currency_code Type: char
     */
    public string|null $cy_currorg_currency_code = null {
                        get => $this->cy_currorg_currency_code;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currorg_currency_code', $value);
                            $this->cy_currorg_currency_code = $value;
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
    public int|null $cy_currorg_organization_id = NULL {
                        get => $this->cy_currorg_organization_id;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currorg_organization_id', $value);
                            $this->cy_currorg_organization_id = $value;
                        }
                    }
}
