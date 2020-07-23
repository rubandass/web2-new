<?php

namespace App\Http\Controllers;

use App\Country;
use App\Player;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        $players = Player::all();
        return view('indexPage', compact('countries', 'players'));
    }

    public function searchPlayers()
    {
        $roles = Player::distinct()->pluck('role')->sort();
        return view('searchPage', compact('roles'));
    }

    public function showPlayers()
    {
        $selectedRole = request()->input('role');
        if ($selectedRole == "Show All") 
        {
            $result = Player::all()->sortBy('name');
        } 
        else
        {
            $result = Player::where('role', '=', $selectedRole)->get()->sortBy('name');
        }
        return view('showPlayersPage', compact('result'));
    }

    public function fileReadCSV()
    {
        $filename = 'public/cricket.csv';
        // The nested array to hold all the arrays
        $complete = [];
        // Open the file for reading
        if (($handle = fopen("$filename", "r")) !== FALSE) {
            // Each line in the file is converted into an individual array that we call $row
            // The items of the array are comma separated
            $header = fgetcsv($handle, ","); //reading the first line and store it an array as headers.
            while (($row = fgetcsv($handle, ",")) !== FALSE) {
                // Each individual array is being pushed into the nested array
                $complete[] = array_combine($header,$row);
            }
            // Close the file
            fclose($handle);
        }
        return json_encode($complete);
    }
}
