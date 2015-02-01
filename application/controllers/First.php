<?php

class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The first page
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // call the function to grab the first quote data
        $record = $this->quotes->first();
        
        // match up the data required by the justone page to the data given to us
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        // render the page
        $this->render();
    }

    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // call the function to grab the first quote data
        $record = $this->quotes->first();
        
        // match up the data required by the justone page to the data given to us
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        // render the page
        $this->render();
    }
    
    function gimme() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // call the function to grab the first quote data
        $record = $this->quotes->get('3');
        
        // match up the data required by the justone page to the data given to us
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        // render the page
        $this->render();
    }
}
