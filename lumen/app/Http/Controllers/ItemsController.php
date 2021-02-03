<?php
namespace App\Http\Controllers;

use App\Item;

class ItemsController extends Controller {
    // private $_model = "App\Item";
    use RESTActions;

    public function index($id) {
        return User::findOrFail($id);
        // $m = $this->_model;
        // return $this->respond(Response::HTTP_OK, $m::with('item')->get());
    }

    // public function show_user_messages($id) {
    //     $m = $this->_model;
    //     $model = $m::where('user_id', $id)->get();

    //     if (is_null($model)) {
    //         return $this->respond(Response::HTTP_NOT_FOUND);
    //     }

    //     return $this->respond(Response::HTTP_OK, $model);
    // }
}
