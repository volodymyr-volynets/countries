<?php

namespace Numbers\Countries\Currencies\Model;
class TypesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Currencies\Model\Types::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cy_currtype_tenant_id','cy_currtype_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cy_currtype_tenant_id = NULL {
                        get => $this->cy_currtype_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currtype_tenant_id', $value);
                            $this->cy_currtype_tenant_id = $value;
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
    public string|null $cy_currtype_code = null {
                        get => $this->cy_currtype_code;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currtype_code', $value);
                            $this->cy_currtype_code = $value;
                        }
                    }

    /**
     * Name
     *
     *
     *
     * {domain{name}}
     *
     * @var string|null Domain: name Type: varchar
     */
    public string|null $cy_currtype_name = null {
                        get => $this->cy_currtype_name;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currtype_name', $value);
                            $this->cy_currtype_name = $value;
                        }
                    }

    /**
     * Primary
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $cy_currtype_primary = 0 {
                        get => $this->cy_currtype_primary;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currtype_primary', $value);
                            $this->cy_currtype_primary = $value;
                        }
                    }

    /**
     * Inactive
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $cy_currtype_inactive = 0 {
                        get => $this->cy_currtype_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currtype_inactive', $value);
                            $this->cy_currtype_inactive = $value;
                        }
                    }

    /**
     * Optimistic Lock
     *
     *
     *
     * {domain{optimistic_lock}}
     *
     * @var string|null Domain: optimistic_lock Type: timestamp
     */
    public string|null $cy_currtype_optimistic_lock = 'now()' {
                        get => $this->cy_currtype_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currtype_optimistic_lock', $value);
                            $this->cy_currtype_optimistic_lock = $value;
                        }
                    }
}
