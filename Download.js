const download = async () => {
    const status = true;
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            if (status) {
                resolve("Download Selesai");
            } else {
                reject("Download Gagal");
            }
        }, 5000);
    });
};

(async () => {
    try {
        const result = await download();
        console.log(result);
    } catch (error) {
        console.log(error);
    }
})();