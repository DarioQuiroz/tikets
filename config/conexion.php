<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                //Local
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=andercode_helpdesk1","root","");
                //Produccion
                
                //$conectar = $this->dbh = new PDO("mysql:host=sql5c75f.carrierzone.com;dbname=ticket_sysredcomm945542","sysredcomm945542","Ticket12");
				return $conectar;
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta(){
            //Local
			//return "http://localhost/proyec_vender/";
            //Produccion
            return "http://sysred.com.mx/proyec_vender/";
		}

    }
?>