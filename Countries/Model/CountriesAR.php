<?php

namespace Numbers\Countries\Countries\Model;
class CountriesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Countries\Model\Countries::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cm_country_tenant_id','cm_country_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cm_country_tenant_id = NULL {
                        get => $this->cm_country_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cm_country_tenant_id', $value);
                            $this->cm_country_tenant_id = $value;
                        }
                    }

    /**
     * Country Code
     *
     *
     *
     * {domain{country_code}}
     *
     * @var string|null Domain: country_code Type: char
     */
    public string|null $cm_country_code = null {
                        get => $this->cm_country_code;
                        set {
                            $this->setFullPkAndFilledColumn('cm_country_code', $value);
                            $this->cm_country_code = $value;
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
    public string|null $cm_country_name = null {
                        get => $this->cm_country_name;
                        set {
                            $this->setFullPkAndFilledColumn('cm_country_name', $value);
                            $this->cm_country_name = $value;
                        }
                    }

    /**
     * Code(3)
     *
     *
     *
     * {domain{country_code3}}
     *
     * @var string|null Domain: country_code3 Type: char
     */
    public string|null $cm_country_code3 = null {
                        get => $this->cm_country_code3;
                        set {
                            $this->setFullPkAndFilledColumn('cm_country_code3', $value);
                            $this->cm_country_code3 = $value;
                        }
                    }

    /**
     * Number
     *
     *
     *
     * {domain{country_number}}
     *
     * @var int|null Domain: country_number Type: smallint
     */
    public int|null $cm_country_number = NULL {
                        get => $this->cm_country_number;
                        set {
                            $this->setFullPkAndFilledColumn('cm_country_number', $value);
                            $this->cm_country_number = $value;
                        }
                    }

    /**
     * Region #
     *
     *
     *
     * {domain{country_number}}
     *
     * @var int|null Domain: country_number Type: smallint
     */
    public int|null $cm_country_region_id = NULL {
                        get => $this->cm_country_region_id;
                        set {
                            $this->setFullPkAndFilledColumn('cm_country_region_id', $value);
                            $this->cm_country_region_id = $value;
                        }
                    }

    /**
     * Sub Region #
     *
     *
     *
     * {domain{country_number}}
     *
     * @var int|null Domain: country_number Type: smallint
     */
    public int|null $cm_country_sub_region_id = NULL {
                        get => $this->cm_country_sub_region_id;
                        set {
                            $this->setFullPkAndFilledColumn('cm_country_sub_region_id', $value);
                            $this->cm_country_sub_region_id = $value;
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
    public int|null $cm_country_inactive = 0 {
                        get => $this->cm_country_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('cm_country_inactive', $value);
                            $this->cm_country_inactive = $value;
                        }
                    }
}
