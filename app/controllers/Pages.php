<?php
    class Pages extends Controller {
        public function __construct() {
            
        }

        public function index() {     
            if(isLoggedIn()) {
                redirect('posts');
            }

            $data = [
            'title' => 'SharePosts',
            'description' => 'Social network wuhu'
            ];

            $this->view('pages/index', $data);
        }

        public function about() {
            $data = ['title' => 'About Us',
            'description' => "App to social social~"
            ];
            $this->view('pages/about', $data);
        }
    }