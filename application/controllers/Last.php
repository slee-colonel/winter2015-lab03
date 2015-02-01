<?php

class Last extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The last page
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // call the function to grab the last quote data
        $record = $this->quotes->last();
        
        // match up the data required by the justone page to the data given to us
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        // render the page
        $this->render();
    }

}
