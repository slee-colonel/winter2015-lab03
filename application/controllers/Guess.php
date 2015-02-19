<?php

class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The guess page
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // call the function to grab the fourth quote data
        $record = $this->quotes->get('4');
        
        // match up the data required by the justone page to the data given to us
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        // render the page
        $this->render();
    }

}