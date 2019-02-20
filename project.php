class Numbers
{
  
  private $_firstNo;
  public function setFirstNo($fno)
    {
      $this->_firstNo=$fno;
    }
  public function getFirstNo()
    {
      return $this->_firstNo;
    }
  
  
  private $_secondNo;
  public function setSecondNo($sno)
    {
      $this->_secondNo=$sno;
    }
  public function getSecondNo()
    {
      return $this->_secondNo;
    }
}
  
  class Addition extends Numbers
    {
      public $result;
      public function add()
            {
              $result=$this->getFirstNo()+$this->getSecondNo();
              
              echo "Addition of two numbers is".$result;
            }
    }
  
$objAdd=new Addition();
$objAdd->setFirstNo(5);
$objAdd->setSecondNo(3);
$objAdd->add();
?>
  
  
  
  
  