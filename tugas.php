<?php

class Animal {
    public $hewan;

    public function __construct() {
        $this->hewan = ["Capybara", "Kucing", "Buaya"];
    }

    public function index() {
        foreach ($this->hewan as $hewan) {
            echo $hewan . " "; 
        }
    }
    

    public function store($newHewan) {
        $this->hewan[] = $newHewan;
        echo "$newHewan telah ditambahkan.\n";
    }

    public function update($index, $updatedHewan) {
        $this->hewan[$index] = $updatedHewan;
        echo "Hewan di index $index telah diperbarui menjadi $updatedHewan.\n";
    }

    public function destroy($index) {
        unset($this->hewan[$index]);
        echo "Hewan di index $index telah dihapus.\n";
    }
}


$animal = new Animal();

echo "Data awal:\n";
$animal->index();

echo "Menambahkan hewan:\n";
$animal->store("Kodok");
$animal->index();
echo "Memperbarui hewan:\n";
$animal->update(1, "Kudanil");
$animal->index();
echo "Menghapus hewan:\n";
$animal->destroy(0);
$animal->index();

?>
