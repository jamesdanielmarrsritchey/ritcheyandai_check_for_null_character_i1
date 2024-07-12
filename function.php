<?php
function findNullCharacterPositions($string) {
    $positions = [];
    $position = 0;
    
    // Iterate through the string to find all occurrences of the null character
    while (($position = strpos($string, "\0", $position)) !== false) {
        // Add the position to the array, adjusting for human-readable indexing (starting from 1)
        $positions[] = $position + 1;
        // Move past the current position to avoid infinite loop
        $position++;
    }
    
    return $positions;
}
?>