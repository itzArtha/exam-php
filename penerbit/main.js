function cek_form(frm) {
  if (frm.nama.value == "") {
    alert("Silahkan lengkapi kolom Nama");
    frm.nama.focus();
    return false;
  } else if (frm.email.value == "") {
    alert("Silahkan lengkapi kolom Email");
    frm.email.focus();
    return false;
  } else if (frm.kota.value == "") {
    alert("Silahkan lengkapi kolom Kota");
    frm.kota.focus();
    return false;
  } else if (frm.kontak.value == "") {
    alert("Silahkan lengkapi kolom Nama Kontak");
    frm.kontak.focus();
    return false;
  } else if (frm.phone.value == "") {
    alert("Silahkan lengkapi kolom HP");
    frm.phone.focus();
    return false;
  } else if (frm.alamat.value == "") {
    alert("Silahkan lengkapi kolom alamat");
    frm.alamat.focus();
    return false;
  } else {
    return true;
  }
}
