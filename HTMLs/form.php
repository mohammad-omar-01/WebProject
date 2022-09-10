<form  enctype="multipart/form-data" method="POST" name="addAudio">

<div class="row" dir="rtl">
    <div class="col-md-3">
        <div class="form-group">
            <label style="margin-left:3.5cm;margin-top:.5cm;">الاسم</label>
            <input type="text" class="form-control" name="AudioName" id="name" value="" required>
        </div>
    </div>
  
</div>

<div class="row" dir="rtl">

    <div class="col-md-1">
        <div class="form-group" >
            <label style="margin-left:4cm;margin-top:.5cm;">الصورة</label>
            <input style="margin-left:10cm;margin-top:.5cm;" accept="image/png, image/jpeg" type="file" dir="ltr" name="Pic" required>
            <div style="">
            <img src="../Uploads/" class="image-photo" style="width: 169px;margin-top: 9px;"/>
            </div>
        </div>
    </div>
    </div>
    <div class="modal-footer" style="margin-left:18cm;margin-top:.5cm;">

        <button type="submit"  id="submit" name="SubmitNewAudio" >إضافة</button>
</div>
    </form>
