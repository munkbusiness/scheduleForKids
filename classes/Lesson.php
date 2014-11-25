<?php
    
    class Lesson {
    	
		var $minuteLenght; //eg 20, 45, 60
		var $classSubject; //eg matematik, dansk
		var $keywords; //eg diktat, geometri
		var $position; //position på skemaet eg nr. 1 eller 5
		
        
        function __construct($minuteLenght, $classSubject, $keyWords, $position) {
            $this->minuteLenght = $minuteLenght;
			$this->classSubject = $classSubject;
			$this->keywords = $keyWords;
			$this->position = $position;
        }
		
		function getPixelLength() {
			return $this->minuteLenght*15;
		}
		
		function getClassSubject() {
			return $this->classSubject; 
		}
		
		function getKeywords() {
			return $this->keywords;
		}
		
		function getPosition() {
			return $this->position;
		}
    }
    
    
?>