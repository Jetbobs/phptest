<?php
include("header.php");
include("data.php");
        ?>
            <table>
        <colgroup>
            <col width="5%">
            <col width="60%">
            <col width="10%">
            <col width="15%">
            <col width="10%">
        </colgroup>
        <thead>
            <th class="table_num">No</th>
            <th class="table_title">제목</th>
            <th class="table_writer">글쓴이</th>
            <th class="table_time">작성시간</th>
            <th class="table_likes">좋아요</th>
        </thead>
        <tbody>
            <?php
                foreach(array_slice($forum,$now,$list_num) as $row1){
            ?>
            <tr>
                <td class="td_num"><?php echo($row1["idx"]);?></td>
                <td class="td_title"><?php echo($row1["title"]);?></td>
                <td class="td_writer"><?php echo($row1["writer"]);?></td>
                <td class="td_time"><?php echo($row1["date"]);?></td>
                <td class="td_likes"><?php echo($row1["likes"]);?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
<div class="pager">
    <ul>
        <li>
            <?php
                for($print_page = $s_page; $print_page <= $e_pageNum; $print_page++){
                    ?>
                    <a href="index.php?page=<?php echo $print_page; ?>"> <?php echo $print_page; ?></a>
                <?php }
            ?>
        </li>
    </ul>
</div>
<?php
include("footer.php");
?>