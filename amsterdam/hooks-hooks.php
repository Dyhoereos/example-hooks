<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Function to bold capitalized words on quote page.
 */
function boldCapitalizedWords() {
    /* references CI superobject */
    $CI =& get_instance();
    /* assign $buffer to finalized data */
    $buffer = $CI->output->get_output();

    /* initialize $matches and $strings to null */
    $matches = null;
    $strings = null;
    
    /* 
     * searches $buffer for a match to the regex '/<p class="lead">(.*?)<\/p>/s'
     * $matches will contain results of the search 
     * note: matches[0] will also contain the html tags while matches[1] will 
     * contain the text within the tags
     */
    preg_match('/<p class="lead">(.*?)<\/p>/s', $buffer, $matches);
    
    /* 
     * determines if $matches[1] is not set, if not set then set final output 
     * string and call _display 
     */
    if (!isset($matches[1])) {
        $CI->output->set_output($buffer);
        $CI->output->_display();
        
    /* else if a match is found then bold capitalized words including "I" */
    } else {
        /* initialize a string $modifiedText to text contained within tags */
        $modifiedText = $matches[1];
        /* 
         * searches the text for capitalized words including "I" using a regular 
         * expression and puts them in $strings
         */
        preg_match_all('([A-Z][a-zA-Z]+[ ]*|I[ ]*)', $matches[1], $strings);
        
        foreach ($strings as $string) {
            /* 
             * remove duplicate values in $string to prevent multiple <b> tags 
             * being added if there are duplicate capitalized words
             */
            $string = array_unique($string);
            /* 
             * replace capitalized words in the text with the same text and <b> 
             * and </b> appended
             */
            foreach ($string as $letter) {
                $modifiedText = str_replace($letter, '<b>' . $letter . '</b>', 
                        $modifiedText);
            }
        }
        
        /* 
         * replace the text within the <p class="lead"> and </p> tags with the
         * modified text
         */
        $output = str_replace($matches[1], $modifiedText, $buffer);
        /* set final output string and call _display function */
        $CI->output->set_output($output);
        $CI->output->_display();
    }
}