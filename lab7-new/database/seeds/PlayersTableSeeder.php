<?php

use App\Http\Controllers\PageController;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$pageController = new PageController();
        $players = json_decode(($pageController->fileReadCSV()), true);

        foreach ($players as $player) {
            DB::table('players')->insert([
                [
                    'name' => $player['name'],
                    'age' => $player['age'],
                    'role' => $player['role'],
                    'batting' => $player['batting'],
                    'bowling' => $player['bowling'],
                    'image' => $player['image'],
                    'odiRuns' => $player['odiRuns'],
                    'country_id' => $player['country_id']
                ]
            ]);
        }
        */
        $host = "202.49.5.169"; // Host name.
        $db_user = "jhonr1"; //mysql user
        $db_password = "1000074881"; //mysql pass
        $db = 'jhonr1_in612_lab7'; // Database name.

        $con = mysqli_connect($host, $db_user, $db_password, $db);
        $filename = 'public/cricket.csv';
        $file = fopen($filename, "r");
        $header = fgetcsv($file, ","); //reading the first line and store it an array as headers.
        // Use implode() function to join 
        // comma in the array 
        $columnNames = implode(', ', $header);

        // Display the comma separated list 
        //$columnNames = print_r($list);

        while (($row = fgetcsv($file, ",")) !== FALSE) {
            $valuesList = implode("', '", $row);
            $sql = "INSERT into players($columnNames) values('$valuesList')";
            print_r($sql);
            mysqli_query($con, $sql);
        }
        fclose($file);

        /* foreach ($players as $player) {
            DB::table('players')->insert([
                [
                    'name' => $player[0], 
                    'age' => $player[1], 
                    'role' => $player[2], 
                    'batting' => $player[3], 
                    'bowling' => $player[4],
                    'image' => $player[5],
                    'odiRuns' => $player[6], 
                    'country_id' => $player[7]
                ]
            ]);
        }*/
    }
}
