<?php
    
    class Lesson {
    	
		var $minuteLenght; //eg 20, 45, 60
		var $classSubject; //eg matematik, dansk
		var $keywords; //eg diktat, geometri
		
        
        function __construct($minuteLenght, $classSubject, $keyWords) {
            $this->minuteLenght = $minuteLenght;
			$this->classSubject = $classSubject;
			$this->keywords = $keyWords;
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
    }
    
    
?>