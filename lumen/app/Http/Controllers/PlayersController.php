<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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

    public function index() {
        $players = DB::table('players')
            ->get();

        $players = \json_encode($players, true);

        print_r($players);
    }

    public function show($id) {
        $player = DB::table('players')
            ->where('id', $id)
            ->get();

        // $enemies = \json_encode($enemies, true);

        return response()
            ->json($player);
    }
}
