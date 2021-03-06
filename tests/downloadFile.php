<?php 
  
// Initialize a file URL to the variable 
$url = 'https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832_960_720.jpg'; 
  
// Use basename() function to return the base name of file  
$file_name = basename($url); 
   
// Use file_get_contents() function to get the file 
// from url and use file_put_contents() function to 
// save the file by using base name 
if(file_put_contents( $file_name,file_get_contents($url))) { 
    echo "File downloaded successfully"; 
} 
else { 
    echo "File downloading failed."; 
} 