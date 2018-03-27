<div  class="">
    <table class="table table-bordered table-hover table-responsive">
        <tr style="height: 50px" class="text-center">
            <td width='15px'>ลำดับ</td>
            <td width='60%'>ชื่อ-สกุล</td>
            <td width='80px'>รายละเอียด</td>
            <td width='15px'>แก้ไข</td>
            <td width='15px'>ลบ</td>
        </tr>
<?php while($arr = $data->fetch_object()): ?>
        <tr class="text-center">
            <td><?php echo ++$n;  ?></td>
            <td><?php echo $arr->memberFName .' '.$arr->memberLName;  ?></td>
            <td><input class="btn btn-info view" type="button" value="รายละเอียด" name="<?php  ?>" id="<?php echo $arr->memberId;  ?>"></td>
            <td><input class="btn btn-info edit" type="button" value="แก้ไข" name="<?php  ?>" id="<?php echo $arr->memberId;  ?>"></td>
            <td><input class="btn btn-danger delete" type="button" value="ลบ" name="<?php  ?>" id="<?php echo $arr->memberId;  ?>"></td>
        </tr>
<?php endwhile; ?>
    </table>
</div>
<div class="modal fade" id="dataModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-danger close"  data-dismiss="modal">close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function()
        {
            $('.view').click(function()
                {

                   var uid = $(this).attr('id');  
                   $.ajax({
                    url:'memberLis.php',
                    method:'post',
                    data:{uid:uid},
                    success: function()
                    {
                        alert("<?php echo ROOT; ?>");
                    }
                   });
                });

            $('.edit').click(function()
                {
                   $("#dataModal").modal('show');
                });

            $('.delete').click(function()
                {
                   $("#dataModal").modal('show');
                });
        });
</script>
