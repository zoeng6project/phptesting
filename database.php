<?php

class Database
{
  private $connection;
  function __construct()
  {
    $this->connect_db();
  }
  public function connect_db()
  {
    $this->connection = mysqli_connect('localhost', 'root', '', 'TrackingOrder');
  }
  public function create($mode, $order, $dest, $ETA)
  {
      $sql = "INSERT INTO `Order`(`Mode`, `Order`, `Dest`, `ETA`) VALUES ('$mode', '$order', '$dest', '$ETA')";
      $res = mysqli_query($this -> connection,$sql);

      if($res){
        return true;
      }
  }
  public function read()
  {
    $sql = "SELECT * from `Order` order by ETA";
    $res = mysqli_query($this -> connection,$sql);
    return $res;
  }

}
$database = new Database();
?>