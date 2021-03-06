--TEST--
Test hypot() - basic function test hypot()
--INI--
precision=14
--FILE--
<?php

echo "*** Testing hypot() : basic functionality ***\n";

$valuesy = array(23,
                -23,
                2.345e1,
                -2.345e1,
                0x17,
                027,
                "23",
                "23.45",
                "2.345e1",
                "23abc",
                null,
                true,
                false);

$valuesx = array(33,
                -33,
                3.345e1,
                -3.345e1,
                0x27,
                037,
                "33",
                "43.45",
                "1.345e1",
                "33abc",
                null,
                true,
                false);

for ($i = 0; $i < count($valuesy); $i++) {
    for ($j = 0; $j < count($valuesx); $j++) {
        echo "\nY:$valuesy[$i] X:$valuesx[$j] ";
        $res = hypot($valuesy[$i], $valuesx[$j]);
        var_dump($res);
    }
}
?>
--EXPECTF--
*** Testing hypot() : basic functionality ***

Y:23 X:33 float(40.22437072223753)

Y:23 X:-33 float(40.22437072223753)

Y:23 X:33.45 float(40.594365372548936)

Y:23 X:-33.45 float(40.594365372548936)

Y:23 X:39 float(45.27692569068709)

Y:23 X:31 float(38.600518131237564)

Y:23 X:33 float(40.22437072223753)

Y:23 X:43.45 float(49.162002603636886)

Y:23 X:1.345e1 float(26.64399557123518)

Y:23 X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.22437072223753)

Y:23 X: float(23)

Y:23 X:1 float(23.021728866442675)

Y:23 X: float(23)

Y:-23 X:33 float(40.22437072223753)

Y:-23 X:-33 float(40.22437072223753)

Y:-23 X:33.45 float(40.594365372548936)

Y:-23 X:-33.45 float(40.594365372548936)

Y:-23 X:39 float(45.27692569068709)

Y:-23 X:31 float(38.600518131237564)

Y:-23 X:33 float(40.22437072223753)

Y:-23 X:43.45 float(49.162002603636886)

Y:-23 X:1.345e1 float(26.64399557123518)

Y:-23 X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.22437072223753)

Y:-23 X: float(23)

Y:-23 X:1 float(23.021728866442675)

Y:-23 X: float(23)

Y:23.45 X:33 float(40.48336077946099)

Y:23.45 X:-33 float(40.48336077946099)

Y:23.45 X:33.45 float(40.85100977944119)

Y:23.45 X:-33.45 float(40.85100977944119)

Y:23.45 X:39 float(45.50716976477443)

Y:23.45 X:31 float(38.87032930140932)

Y:23.45 X:33 float(40.48336077946099)

Y:23.45 X:43.45 float(49.37413290377868)

Y:23.45 X:1.345e1 float(27.033405260898967)

Y:23.45 X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.48336077946099)

Y:23.45 X: float(23.45)

Y:23.45 X:1 float(23.47131227690518)

Y:23.45 X: float(23.45)

Y:-23.45 X:33 float(40.48336077946099)

Y:-23.45 X:-33 float(40.48336077946099)

Y:-23.45 X:33.45 float(40.85100977944119)

Y:-23.45 X:-33.45 float(40.85100977944119)

Y:-23.45 X:39 float(45.50716976477443)

Y:-23.45 X:31 float(38.87032930140932)

Y:-23.45 X:33 float(40.48336077946099)

Y:-23.45 X:43.45 float(49.37413290377868)

Y:-23.45 X:1.345e1 float(27.033405260898967)

Y:-23.45 X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.48336077946099)

Y:-23.45 X: float(23.45)

Y:-23.45 X:1 float(23.47131227690518)

Y:-23.45 X: float(23.45)

Y:23 X:33 float(40.22437072223753)

Y:23 X:-33 float(40.22437072223753)

Y:23 X:33.45 float(40.594365372548936)

Y:23 X:-33.45 float(40.594365372548936)

Y:23 X:39 float(45.27692569068709)

Y:23 X:31 float(38.600518131237564)

Y:23 X:33 float(40.22437072223753)

Y:23 X:43.45 float(49.162002603636886)

Y:23 X:1.345e1 float(26.64399557123518)

Y:23 X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.22437072223753)

Y:23 X: float(23)

Y:23 X:1 float(23.021728866442675)

Y:23 X: float(23)

Y:23 X:33 float(40.22437072223753)

Y:23 X:-33 float(40.22437072223753)

Y:23 X:33.45 float(40.594365372548936)

Y:23 X:-33.45 float(40.594365372548936)

Y:23 X:39 float(45.27692569068709)

Y:23 X:31 float(38.600518131237564)

Y:23 X:33 float(40.22437072223753)

Y:23 X:43.45 float(49.162002603636886)

Y:23 X:1.345e1 float(26.64399557123518)

Y:23 X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.22437072223753)

Y:23 X: float(23)

Y:23 X:1 float(23.021728866442675)

Y:23 X: float(23)

Y:23 X:33 float(40.22437072223753)

Y:23 X:-33 float(40.22437072223753)

Y:23 X:33.45 float(40.594365372548936)

Y:23 X:-33.45 float(40.594365372548936)

Y:23 X:39 float(45.27692569068709)

Y:23 X:31 float(38.600518131237564)

Y:23 X:33 float(40.22437072223753)

Y:23 X:43.45 float(49.162002603636886)

Y:23 X:1.345e1 float(26.64399557123518)

Y:23 X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.22437072223753)

Y:23 X: float(23)

Y:23 X:1 float(23.021728866442675)

Y:23 X: float(23)

Y:23.45 X:33 float(40.48336077946099)

Y:23.45 X:-33 float(40.48336077946099)

Y:23.45 X:33.45 float(40.85100977944119)

Y:23.45 X:-33.45 float(40.85100977944119)

Y:23.45 X:39 float(45.50716976477443)

Y:23.45 X:31 float(38.87032930140932)

Y:23.45 X:33 float(40.48336077946099)

Y:23.45 X:43.45 float(49.37413290377868)

Y:23.45 X:1.345e1 float(27.033405260898967)

Y:23.45 X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.48336077946099)

Y:23.45 X: float(23.45)

Y:23.45 X:1 float(23.47131227690518)

Y:23.45 X: float(23.45)

Y:2.345e1 X:33 float(40.48336077946099)

Y:2.345e1 X:-33 float(40.48336077946099)

Y:2.345e1 X:33.45 float(40.85100977944119)

Y:2.345e1 X:-33.45 float(40.85100977944119)

Y:2.345e1 X:39 float(45.50716976477443)

Y:2.345e1 X:31 float(38.87032930140932)

Y:2.345e1 X:33 float(40.48336077946099)

Y:2.345e1 X:43.45 float(49.37413290377868)

Y:2.345e1 X:1.345e1 float(27.033405260898967)

Y:2.345e1 X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.48336077946099)

Y:2.345e1 X: float(23.45)

Y:2.345e1 X:1 float(23.47131227690518)

Y:2.345e1 X: float(23.45)

Y:23abc X:33 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.22437072223753)

Y:23abc X:-33 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.22437072223753)

Y:23abc X:33.45 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.594365372548936)

Y:23abc X:-33.45 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.594365372548936)

Y:23abc X:39 
Notice: A non well formed numeric value encountered in %s on line %d
float(45.27692569068709)

Y:23abc X:31 
Notice: A non well formed numeric value encountered in %s on line %d
float(38.600518131237564)

Y:23abc X:33 
Notice: A non well formed numeric value encountered in %s on line %d
float(40.22437072223753)

Y:23abc X:43.45 
Notice: A non well formed numeric value encountered in %s on line %d
float(49.162002603636886)

Y:23abc X:1.345e1 
Notice: A non well formed numeric value encountered in %s on line %d
float(26.64399557123518)

Y:23abc X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d

Notice: A non well formed numeric value encountered in %s on line %d
float(40.22437072223753)

Y:23abc X: 
Notice: A non well formed numeric value encountered in %s on line %d
float(23)

Y:23abc X:1 
Notice: A non well formed numeric value encountered in %s on line %d
float(23.021728866442675)

Y:23abc X: 
Notice: A non well formed numeric value encountered in %s on line %d
float(23)

Y: X:33 float(33)

Y: X:-33 float(33)

Y: X:33.45 float(33.45)

Y: X:-33.45 float(33.45)

Y: X:39 float(39)

Y: X:31 float(31)

Y: X:33 float(33)

Y: X:43.45 float(43.45)

Y: X:1.345e1 float(13.45)

Y: X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d
float(33)

Y: X: float(0)

Y: X:1 float(1)

Y: X: float(0)

Y:1 X:33 float(33.015148038438355)

Y:1 X:-33 float(33.015148038438355)

Y:1 X:33.45 float(33.46494434479161)

Y:1 X:-33.45 float(33.46494434479161)

Y:1 X:39 float(39.01281840626232)

Y:1 X:31 float(31.016124838541646)

Y:1 X:33 float(33.015148038438355)

Y:1 X:43.45 float(43.461505956420794)

Y:1 X:1.345e1 float(13.48712348872064)

Y:1 X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d
float(33.015148038438355)

Y:1 X: float(1)

Y:1 X:1 float(1.4142135623730951)

Y:1 X: float(1)

Y: X:33 float(33)

Y: X:-33 float(33)

Y: X:33.45 float(33.45)

Y: X:-33.45 float(33.45)

Y: X:39 float(39)

Y: X:31 float(31)

Y: X:33 float(33)

Y: X:43.45 float(43.45)

Y: X:1.345e1 float(13.45)

Y: X:33abc 
Notice: A non well formed numeric value encountered in %s on line %d
float(33)

Y: X: float(0)

Y: X:1 float(1)

Y: X: float(0)
