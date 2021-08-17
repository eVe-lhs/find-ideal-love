<?php

 
//system('swipl -s test.pl -g "test." -t halt.');

function find_type ($Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10,$Q11,$Q12,$Q13,$Q14,$Q15)
 {
if($_SESSION['sex']=='Male'){
$output = `swipl -s ideal.pl -g "type-male($Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10,$Q11,$Q12,$Q13,$Q14,$Q15)." -t halt.`;}
else
{$output = `swipl -s ideal.pl -g "type-female($Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10,$Q11,$Q12,$Q13,$Q14,$Q15)." -t halt.`;}
return ($output);

}
function display_results()
{
    $result=`swipl -s ideal.pl -g "  ." -t halt.`;
}
?>