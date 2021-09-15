<?php

function findTwoNumbers() {
    $num1 = rand(1, 99);
    $num2 = rand(1, 99);
    $sum = $num1 + $num2;
    if (($sum) > 100) {
        return findTwoNumbers();
    } else {
        return array($num1, $num2, $sum);
    }
}

$num_ar = findTwoNumbers();
?>
<div ><center>
        <table border="1" style="border-collapse:collapse;font-size:40px;font-weight:bold;">
            <tr>
                <td style="padding:10px;"></td>
                <td style="padding:10px;"><?php echo ( $num_ar[0] - $num_ar[0] % 10 ) / 10 == 0 ? "" : ( $num_ar[0] - $num_ar[0] % 10 ) / 10; ?>        </td>
                <td style="padding:10px;"><?php echo $num_ar[0] % 10; ?>        </td>
            </tr>
            <tr>
                <td style="padding:10px;text-align:right;"> +</td>
                <td style="padding:10px;"><?php echo ( $num_ar[1] - $num_ar[1] % 10 ) / 10 == 0 ? "" : ( $num_ar[1] - $num_ar[1] % 10 ) / 10; ?></td>
                <td style="padding:10px;"><?php echo $num_ar[1] % 10; ?></td>
            </tr>
            <tr>
                <td style="padding:10px;" ></td>
                <td style="padding:10px;"><div id="ansDiv1" style="visibility : hidden; "><?php echo ($num_ar[2] - $num_ar[2] % 10) / 10; ?></div></td>
                <td style="padding:10px;"><div id="ansDiv2" style="visibility : hidden; "><?php echo $num_ar[2] % 10; ?></div></td>

            </tr>
            <tr>
                <td colspan="3" style="padding:3px;text-align:center;" ><button onclick="showAnswer()">Show Answer</button>&nbsp;<button onclick="reload()">REFRESH</button></td>
            </tr>
            <tr>
                <td colspan="3" style="padding:3px;text-align:center;" ><div  id="progressBar"></div></td>
            </tr>
        </table>
    </center>
</div>
<script>
    function showAnswer() {
        document.getElementById("ansDiv1").style = "visibility : visible; ";
        document.getElementById("ansDiv2").style = "visibility : visible; ";
        var Refreshtimeleft=0;
        var RefreshTime = 10;
        var RefreshTimer = setInterval(function () {
            if (Refreshtimeleft >= RefreshTime) {
                reload();
                clearInterval(RefreshTimer);
            }
            document.getElementById("progressBar").innerHTML = RefreshTime - Refreshtimeleft;
            Refreshtimeleft += 1;
        }, 1000);
    }
    function reload() {
        location.reload();
    }
    var timeleft = 0;
    var AnswerTime = 20;
    var AnswerTimer = setInterval(function () {
        if (timeleft >= AnswerTime) {
            clearInterval(AnswerTimer);
            showAnswer();
        }
        document.getElementById("progressBar").innerHTML = AnswerTime - timeleft;
        timeleft += 1;
    }, 1000);

</script>