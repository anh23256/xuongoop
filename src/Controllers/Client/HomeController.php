<?php 

namespace Ductong\XuongOop\Controllers\Client;

use Ductong\XuongOop\Commons\Controller;
use Ductong\XuongOop\Commons\Helper;
use Ductong\XuongOop\Models\User;

class HomeController extends Controller
{
    public function index() {

        $user = new User();

        Helper::debug($user);

        $name = 'DucTV44';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}