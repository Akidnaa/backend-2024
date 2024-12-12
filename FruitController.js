const fruits = require("./fruits");

function index() {
    console.log("Method index - Menampilkan Buah");
    fruits.forEach((fruit) => console.log(fruit));
}

function store(name) {
    console.log(`\nMethod store - Menambahkan buah ${name}`);
    fruits.push(name);
    fruits.forEach((fruit) => console.log(fruit));
}

function update(position, name) {
    console.log(`\nMethod update - Update data ${position} menjadi ${name}`);
    if (position >= 0 && position < fruits.length) {
        fruits[position] = name;
        fruits.forEach((fruit) => console.log(fruit));
    } else {
        console.log("Invalid position");
    }
}

function destroy(position) {
    console.log(`\nMethod destroy - Menghapus data ${position}`);
    if (position >= 0 && position < fruits.length) {
        fruits.splice(position, 1);
        fruits.forEach((fruit) => console.log(fruit));
    } else {
        console.log("Invalid position");
    }
}

module.exports = {
    index,
    store,
    update,
    destroy,
};
