  <?php
  class Autobesitzer {

    private $vorname;
    private $nachname;
    private $autos = array();

    public function __construct($vorname, $nachname){
            $this->vorname=$vorname;
            $this->nachname=$nachname;
    }

    public function getVorname(){
        return $this->vorname;
    }

     public function getNachname(){
        return $this->nachname;
    }

        public function addAuto($autoname){
            $this->autos[] = new Auto($autoname);
        }
        
        public function getAutos(){
            
            foreach ($this->autos as $temp) {
                return $temp->getAutoname();

            }
        }

    }



    class Auto {

        private $autoname;

        public function __construct($autoname) {
                $this->autoname=$autoname;
        }

        public function getAutoname(){
            return $this->autoname;
        }
    }
?>