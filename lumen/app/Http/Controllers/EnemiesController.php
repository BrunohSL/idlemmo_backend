<?php
namespace App\Http\Controllers;
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
}
