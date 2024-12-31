<?php

namespace Numbers\Countries\Currencies\Model;
class RatesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Currencies\Model\Rates::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cy_currrate_tenant_id','cy_currrate_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cy_currrate_tenant_id = NULL {
                        get => $this->cy_currrate_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currrate_tenant_id', $value);
                            $this->cy_currrate_tenant_id = $value;
                        }
                    }

    /**
     * Rate #
     *
     *
     *
     * {domain{currency_rate_id_sequence}}
     *
     * @var int|null Domain: currency_rate_id_sequence Type: bigserial
     */
    public int|null $cy_currrate_id = null {
                        get => $this->cy_currrate_id;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currrate_id', $value);
                            $this->cy_currrate_id = $value;
                        }
                    }

    /**
     * Datetime
     *
     *
     *
     *
     *
     * @var string|null Type: datetime
     */
    public string|null $cy_currrate_datetime = null {
                        get => $this->cy_currrate_datetime;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currrate_datetime', $value);
                            $this->cy_currrate_datetime = $value;
                        }
                    }

    /**
     * Type
     *
     *
     *
     * {domain{currency_type}}
     *
     * @var string|null Domain: currency_type Type: varchar
     */
    public string|null $cy_currrate_currency_type = null {
                        get => $this->cy_currrate_currency_type;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currrate_currency_type', $value);
                            $this->cy_currrate_currency_type = $value;
                        }
                    }

    /**
     * Source Currency
     *
     *
     *
     * {domain{currency_code}}
     *
     * @var string|null Domain: currency_code Type: char
     */
    public string|null $cy_currrate_source_currency_code = null {
                        get => $this->cy_currrate_source_currency_code;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currrate_source_currency_code', $value);
                            $this->cy_currrate_source_currency_code = $value;
                        }
                    }

    /**
     * Home Currency
     *
     *
     *
     * {domain{currency_code}}
     *
     * @var string|null Domain: currency_code Type: char
     */
    public string|null $cy_currrate_home_currency_code = null {
                        get => $this->cy_currrate_home_currency_code;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currrate_home_currency_code', $value);
                            $this->cy_currrate_home_currency_code = $value;
                        }
                    }

    /**
     * Rate
     *
     *
     *
     * {domain{currency_rate}}
     *
     * @var mixed Domain: currency_rate Type: bcnumeric
     */
    public mixed $cy_currrate_rate = '1.00000000' {
                        get => $this->cy_currrate_rate;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currrate_rate', $value);
                            $this->cy_currrate_rate = $value;
                        }
                    }

    /**
     * Provider Name
     *
     *
     *
     * {domain{name}}
     *
     * @var string|null Domain: name Type: varchar
     */
    public string|null $cy_currrate_provider_name = null {
                        get => $this->cy_currrate_provider_name;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currrate_provider_name', $value);
                            $this->cy_currrate_provider_name = $value;
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
    public int|null $cy_currrate_inactive = 0 {
                        get => $this->cy_currrate_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currrate_inactive', $value);
                            $this->cy_currrate_inactive = $value;
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
    public string|null $cy_currrate_optimistic_lock = 'now()' {
                        get => $this->cy_currrate_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currrate_optimistic_lock', $value);
                            $this->cy_currrate_optimistic_lock = $value;
                        }
                    }
}
