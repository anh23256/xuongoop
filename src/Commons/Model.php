<?php

namespace Ductong\XuongOop\Commons;

class Model
{
    protected $conn;

    public function __construct()
    {
        // THỰC HIỆN KẾT NỐI TỰ ĐỘNG KHI KHỞI TẠO BẤT KỲ
        //     CLASS NÀO LIÊN QUAN ĐẾN MODEL
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
