<?php
class Driver{
    public $name,$age,$family,$hourlyRate,$married;
    public function setName(string $name){
        $this->name=$name;
    }
    public function getName():string{
        return $this->name;
    }
    public function setAge(int $age){
        $this->age=$age;
    }
    public function getAge():int{
        return $this->age;
    }
    public function setFamily(array $members){
        $this->family=$members;
    }
    public function getFamily():array{
        return $this->family;
    }
    public function setRate(float $rate){
        $this->hourlyRate=$rate;
    }
    public function getRate():float{
        return $this->hourlyRate;
    }
    public function setMarried(bool $married){
        $this->married=$married;
    }
    public  function  getMarried():bool {
        return $this->married;
    }

}
class Car{
    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return int
     */
    public function getModel(): int
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        return $this->available;
    }

    /**
     * @return array
     */
    public function getAccessories(): array
    {
        return $this->accessories;
    }
    public $brand,$model,$price,$available,$accessories;
    public function __construct(string $brand,int $model,float $price,bool $available, array $accessories)
    {
        $this->brand=$brand;
        $this->model=$model;
        $this->$price=$price;
        $this->available=$available;
        $this->accessories=$accessories;
    }
}
class Rent{
    public $car,$driver;
    public function __construct(Car $car,Driver $driver)
    {
        $this->car=$car;
        $this->driver=$driver;
    }

}
$dMgMg=new Driver();
$dMgMg->setName("Mg Mg");
$dMgMg->setAge("23");
$dMgMg->setFamily(["father"=>"U Ba","mother"=>"Daw Mya","sister"=>"nu nu"]);
$dMgMg->setRate(20.4);
$dMgMg->setMarried(TRUE);
$dAgAg=new Driver();
$dAgAg->setName("Mg Mg");
$dAgAg->setAge("33");
$dAgAg->setFamily(["father"=>"U Hla","mother"=>"Daw Aye","sister"=>"su su"]);
$dAgAg->setRate(30.4);
$dAgAg->setMarried(FALSE);
$torota=new Car("Alphard","2015","100.50",TRUE,["tissues","water","cupon"]);
$honda=new Car("Honda Fit","2019","90.50",FALSE,["tissues","water"]);
$rent1=new Rent($torota,$dAgAg);
$rent2=new Rent($honda,$dMgMg);
$list=[$rent1,$rent2];

echo "There are ".count($list)." cars in this company";
echo "<hr>";
$serializeData=serialize($list);
echo "<pre>";
echo $serializeData;
echo "<hr>";
$unData=unserialize($serializeData);
print_r($unData);
echo "</pre>";
echo "<hr>";
echo $list[0]->driver->getName();

echo $list[0]->car->isAvailable();
