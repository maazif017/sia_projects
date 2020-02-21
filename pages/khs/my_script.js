$.getJSON('json/all_prodi.json', function (data) {
    console.log(data);

    let all_prodi = data.all_prodi;

        $.each(all_prodi, function (i, data) {
            // console.log(i);
            // console.log(data);
            $('#prodi_search').append('<option id="'+ data.namaProdi +'">'+ data.namaProdi +'</option>');
        })

})




