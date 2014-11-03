<?php
	//Script for including all classes into one file for inclusion in the view

    foreach (glob("classes/*.php") as $filename) {
    	include $filename;
	}