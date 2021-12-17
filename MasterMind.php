<?php

class MasterMind
{
    public function getScore(array $masterColors, array $playerColors)
    {
        $scores = ["in" => 0, "good" => 0];

        for ($i = 0; $i < count($masterColors); $i++) {
            if (in_array($playerColors[$i], $masterColors)) $scores['in']++;
            if ($playerColors[$i] === $masterColors[$i]) $scores["good"]++;
        }

        return [$scores['in'] - $scores["good"], $scores["good"]];
    }
}
