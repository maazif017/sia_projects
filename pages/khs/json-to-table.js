var url = "json/all_prodi.json";
$.get(url, function(data, status){
    $("#coba").text(data.all_prodi["1"]["namaProdi"]);
});




