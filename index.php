<?php
// phpinfo();
$city = array(
    'A' => array('A' => 0,      'B' => 249,     'C' => 329,     'D' => 138,     'E' => 351,     'F' => 254,     'G' => 166),
    'B' => array('A' => 241,    'B' => 0,       'C' => 96.2,    'D' => 113,     'E' => 111,     'F' => 137,     'G' => 106),
    'C' => array('A' => 329,    'B' => 97.6,    'C' => 0,       'D' => 203,     'E' => 122,     'F' => 232,     'G' => 191),
    'D' => array('A' => 134,    'B' => 114,     'C' => 202,     'D' => 0,       'E' => 217,     'F' => 147,     'G' => 34.9),
    'E' => array('A' => 344,    'B' => 109,     'C' => 122,     'D' => 216,     'E' => 0,       'F' => 154,     'G' => 218),
    'F' => array('A' => 253,    'B' => 137,     'C' => 233,     'D' => 146,     'E' => 154,     'F' => 0,       'G' => 175),
    'G' => array('A' => 147,    'B' => 107,     'C' => 192,     'D' => 35,      'E' => 209,     'F' => 174,     'G' => 0),
);

$array = ['A','B','C','D','E','F','G'];

$resultado = [
    'total' => 999999999999999999999999999999,
    'sequencia' => '',
];

for ($i=0; $i<count($array); $i++) {

    for ($j=0; $j<count($array); $j++){

        for ($k=0; $k<count($array); $k++) {

            for ($l=0; $l<count($array); $l++) {

                for ($m=0; $m<count($array); $m++) {

                    for ($n=0; $n<count($array); $n++) {
                    
                        for ($o=0; $o<count($array); $o++) {
            
                            if (
                                $i != $j && $i != $k && $i != $l && $i != $m && $i != $n && $i != $o &&
                                $j != $k && $j != $l && $j != $m && $j != $n && $j != $o &&
                                $k != $l && $k != $m && $k != $n && $k != $o &&
                                $l != $m && $l != $n && $l != $o &&
                                $m != $n && $m != $o &&
                                $n != $o
                            ) {
                                $sequencia[] = array(
                                            $array[$i], 
                                            $array[$j], 
                                            $array[$k],
                                            $array[$l],
                                            $array[$m],
                                            $array[$n],
                                            $array[$o],
                                        );
                                
                                $sub_total = 0;

                                foreach ($sequencia as $key => $value) {
                                    foreach ($value as $kk => $vv) {
                                        $anterior = $value[$kk];
                                        $proxima = ($kk+1) == count($value) ? $value[0] : $value[$kk+1];
                                        $sub_total += $city[$anterior][$proxima];
                                    }
                                }
                                
                                if ($sub_total < $resultado['total']) {
                                    $resultado = array(
                                                    'total' => $sub_total,
                                                    'sequencia' => $value,
                                                );
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

var_dump($resultado);
var_dump($city);
var_dump($sequencia);