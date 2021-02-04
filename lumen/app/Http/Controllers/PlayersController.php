<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller {
    private $_player;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Player $player) {
        $this->_player = $player;
    }
}
