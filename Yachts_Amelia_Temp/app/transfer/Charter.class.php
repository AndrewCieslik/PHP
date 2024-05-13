<?php

namespace app\transfer;

class Charter {
    public $id_charter;
    public $id_user;
    public $id_yacht;
    public $date_start;
    public $date_end;
    public $approved;

    public function __construct($id_charter, $id_user, $id_yacht, $date_start, $date_end, $approved) {
        $this->id_charter = $id_charter;
        $this->id_user = $id_user;
        $this->id_yacht = $id_yacht;
        $this->date_start = $date_start;
        $this->date_end = $date_end;
        $this->approved = $approved;
    }
}
