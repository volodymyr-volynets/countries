<?php

namespace Numbers\Countries\Countries\Model;
class RegionsAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Countries\Model\Regions::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cm_region_tenant_id','cm_region_id'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cm_region_tenant_id = NULL {
                        get => $this->cm_region_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cm_region_tenant_id', $value);
                            $this->cm_region_tenant_id = $value;
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
    public int|null $cm_region_id = NULL {
                        get => $this->cm_region_id;
                        set {
                            $this->setFullPkAndFilledColumn('cm_region_id', $value);
                            $this->cm_region_id = $value;
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
    public string|null $cm_region_name = null {
                        get => $this->cm_region_name;
                        set {
                            $this->setFullPkAndFilledColumn('cm_region_name', $value);
                            $this->cm_region_name = $value;
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
    public int|null $cm_region_inactive = 0 {
                        get => $this->cm_region_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('cm_region_inactive', $value);
                            $this->cm_region_inactive = $value;
                        }
                    }
}
