<?php

namespace Ductong\XuongOop\Controllers\Admin;

use Ductong\XuongOop\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard() {
        $this->renderViewAdmin(__FUNCTION__);
    }
}