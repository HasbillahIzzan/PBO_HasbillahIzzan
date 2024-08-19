<?php
class celcius{
    public function konversi($nilai)
    {
        return  [
            'fahrenhit' =>$nilai * 9 / 5 + 32,
            'Kelvin' =>$nilai + 273.15,
            'Reamur' =>$nilai * 4/5
        ];
    }
}

class fahrenhit{

    public function konversi($nilai)
    {
        return [
            'celcius' =>($nilai - 32) * 5/9 ,
            'Kelvin' =>(($nilai - 32) * 5/9 ) + 273.15,
            'Reamur' =>(($nilai - 32) * 5/9) * 4/5,
        ];
    }
}

class Kelvin{

    public function konversi($nilai)
    {
        return [
            'celcius' =>$nilai - 273.15,
            'fahrenhit' =>(($nilai - 273.25) * 9/5) + 32,
            'Reamur' =>($nilai - 273.15) * 4/5,
        ];
    }
}

class Reamur{

    public function konversi($nilai)
    {
        return [
            'celcius' =>$nilai * 5/4 ,
            'Kelvin' =>($nilai * 5/4 ) + 273.15,
            'fahrenhit' =>($nilai * 9/4) + 32,
        ];
    }
}

$suhu = 300;
 
$celsiusConverter = new Celcius();
$fahrenheitConverter = new fahrenhit();
$kelvinConverter = new Kelvin();
$reamurConverter = new Reamur();
 
echo "Konversi dari Celsius:\n";
print_r($celsiusConverter->konversi($suhu));
 
echo "Konversi dari Fahrenheit:\n";
print_r($fahrenheitConverter->konversi($suhu));
 
echo "Konversi dari Kelvin:\n";
print_r($kelvinConverter->konversi($suhu));
 
echo "Konversi dari Reamur:\n";
print_r($reamurConverter->konversi($suhu));
