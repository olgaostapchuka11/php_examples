<?php
 // Task 1//
$entries = [
    ['0', '0', '0'], 
    ['0', '0', '0'],
    ['0', '0', '0'] 
];


for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        $entries[$r][$c] = 'x';
    }
}


?>

<?php
/* Task 2
$entries = [
    ['0', '0', '0'], 
    ['0', '0', '0'], 
    ['0', '0', '0'] 
];


for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        if ($c != 0)
        $entries[$r][$c] = 'x';
    }
}
*/
?>

<?php
/* Task 3 - 1

$entries = [
    ['0', '0', '0'], 
    ['0', '0', '0'], 
    ['0', '0', '0'] 
];


for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        if ($r != 0 && $r !=2 && $c != 0 && $c != 2)
        $entries[$r][$c] = 'x';
    }
}
*/

/* Task 3 - 2

$entries = [
    ['0', '0', '0'], // 0
    ['0', '0', '0'], //1
    ['0', '0', '0'] //2
];


for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        $entries[$r][$c] = 'x';
    }
    $entries[1][1] = '0';
}
*/

?>

<?php
/* Task 4 

$entries = [
    ['0', '0', '0'], 
    ['0', '0', '0'], 
    ['0', '0', '0'] 
];


for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        if ($r != 1) 
        $entries[$r][$c] = 'x';
    }
}
*/
?>

<?php
/* Task 5
$entries = [
    ['0', '0', '0'], 
    ['0', '0', '0'],
    ['0', '0', '0'] 
];


for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        $entries[$r][$c] = 'x';

        if($r == 2 && ($c == 1 || $c == 2)) {
            $entries[$r][$c] = '0';
        }
            
    }
    //$entries[2][1] = '0';
    //$entries[2][2] = '0';
}
*/
?>


<?php
/* Task 6 
$entries = [
    ['0', '0', '0'], 
    ['0', '0', '0'], 
    ['0', '0', '0'] 
];


for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        $entries[$r][$c] = 'x';

    if ($r !== 0 && $c !== 0) {
        $entries[$r][$c] = '0';
    }
      
}
   
    // $entries[1][1] = '0';
    // $entries[1][2] = '0';
    // $entries[2][1] = '0';
   // $entries[2][2] = '0';
    

}
*/
?>


<?php
/* Task 7
$entries = [
    ['0', '0', '0'], 
    ['0', '0', '0'], 
    ['0', '0', '0'] 
];


for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        if ($r != 1 && $c != 1)
        $entries[$r][$c] = 'x';
    }
}
*/
?>


<?php
/* Task 7 - 2

$entries = [
    ['0', '0', '0'], 
    ['0', '0', '0'], 
    ['0', '0', '0'] 
];

for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        $entries[$c][1] = 'x';
        $entries[1][$r] = 'x';
    }
}
*/
?>


<?php
/* Task 8
$entries = [
    ['0', '0', '0'], 
    ['0', '0', '0'], 
    ['0', '0', '0'] 
];

for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        if ($r == 1) {
            $entries[$r][$c] = 'm';
    } else if ($c == 0) {
        $entries[$r][$c] = 'x';    
    }
        
    }
}
*/


?>

<?php output($entries);?>
<pre><?=print_r($entries, true)?></pre>
<?php function output($entries) { ?>
    <table>
        <?php for($row = 0; $row < 3; $row++): ?>
            <tr>
            <?php for($col = 0; $col < 3; $col++): ?>
                <td><?=$entries[$row][$col] ; ?></td>
            <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
<?php } ?>