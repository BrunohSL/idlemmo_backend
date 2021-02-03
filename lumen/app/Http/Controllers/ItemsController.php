<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller {
    private $_item;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Item $item) {
        $this->_item = $item;
    }

    public function index() {
        $items = DB::table('items')
            ->get();

        $items = \json_encode($items, true);

        print_r($items);
    }

    public function show($id) {
        $item = DB::table('items')
            ->where('id', $id)
            ->get();

        $item = \json_encode($item, true);

        print_r($item);
    }

    public function store(Request $request) {
        $this->_item->create($request->all());

        return response()
            ->json(['data' => [
                'message' => 'Item created!']
            ]);
    }

    public function update($id, Request $request) {
        $item = $this->_item->find($id);

        $item->update($request->all());

        return response()
            ->json([
                'data' => [
                    'message' => 'Item updated!'
                ]
            ]);
    }

    public function destroy($id) {
        $item = $this->_item->find($id);

        $item->delete();

        return response()
            ->json([
                'data' => [
                    'message' => 'Item deleted!'
                ]
            ]);
    }
}
