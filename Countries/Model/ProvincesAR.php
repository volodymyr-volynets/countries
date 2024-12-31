<?php

namespace Numbers\Countries\Countries\Model;
class ProvincesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Countries\Model\Provinces::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cm_province_tenant_id','cm_province_country_code','cm_province_province_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cm_province_tenant_id = NULL {
                        get => $this->cm_province_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cm_province_tenant_id', $value);
                            $this->cm_province_tenant_id = $value;
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
    public string|null $cm_province_country_code = null {
                        get => $this->cm_province_country_code;
                        set {
                            $this->setFullPkAndFilledColumn('cm_province_country_code', $value);
                            $this->cm_province_country_code = $value;
                        }
                    }

    /**
     * Province Code
     *
     *
     *
     * {domain{province_code}}
     *
     * @var string|null Domain: province_code Type: varchar
     */
    public string|null $cm_province_province_code = null {
                        get => $this->cm_province_province_code;
                        set {
                            $this->setFullPkAndFilledColumn('cm_province_province_code', $value);
                            $this->cm_province_province_code = $value;
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
    public string|null $cm_province_name = null {
                        get => $this->cm_province_name;
                        set {
                            $this->setFullPkAndFilledColumn('cm_province_name', $value);
                            $this->cm_province_name = $value;
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
    public int|null $cm_province_inactive = 0 {
                        get => $this->cm_province_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('cm_province_inactive', $value);
                            $this->cm_province_inactive = $value;
                        }
                    }
}
