<?php

namespace MasterMind;

class MasterMind
{

    public function getScore(array $masterColors, array $playerColors)
    {
        $result = [0,0];
        for($i = 0; $i < count($masterColors); $i++) {
            if (in_array($playerColors[$i],$masterColors)) {
                $result[0]++;
            }
            if ($masterColors[$i] === $playerColors[$i]) {
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