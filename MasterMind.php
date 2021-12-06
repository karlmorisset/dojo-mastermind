<?php

namespace MasterMind;

class MasterMind
{
    const MASTER_COLOR = ['blue','green','white','black'];

    public function getScore(array $colors)
    {
        $result = [0,0];
        foreach($colors as $color) {
            if (in_array($color,self::MASTER_COLOR)) {
                $result[0]++;
            }
        }
        for($i = 0; $i < count(self::MASTER_COLOR); $i++) {
            if (self::MASTER_COLOR[$i] === $colors[$i]) {
                $result[0]--;
                $result[1]++;
            }
        }
        if ($result[1] === 4) {
            $result = 'win';
        }
        return $result;
    }
}