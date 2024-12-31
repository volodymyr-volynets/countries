<?php

namespace Numbers\Countries\Countries\Model;
class PostalCodesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Countries\Model\PostalCodes::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cm_postal_tenant_id','cm_postal_country_code','cm_postal_postal_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cm_postal_tenant_id = NULL {
                        get => $this->cm_postal_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cm_postal_tenant_id', $value);
                            $this->cm_postal_tenant_id = $value;
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
    public string|null $cm_postal_country_code = null {
                        get => $this->cm_postal_country_code;
                        set {
                            $this->setFullPkAndFilledColumn('cm_postal_country_code', $value);
                            $this->cm_postal_country_code = $value;
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
    public string|null $cm_postal_province_code = null {
                        get => $this->cm_postal_province_code;
                        set {
                            $this->setFullPkAndFilledColumn('cm_postal_province_code', $value);
                            $this->cm_postal_province_code = $value;
                        }
                    }

    /**
     * Postal Code
     *
     *
     *
     * {domain{postal_code}}
     *
     * @var string|null Domain: postal_code Type: varchar
     */
    public string|null $cm_postal_postal_code = null {
                        get => $this->cm_postal_postal_code;
                        set {
                            $this->setFullPkAndFilledColumn('cm_postal_postal_code', $value);
                            $this->cm_postal_postal_code = $value;
                        }
                    }

    /**
     * City
     *
     *
     *
     * {domain{name}}
     *
     * @var string|null Domain: name Type: varchar
     */
    public string|null $cm_postal_city = null {
                        get => $this->cm_postal_city;
                        set {
                            $this->setFullPkAndFilledColumn('cm_postal_city', $value);
                            $this->cm_postal_city = $value;
                        }
                    }

    /**
     * Latitude
     *
     *
     *
     * {domain{geo_coordinate}}
     *
     * @var float|null Domain: geo_coordinate Type: numeric
     */
    public float|null $cm_postal_latitude = NULL {
                        get => $this->cm_postal_latitude;
                        set {
                            $this->setFullPkAndFilledColumn('cm_postal_latitude', $value);
                            $this->cm_postal_latitude = $value;
                        }
                    }

    /**
     * Longitude
     *
     *
     *
     * {domain{geo_coordinate}}
     *
     * @var float|null Domain: geo_coordinate Type: numeric
     */
    public float|null $cm_postal_longitude = NULL {
                        get => $this->cm_postal_longitude;
                        set {
                            $this->setFullPkAndFilledColumn('cm_postal_longitude', $value);
                            $this->cm_postal_longitude = $value;
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
    public int|null $cm_postal_inactive = 0 {
                        get => $this->cm_postal_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('cm_postal_inactive', $value);
                            $this->cm_postal_inactive = $value;
                        }
                    }
}
