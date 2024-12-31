<?php

namespace Numbers\Countries\Currencies\Model;
class CurrenciesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Currencies\Model\Currencies::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cy_currency_tenant_id','cy_currency_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cy_currency_tenant_id = NULL {
                        get => $this->cy_currency_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currency_tenant_id', $value);
                            $this->cy_currency_tenant_id = $value;
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
    public string|null $cy_currency_code = null {
                        get => $this->cy_currency_code;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currency_code', $value);
                            $this->cy_currency_code = $value;
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
    public string|null $cy_currency_name = null {
                        get => $this->cy_currency_name;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currency_name', $value);
                            $this->cy_currency_name = $value;
                        }
                    }

    /**
     * Symbol
     *
     *
     *
     * {domain{name}}
     *
     * @var string|null Domain: name Type: varchar
     */
    public string|null $cy_currency_symbol = null {
                        get => $this->cy_currency_symbol;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currency_symbol', $value);
                            $this->cy_currency_symbol = $value;
                        }
                    }

    /**
     * Fraction Digits
     *
     *
     * {options_model{\Numbers\Countries\Currencies\Model\Fractions}}
     * {domain{fraction_digits}}
     *
     * @var int|null Domain: fraction_digits Type: smallint
     */
    public int|null $cy_currency_fraction_digits = 2 {
                        get => $this->cy_currency_fraction_digits;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currency_fraction_digits', $value);
                            $this->cy_currency_fraction_digits = $value;
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
    public int|null $cy_currency_inactive = 0 {
                        get => $this->cy_currency_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currency_inactive', $value);
                            $this->cy_currency_inactive = $value;
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
    public string|null $cy_currency_optimistic_lock = 'now()' {
                        get => $this->cy_currency_optimistic_lock;
                        set {
                            $this->setFullPkAndFilledColumn('cy_currency_optimistic_lock', $value);
                            $this->cy_currency_optimistic_lock = $value;
                        }
                    }
}
