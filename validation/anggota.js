const namaLengkapInput = document.getElementById("nama");
const alamatInput = document.getElementById("alamat");
const jenisKelaminInput = document.getElementById("jenis_kelamin");

const warningNamaLengkap = document.getElementById("error-nama");
const warningAlamat = document.getElementById("error-alamat");
const warningJenisKelamin = document.getElementById("error-jenis_kelamin");
const validateData = (e) => {
  const namaLengkap = namaLengkapInput.value.trim();
  const alamat = alamatInput.value.trim();
  const jenisKelamin = jenisKelaminInput.value.trim();

  let isValid = true;

  warningNamaLengkap.style.display = "none";
  warningAlamat.style.display = "none";
  warningJenisKelamin.style.display = "none";

  if (namaLengkap === "") {
    isValid = false;
    warningNamaLengkap.textContent = "Nama Lengkap tidak boleh kosong";
    warningNamaLengkap.style.display = "block";
  }

  if (alamat === "") {
    isValid = false;
    warningAlamat.textContent = "Alamat tidak boleh kosong";
    warningAlamat.style.display = "block";
  }

  if (jenisKelamin === "") {
    isValid = false;
    warningJenisKelamin.textContent = "Jenis Kelamin tidak boleh kosong";
    warningJenisKelamin.style.display = "block";
  }

  return isValid;
};
