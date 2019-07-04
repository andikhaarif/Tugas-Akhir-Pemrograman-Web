function kalkulator() {
	var bil1 = parseFloat(document.fform.bilangan1.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.fform.bilangan2.value);			//digunakan untuk membuat fungsi pertambahan
	if (isNaN (bil2))
	bil2=0.0;
	var hasil1 = bil1 + bil2;
	alert ("Hasil Penjumlahan = " +hasil1);
}

function kalkulator2() {
	var bil1 = parseFloat(document.fform.bilangan1.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.fform.bilangan2.value);			//digunakan untuk membuat fungsi pengurangan
	if (isNaN (bil2))
	bil2=0.0;
	
	var hasil2 = bil1-bil2;
	alert ("Hasil Perkalian = " +hasil2);
}

function kalkulator3() {
	var bil1 = parseFloat(document.fform.bilangan1.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.fform.bilangan2.value);			//digunakan untuk membuat fungsi perkalian
	if (isNaN (bil2))
	bil2=0.0;
	
	var hasil3 = bil1*bil2;
	alert ("Hasil Perkalian = " +hasil3);
}

function kalkulator4() {
	var bil1 = parseFloat(document.fform.bilangan1.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.fform.bilangan2.value);			//digunakan untuk membuat fungsi pembagian
	if (isNaN (bil2))
	bil2=0.0;
	
	var hasil4 = bil1/bil2;
	alert ("Hasil Pembagian = " +hasil4);
}