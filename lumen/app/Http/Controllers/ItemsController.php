<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ItemsController extends Controller {
    use RESTActions;

    public function index() {
        $items = DB::table('item')
            ->get();

        $items = \json_encode($items, true);

        print_r($items);
    }

    public function show($id) {
        $item = DB::table('item')
            ->where('id', $id)
            ->get();

        $item = \json_encode($item, true);

        print_r($item);
    }

    public function store(Request $request) {
        print_r("Aqui\n");
        print_r($request);
        // DB::table('users')->insert([
        //     'name' => '',
        //     'price' => 0,
        //     'type' => 0,
        //     'level' => 0,
        // ]);
    }

    public function destroy($id) {
        DB::table('item')->where('id', $id)->delete();
    }
}
