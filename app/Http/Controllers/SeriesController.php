<?php

namespace App\Http\Controllers;

Class SeriesController{

    public function listarsereies(){
        $series = [
            'Serie 1',
            'Serie 2',
            'Serie 3',
            'Serie 4'
        ];

        $html = '<ul>';
        foreach($series as $serie){
            $html.= '<li>' . $serie . '</li>';
        }
        $html.= '</ul>';

        echo $html;
    }
}