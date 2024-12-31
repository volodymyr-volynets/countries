<?php

namespace Numbers\Countries\Countries\Model\Address;
class TypesAR extends \Object\ActiveRecord {



    /**
     * @var string
     */
    public string $object_table_class = \Numbers\Countries\Countries\Model\Address\Types::class;

    /**
     * @var array
     */
    public array $object_table_pk = ['cm_addrtype_tenant_id','cm_addrtype_code'];
    /**
     * Tenant #
     *
     *
     *
     * {domain{tenant_id}}
     *
     * @var int|null Domain: tenant_id Type: integer
     */
    public int|null $cm_addrtype_tenant_id = NULL {
                        get => $this->cm_addrtype_tenant_id;
                        set {
                            $this->setFullPkAndFilledColumn('cm_addrtype_tenant_id', $value);
                            $this->cm_addrtype_tenant_id = $value;
                        }
                    }

    /**
     * Code
     *
     *
     *
     * {domain{type_code}}
     *
     * @var string|null Domain: type_code Type: varchar
     */
    public string|null $cm_addrtype_code = null {
                        get => $this->cm_addrtype_code;
                        set {
                            $this->setFullPkAndFilledColumn('cm_addrtype_code', $value);
                            $this->cm_addrtype_code = $value;
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
    public string|null $cm_addrtype_name = null {
                        get => $this->cm_addrtype_name;
                        set {
                            $this->setFullPkAndFilledColumn('cm_addrtype_name', $value);
                            $this->cm_addrtype_name = $value;
                        }
                    }

    /**
     * Global
     *
     *
     *
     *
     *
     * @var int|null Type: boolean
     */
    public int|null $cm_addrtype_global = 0 {
                        get => $this->cm_addrtype_global;
                        set {
                            $this->setFullPkAndFilledColumn('cm_addrtype_global', $value);
                            $this->cm_addrtype_global = $value;
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
    public int|null $cm_addrtype_inactive = 0 {
                        get => $this->cm_addrtype_inactive;
                        set {
                            $this->setFullPkAndFilledColumn('cm_addrtype_inactive', $value);
                            $this->cm_addrtype_inactive = $value;
                        }
                    }
}
