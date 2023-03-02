// Sweet Alert
const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal({
        title: 'Sukses',
        text: 'Data Berhasil ' + flashData,
        type: 'success'
    });
}

const flashRegistrasion = $('.flash-data-registration').data('flashdata');

if (flashRegistrasion) {
    Swal({
        title: 'Success',
        text: 'Create Account ' + flashData,
        type: 'success'
    });
}

// Sweet Alert
const flashGagal = $('.flash-data-gagal').data('flashdata');

if (flashGagal) {
    Swal({
        title: 'Gagal',
        text: 'Data Gagal ' + flashGagal,
        type: 'error'
    });
}



// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "data akan dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e74c3c',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Delete'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});

$('.custom-file-input').on('change', function () {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
