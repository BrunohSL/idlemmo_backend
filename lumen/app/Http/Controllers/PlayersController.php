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

        return response()
            ->json($players);
    }

    public function show($id) {
        $player = DB::table('players')
            ->where('id', $id)
            ->get();

        return response()
            ->json($player);
    }

    public function store(Request $request) {
        $this->_player->create($request->all());

        return response()
            ->json(['data' => [
                'message' => 'Player created!']
            ]);
    }

    public function update($id, Request $request) {
        $item = $this->_player->find($id);

        $item->update($request->all());

        return response()
            ->json([
                'data' => [
                    'message' => 'Player updated!'
                ]
            ]);
    }

    public function destroy($id) {
        $item = $this->_player->find($id);

        $item->delete();

        return response()
            ->json([
                'data' => [
                    'message' => 'Player deleted!'
                ]
            ]);
    }
}
