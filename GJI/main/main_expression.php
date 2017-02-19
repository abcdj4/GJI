<?php
    if($count<1)
    {
        print "검색결과가 없습니다.<BR>";
    }
        else
    {
?>
    <TABLE width="700" border="1" cellspacing="0" cellpadding="8">
        <TBODY>
            <TR>
                <TH>세부영역</TH>
                <TH>등급</TH>
                <TH>장애현상</TH>
                <TH>분류</TH>
            </TR>
            <?php
                while($row = $stmh->fetch(PDO::FETCH_ASSOC))
                {
            ?>
            <TR>
                <TD align="center"><?=htmlspecialchars($row['f_field'])?></TD>
                <TD align="center"><?=htmlspecialchars($row['grade'])?></TD>
                <TD><?=htmlspecialchars($row['status'])?></TD>
                <TD align="center"><?=htmlspecialchars($row['f_type'])?></TD>
            </TR>
            
            <?php
                }
            ?>
        </TBODY>
    </TABLE>
<?php
    }
?>