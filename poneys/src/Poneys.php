<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if($this->count - $number < 0){
            throw new Exception("Negative number of poneys");
        }
        $this->count -= $number;
    }

    public function addPoneyToField(int $number): void
    {
        $this->count += $number;
    }

    public function isFull()
    {
        return $this->count == 15 ? TRUE : FALSE;
    }

    public function setCount(int $count)
    {
        $this->count = $count;
    }
    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }
}
?>
