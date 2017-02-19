<?php
    if($count < 1)
        {
            print "검색 결과가 없습니다.<BR>";
        }
    else
    {
        ?>
        <TABLE width="90%" border="1" cellspacing="0" cellpadding="8">
        <TBODY>
        <TR>
            <TH>번호</TH> 
            <TH>세부영역</TH>
            <TH>장애등급</TH>
            <TH>장애현상</TH>
            <TH>장애유형</TH>
            <TH>&nbsp;</TH>
            <TH>&nbsp;</TH>
        </TR>
        <?php
            while($row = $stm->fetch(PDO::FETCH_ASSOC))
            {
        ?>
        <TR>
            <TD align="center"><?=htmlspecialchars($row['no'])?></TD>
            <TD align="center"><?=htmlspecialchars($row['f_field'])?></TD>
            <TD align="center"><?=htmlspecialchars($row['grade'])?></TD>
            <TD align="center"><?=htmlspecialchars($row['status'])?></TD>
            <TD align="center"><?=htmlspecialchars($row['f_type'])?></TD>
            <TD align="center"><a href=ad_update.php?no=<?=htmlspecialchars($row['no'])?>&f_service=<?= htmlspecialchars($f_service)?>>수정</a></TD>
                
            <TD align="center"><a href=ad_delete.php?no=<?=htmlspecialchars($row['no'])?>&f_service=<?= htmlspecialchars($f_service)?>>삭제</a></TD>

        </TR>
        <?php
            }
        ?>
        </TBODY>
        </TABLE>
    <?php
    }
    ?>