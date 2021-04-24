<?php
    /*
        Base Controller
        Loads the models and views
    */

    class Controller {
        // Load models
        public function model($model) {
            // Require Model file
            require_once '../app/models/' . $model . '.php';

            // Instantiate Model
            return new $model;
        }

        // View Model
        public function view($view, $data = []) {
            // Check for the view file
            if (file_exists('../app/views/' . $view . '.php')) {
                // Require View file
                require_once '../app/views/' . $view . '.php';
            }
            else {
                // View does not exists
                die('View does not exists');
            }
        }
    }
?>