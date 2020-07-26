<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

/**
 * Board Controller
 */
class BoardController extends BaseController {
    public function selectBoardList() {
        return view("/board/list", []);
    }
}
