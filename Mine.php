<?php
class Mine
{
    const DIAMOND = '<>';
    private $mine;

    public function __construct($mine)
    {
        $this->mine = $mine;
    }

    public function getDiamonds()
    {
        $diamonds = 0;
        do {
            $newDiamonds = $this->extractDiamondFromMine();
            $diamonds += $newDiamonds;
        } while ($newDiamonds > 0);
        return $diamonds;
    }

    private function extractDiamondFromMine()
    {
        $lengthAfter = strlen($this->mine);
        $this->mine   = str_replace(self::DIAMOND, NULL, $this->mine);
        return ($lengthAfter - strlen($this->mine)) / strlen(self::DIAMOND);
    }
}