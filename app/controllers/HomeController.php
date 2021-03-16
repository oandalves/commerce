<?php

    class HomeController extends Controller {

        public function index() {
            $items = $this->model('Item')->get();
            /*
            $item = new stdClass();
            $item->name = 'Anderson';
            $items = [$item];
            */

            $this->view('home/index', ['items'=>$items]);
        }

    }
?>