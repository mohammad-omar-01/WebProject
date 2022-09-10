<form  enctype="multipart/form-data" method="POST" name="addAudio">

<div class="row" dir="rtl">
    <div class="col-md-3">
        <div class="form-group">
            <label style="margin-left:3.5cm;margin-top:.5cm;">العنوان</label>
            <input type="text" class="form-control" name="podCastNAme" id="name" value="" required>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label style="margin-left:3.5cm;margin-top:.5cm;"> الناشر</label>
            <input type="text" dir="ltr" class="form-control" name="pulicher" id="name" value="" required>
        </div>
    </div>
</div>
<div class="row" dir="rtl">
    <div class="col-md-3">
        <div class="form-group" >
            <label style="margin-left:4cm;margin-top:.5cm;">الغلاف</label>
            <input style="margin-top:.5cm;" accept="image/png, image/jpeg" type="file" dir="rtl" name="Pic" required>
            
            <img src="../Uploads/" class="image-photo" style="width: 169px;margin-top: 9px;"/>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group" >
            <label style="margin-left:4cm;margin-top:.5cm;" style="width: 169px;margin-top: 9px;"> الصوت</label>
            <input style="margin-top:.5cm;" accept="audio/mp3" type="file" dir="rtl" name="Audio" required>
        </div>
    </div>
    <div class="row" dir="rtl">
        <div class="col-md-3">
            <div class="form-group" >
                <label style="margin-left:4cm;margin-top:.5cm;">الوصف</label>
                <textarea class="form-control" rows="5" cols="140" style="resize: none" required
                          name="description"></textarea>                    
            </div>
        </div>
    </div>
    <div class="modal-footer" style="margin-left:18cm;margin-top:.5cm;">

        <button type="submit"  id="submit" name="SubmitNewAudio" action="inedx.php" >إضافة</button>
    </div>
</div> 
</form>
