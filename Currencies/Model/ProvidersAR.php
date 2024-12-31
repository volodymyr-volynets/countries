<?php

namespace Numbers\Countries\Currencies\Model;
class ProvidersAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Currencies\Model\Providers::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cy_provider_tenant_id','cy_provider_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cy_provider_tenant_id = NULL {
                        get => $this->cy_provider_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cy_provider_tenant_id', $value);
                            $this->cy_provider_tenant_id = $value;
                        }
                    }

    /**
     * Code
     *
     *
     *
     * {domain{group_code}}
     *
     * @var string|null Domain: group_code Type: varchar
     */
    public string|null $cy_provider_code = null {
                        get => $this->cy_provider_code;
                        set {
                            $this->setFullPkAndFilledColumn('cy_provider_code', $value);
                            $this->cy_provider_code = $value;
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
    public string|null $cy_provider_name = null {
                        get => $this->cy_provider_name;
                        set {
                            $this->setFullPkAndFilledColumn('cy_provider_name', $value);
                            $this->cy_provider_name = $value;
                        }
                    }

    /**
     * Method
     *
     *
     *
     *
     *
     * @var string|null Type: text
     */
    public string|null $cy_provider_method = null {
                        get => $this->cy_provider_method;
                        set {
                            $this->setFullPkAndFilledColumn('cy_provider_method', $value);
                            $this->cy_provider_method = $value;
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
    public string|null $cy_provider_home_currency_code = null {
                        get => $this->cy_provider_home_currency_code;
                        set {
                            $this->setFullPkAndFilledColumn('cy_provider_home_currency_code', $value);
                            $this->cy_provider_home_currency_code = $value;
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
    public int|null $cy_provider_inactive = 0 {
                        get => $this->cy_provider_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('cy_provider_inactive', $value);
                            $this->cy_provider_inactive = $value;
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
    public string|null $cy_provider_optimistic_lock = 'now()' {
                        get => $this->cy_provider_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('cy_provider_optimistic_lock', $value);
                            $this->cy_provider_optimistic_lock = $value;
                        }
                    }
}
