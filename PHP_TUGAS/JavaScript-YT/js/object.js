const object = {
    nama:"smk revit",
    telp:"123456789",
    buah:['apel','jeruk','mangga'],
    coba: function () {
        return "coba function dalam object";
    },
    boleh: true,
    "tulis aja":1234,
};
console.log(object.nama);
console.log(object.telp);
console.log(object.buah[1]);
console.log(object.coba());
console.log(object.boleh);
console.log(object["tulis aja"]);