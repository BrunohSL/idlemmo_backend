<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Enemy;

class EnemiesController extends Controller {
    private $_enemy;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Enemy $enemy) {
        $this->_enemy = $enemy;
    }

    public function index() {
        $enemies = DB::table('enemies')
            ->get();

        $enemies = \json_encode($enemies, true);

        print_r($enemies);
    }
}
