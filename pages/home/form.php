<div class="row" dir="rtl">
    <div class="col-md-3">
        <div class="form-group">
            <label>الاسم</label>
            <input type="text" class="form-control" name="name" id="name" value="" required>
        </div>
    </div>
</div>
<div class="row" dir="rtl">
    <div class="col-md-1">
        <div class="form-group">
            <input class="form-check-input" type="radio" name="type" id="type1"
                   value="film" data-toggle-value="duplication">
            <label class="form-check-label" for="type1">
                فلم
            </label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <input class="form-check-input" type="radio" name="type" id="type2"
                   value="show" data-toggle-value="duplication" >
            <label class="form-check-label" for="type2">
                مسلسل
            </label>
        </div>
    </div>
    <div id="tvShow">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="formGroupExampleInput"
                       placeholder="الموسم" value="" name="season" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="formGroupExampleInput2"
                       placeholder="الحلقة" name="episode" >
            </div>
        </div>
    </div>
</div>
<div class="row" dir="rtl">
    <input type="hidden" name="id">
    <div class="col-md-3">
        <div class="form-group">
            <label>اللوجو</label>
            <input type="file"  name="logo">
            <div style="max-width:100px">
                <img src="Uploads/" class="image-logo" style="width: 169px;margin: 9px;" />
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group" >
            <label>الصورة</label>
            <input accept="image/png, image/jpeg" type="file"  name="photo">
            <div style="max-width:100px">
            <img src="Uploads/" class="image-photo" style="width: 169px;margin: 9px;"/>
            </div>
        </div>
    </div>
</div>
<div class="row" dir="rtl">
    <div class="col-md-3">
        <div class="form-group">
            <label>الفيديو</label>
            <input type="file"  name="video">
            <div style="max-width:100px">
                <img src="Uploads/" class="image-video" style="width: 169px;margin: 9px;" />
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <div class="form-group" style="font-size: 16px; font-family: 'Sukar Regular'">
            <label for="exampleFormControlSelect1">التصنيف</label>
            <select class="form-control" id="exampleFormControlSelect1" required name="category">
                <option>ريادي</option>
                <option>ثقافي</option>
                <option>تاريخي</option>
                <option>ديني</option>
                <option>وثائقي</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <label>الوصف</label>
            <textarea class="form-control" rows="5" cols="50" style="resize: none" required
                      name="description"></textarea>
        </div>
    </div>

</div>
