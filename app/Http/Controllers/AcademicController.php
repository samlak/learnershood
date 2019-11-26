<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Serpwow\GoogleSearchResults\GoogleSearchResults;

class AcademicController extends Controller
{
    public function testing()
    {
        // composer autoload
        // require "vendor/autoload.php";

        // create the serpwow object, passing in our API key
        $serpwow = new GoogleSearchResults("demo");

        // set up the search parameters
        $params = [
        "q" => "pizza"
        ];

        // retrieve the search results as JSON
        $result = $serpwow->json($params);

        // pretty-print the JSON result
        print_r($result);
    }
}
