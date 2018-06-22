<?php
function Tampil_Bulan($bln) {
	switch ($bln) {
		case "01":$bulan="Januari";
		break;
		case "02":$bulan="Februari";
		break;
        case "03":$bulan="Maret";
		break;
		case "04":$bulan="April";
		break;
        case "05":$bulan="Mei";
		break;
		case "06":$bulan="Juni";
		break;
        case "07":$bulan="Juli";
		break;
        case "08":$bulan="Agustus";
		break;
		case "09":$bulan="September";
		break;
        case "10":$bulan="Oktober";
		break;
		case "11":$bulan="November";
		break;
        case "12":$bulan="Desember";
		break; 
		}
		if(!isset($bulan))$bulan = "";
		return $bulan;
}

function Tampil_Bulansort($bln) {
	switch ($bln) {
		case "01":$bulan="Jan";
		break;
		case "02":$bulan="Feb";
		break;
        case "03":$bulan="Mar";
		break;
		case "04":$bulan="Apr";
		break;
        case "05":$bulan="Mei";
		break;
		case "06":$bulan="Jun";
		break;
        case "07":$bulan="Jul";
		break;
        case "08":$bulan="Agus";
		break;
		case "09":$bulan="Sep";
		break;
        case "10":$bulan="Okt";
		break;
		case "11":$bulan="Nov";
		break;
        case "12":$bulan="Des";
		break; 
		}
		if(!isset($bulan))$bulan = "";
		return $bulan;
}

function nama_hari($hari)
{
switch ($hari){
    case 0 : $hari="Minggu";
        Break;
    case 1 : $hari="Senin";
        Break;
    case 2 : $hari="Selasa";
        Break;
    case 3 : $hari="Rabu";
        Break;
    case 4 : $hari="Kamis";
        Break;
    case 5 : $hari="Jum'at";
        Break;
    case 6 : $hari="Sabtu";
        Break;
}
return $hari;
}



?>