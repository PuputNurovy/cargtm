//--------------------------------------
// Pengambilan Kargo
function showTambahTransaksiPengambilan(){
	$("#tambah-transaksi").modal("show");
}
function showHapusTransaksiPengambilan(param){
	var idTransaksi        = document.getElementById("tabel").rows[param].cells[0].innerHTML;
	document.getElementById("idTransaksiPengambilan").value   		= idTransaksi;
	$("#hapus-transaksi").modal("show");
}
function showUbahTransaksiPengambilan(param){
	var idTransaksi        = document.getElementById("tabel").rows[param].cells[0].innerHTML;
	var tanggalTransaksi   = document.getElementById("tabel").rows[param].cells[1].innerHTML;
	var tanggalPengambilan = document.getElementById("tabel").rows[param].cells[2].innerHTML;
	var providerKapal      = document.getElementById("tabel").rows[param].cells[3].innerHTML;
	var kodeKapal          = document.getElementById("tabel").rows[param].cells[4].innerHTML;

	document.getElementById("idTransaksi").value   		= idTransaksi;
	document.getElementById("tanggalTransaksi").value 	= tanggalTransaksi;
	document.getElementById("tanggalPengambilan").value = tanggalPengambilan;
	document.getElementById("providerKapal").value 		= providerKapal;
	document.getElementById("kodeKapal").value     		= kodeKapal;
	$("#ubah-transaksi").modal("show");
}

// ------------------------------------
// Rincian pengambilan kargo
function showTambahRincianPengambilan(){
	$("#tambah-rincian-pengambilan").modal("show");
}

function showUbahRincianPengambilan(param){
	var idKargo       	= document.getElementById("tabel").rows[param].cells[0].innerHTML;
	var providerKargo   = document.getElementById("tabel").rows[param].cells[1].innerHTML;
	var jenisKargo 		= document.getElementById("tabel").rows[param].cells[2].innerHTML;
	var asalKargo     	= document.getElementById("tabel").rows[param].cells[3].innerHTML;
	var tujuanKargo     = document.getElementById("tabel").rows[param].cells[4].innerHTML;

	document.getElementById("idKargo").value   		= idKargo;
	document.getElementById("providerKargo").value 	= providerKargo;
	document.getElementById("jenisKargo").value 	= jenisKargo;
	document.getElementById("asalKargo").value 		= asalKargo;
	document.getElementById("tujuanKargo").value    = tujuanKargo;

	$("#ubah-rincian-pengambilan").modal("show");
}

function showHapusRincianPengambilan(param){
	$("#hapus-rincian-pengambilan").modal("show");
}

//--------------------------------------
// Angkut Kargo
function showTambahTransaksiAngkut(){
	$("#tambah-transaksi").modal("show");
}
function showHapusTransaksiAngkut(param){
	var idTransaksi         = document.getElementById("tabel").rows[param].cells[0].innerHTML;
	document.getElementById("idTransaksiAngkut").value   		= idTransaksi;
	$("#hapus-transaksi").modal("show");
}
function showUbahTransaksiAngkut(param){
	var idTransaksi         = document.getElementById("tabel").rows[param].cells[0].innerHTML;
	var tanggalTransaksi    = document.getElementById("tabel").rows[param].cells[1].innerHTML;
	var tanggalPengangkutan = document.getElementById("tabel").rows[param].cells[2].innerHTML;
	var providerKapal       = document.getElementById("tabel").rows[param].cells[3].innerHTML;
	var kodeKapal           = document.getElementById("tabel").rows[param].cells[4].innerHTML;

	document.getElementById("idTransaksi").value   		= idTransaksi;
	document.getElementById("tanggalTransaksi").value 	= tanggalTransaksi;
	document.getElementById("tanggalPengangkutan").value = tanggalPengangkutan;
	document.getElementById("providerKapal").value 		= providerKapal;
	document.getElementById("kodeKapal").value     		= kodeKapal;
	$("#ubah-transaksi").modal("show");
}

// ------------------------------------
// Rincian pengambilan kargo
function showTambahRincianAngkut(){
	$("#tambah-rincian-angkut").modal("show");
}

function showUbahRincianAngkut(param){
	var idKargo       	= document.getElementById("tabel").rows[param].cells[0].innerHTML;
	var providerKargo   = document.getElementById("tabel").rows[param].cells[1].innerHTML;
	var jenisKargo 		= document.getElementById("tabel").rows[param].cells[2].innerHTML;
	var asalKargo     	= document.getElementById("tabel").rows[param].cells[3].innerHTML;
	var tujuanKargo     = document.getElementById("tabel").rows[param].cells[4].innerHTML;

	document.getElementById("idKargo").value   		= idKargo;
	document.getElementById("providerKargo").value 	= providerKargo;
	document.getElementById("jenisKargo").value 	= jenisKargo;
	document.getElementById("asalKargo").value 		= asalKargo;
	document.getElementById("tujuanKargo").value    = tujuanKargo;

	$("#ubah-rincian-angkut").modal("show");
}

function showHapusRincianAngkut(param){
	var idKargo       	= document.getElementById("tabel").rows[param].cells[0].innerHTML;
	document.getElementById("idKargoAngkut").value   		= idKargo;
	$("#hapus-rincian-angkut").modal("show");
}


// Trasnport
function showTambahTransport(){
	$("#tambah-transport").modal("show");
}
function showHapusTransport(param){
	var idTransport        = document.getElementById("tabel").rows[param].cells[0].innerHTML;
	document.getElementById("idTransportasi").value   		= idTransportasi;
	$("#hapus-transport").modal("show");
}
function showUbahTransport(param){
	var idTransport     = document.getElementById("tabel").rows[param].cells[0].innerHTML;
	var nama   			= document.getElementById("tabel").rows[param].cells[1].innerHTML;
	var jenis 			= document.getElementById("tabel").rows[param].cells[2].innerHTML;
	var tglPembelian    = document.getElementById("tabel").rows[param].cells[3].innerHTML;

	document.getElementById("idTransport").value   		= idTransport;
	document.getElementById("nama").value 	= nama;
	document.getElementById("jenis").value = jenis;
	document.getElementById("tglPembelian").value 		= tglPembelian;
	$("#ubah-transport").modal("show");
}
