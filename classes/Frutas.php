
    <?php
    class Frutas{
        private $cor;
        private $nome;
        private $peso;

        public function getCor(){
            return $this->cor;
        }
        public function setCor($cor){
            $this->cor = $cor;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function setpESO($peso){
            $this->peso = $peso;
        }
        
    }
    ?>
