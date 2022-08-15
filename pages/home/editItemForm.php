    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true" id="editItemModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" dir="rtl" style="padding: 0cm .5cm 0cm .5cm">
                <div class="modal-header">
                    <h3 id="myModalLabel">تعديل محتوى جديد</h3>
                </div>
                <form dir="rtl" style="margin-top: 10px" action="adminpage.php" enctype="multipart/form-data" method="POST" name="editItem">
                    <?php include "form.php"?>
                  <button type="submit" class="btn btn-primary" id="submit" name="SubmitEditVideo"  >تعديل</button>
                </form>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

