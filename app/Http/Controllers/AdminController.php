<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function users()
    {
        $conn = new PDO('mysql:host=localhost;port=3306;dbname=laravel','root','');
        $sql = "SELECT * FROM activities";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        foreach ($stmt as $row) {
            echo "<pre>";
            echo '<tr><td>ID:'.$row['id'].'</td><td> Theme:'.$row['Theme'].'</td><td> content: '.$row['content'].'</td><td> Address: '.$row['Address'].'</td></tr>';
            echo '<form type="post" action="/55"><input name="num" type="hidden" value="'.$row['id'].'"></button>';
            echo '<input type="submit" value="delete"></button></form>';
            echo "</pre>";
        }

        return;
    }

    public function delete()
    {
        $number = $_GET['num'];
        $conn = new PDO('mysql:host=localhost;port=3306;dbname=laravel','root','');
        $sql = "DELETE FROM activities where id=$number;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        echo '<script>alert("successfully deleted");</script>';
        echo '<form type="post" action="/activity">';
        echo '<input type="submit" value="back"></button></form>';
    }   
}
