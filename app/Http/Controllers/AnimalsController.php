<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public $hewan = ["kelalawar", "Macan Tutul", "Paus Biru"];

    public function __construct() {
    }

    public function index() {
        foreach ($this->hewan as $h) {
            echo $h . "\n";
        }
    }

    public function store(Request $request) {
        $newAnimal = $request->input('hewan');
        array_push($this->hewan, $newAnimal);

        echo "Hewan baru telah ditambahkan: " . $newAnimal . "\n";
        $this->index(); 
    }

    public function update(Request $request, $id) {
        $updatedAnimal = $request->input('hewan');  
    
        if (isset($this->hewan[$id])) {
            $this->hewan[$id] = $updatedAnimal;  
    
            echo "Data hewan dengan id $id telah diupdate menjadi: " . $updatedAnimal . "\n";
            $this->index(); 
        } else {
            echo "Hewan dengan id $id tidak ditemukan.";
        }
    }

    
    public function destroy($index) {
        if (isset($this->hewan[$index])) {
            unset($this->hewan[$index]);
            echo "Hewan dengan index $index telah dihapus.\n";
            $this->hewan = array_values($this->hewan); 
            $this->index(); 
        } else {
            echo "Hewan dengan index $index tidak ditemukan.";
        }
    }
}
