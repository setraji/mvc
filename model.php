<?php

// Im Model-Bereich findet die Kommunikation mit der Datenbank statt
// Hier werden alle Daten entsprechend aufbereitet und dem Controller 
// bei Bedarf zur Verfügung gestellt
// Auch andere Algorithmen wie z.B. Filtermechanismen oder mathematische
// Berechnungen gehören hier her
// Das Model ist unabhängig von Controller und View

class model {

	public function connectDB() {
		$con = new mysqli('','','','');
		$con->set_charset('utf8mb4');
		if(mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		return $con;
	}

	public function getValueFromDB() {
		$con = $this->connectDB();
		$request = $con->query('');
		return $request;
	}

	public function insertValue() {
		$con = $this->connectDB();
		$request = $con->query('');
    }

	public function updateValue() {
		$con = $this->connectDB();
		$request = $con->query('');
    }

	public function deleteValue() {
		$con = $this->connectDB();
		$request = $con->query('');
    }
	
	public function getNavi() {
		return "Navigation";
	}
	
	public function getContent() {
		return "Inhalt";
	}

	public function getFooter() {
		return "Fussleiste";
	}

}

?>