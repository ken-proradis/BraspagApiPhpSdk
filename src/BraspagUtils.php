<?php

/**
 * Methods used across services
 *
 * @version 1.0
 * @author pfernandes
 */
class BraspagUtils
{
    public static function getResponseValue($from, $propName){
        return ( is_object($from) && isset($from->$propName) ) ? $from->$propName : null;
    }
    
    public static function getBadRequestErros($errors){
        
        $badRequestErrors = array();
        
        foreach ($errors as $e)
        {
            $error = new BraspagError();
            $error->code = $e->Code;
            $error->message = $e->Message;
            
            array_push($badRequestErrors, $error);
        }  
        
        return $badRequestErrors;
    }

    /**     
     * Debug Function
     * @param Sale $debug,$title 
     * @return standardoutput
     * @autor interatia
     */
    public static function debug($debug,$title="Debug:")
    {
        echo "<hr/>";
        echo "<h2>Start: $title</h2>";
        echo '<textarea cols="100" rows="50">';    
        print_r($debug);
        echo "</textarea>";
        echo "<h2>End: $title</h2>";
        echo "<hr/>";
    } 
}
