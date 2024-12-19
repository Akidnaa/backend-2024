const persiapan = async () => {
  return new Promise((resolve) => {
      setTimeout(() => {
          resolve("Menyiapkan Bahan ...");
      }, 3000);
  });
};

const rebusAir = async () => {
  return new Promise((resolve) => {
      setTimeout(() => {
          resolve("Merebus Air ...");
      }, 7000);
  });
};

const masak = async () => {
  return new Promise((resolve) => {
      setTimeout(() => {
          resolve("Masak Mie ...");
      }, 5000);
  });
};

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