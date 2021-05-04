<?php

function bayar($item,$paid){

    $bolpoin_price = 1750;
    $total_price = $item * $bolpoin_price;
    
    echo "Harga 1 Bolpoin : Rp. ".number_format($bolpoin_price)."\n";
    echo "Jumlah yang ingin dibeli : ".$item."\n\n";
    echo "Harga ".$item." Bolpoin : Rp. ".number_format($total_price)."\n\n";
    
    echo "Jumlah yang dibayarkan : Rp. ".number_format($paid)."\n";
    
    if($paid < $total_price){
        echo "Maaf, jumlah yang anda bayar kurang! Rp. ".number_format(abs($paid - $total_price))." lagi\n";
    }else{
        echo "Jumlah kembalian : Rp. ".number_format($paid - $total_price)."\n";
    }
    
    
}

function getNum($number,$unit){
    switch ($unit) {
        case 'lusin':
            return $number * 12;
            break;
        case 'kodi':
            return $number * 20;
            break;
        case 'gross':
            return $number * 144;
            break;
        case 'rim':
            return $number * 500;
            break;
        
        default:
            return $number;
            break;
    }
    
}

function getPay($amount,$fraction){
    switch ($fraction) {
        case 'seribu':
            return $amount * 1000;
            break;
        case 'duaribu':
            return $amount * 2000;
            break;
        case 'limaribu':
            return $amount * 5000;
            break;
        case 'sepuluhribu':
            return $amount * 10000;
            break;
        case 'duapuluhribu':
            return $amount * 20000;
            break;
        case 'limapuluhribu':
            return $amount * 50000;
            break;
        case 'seratusribu':
            return $amount * 100000;
            break;
        
        default:
            return $amount;
            break;
    }
}

// input user

// Jumlah Dan Satuan
$num_item = getNum(1,"lusin");

// Jumlah dan pecahan uang 
$total_pay = getPay(2,"limaribu");

bayar($num_item,$total_pay);
