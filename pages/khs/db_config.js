const sqlite3 = require('sqlite3').verbose();
const dbFile = "project_siakad.db";

let db = new sqlite3.Database(dbFile, sqlite3.OPEN_READWRITE, (err) => {
    if(err) throw err;
    console.log("Koneksi ke database berhasil!");
});

module.exports = db;
console.clear();
console.log(db);