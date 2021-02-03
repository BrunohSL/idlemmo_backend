<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller {
    use RESTActions;

    public function index() {
        $items = DB::table('item')
            ->select()
            ->get();

        $items = \json_encode($items, true);

        print_r($items);
    }
}
