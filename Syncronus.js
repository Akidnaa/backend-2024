const { persiapan, rebusAir, masak } = require("./Persiapan");

const main = async () => {
    try {
        console.log(await persiapan());
        console.log(await rebusAir());
        console.log(await masak());
    } catch (error) {
        console.error(error);
    }
};

main();