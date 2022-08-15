<?php
include "./connection.php";

$query3 = "SELECT * FROM videos where category like 'ريادي'";
$result3 = mysqli_query($con, $query3);
$searchResultRows3 = [];

while ($row3 = mysqli_fetch_array($result3)) {
    array_push($searchResultRows3, $row3);
}

?>



<a class="maintitles3" style="margin-left: 730px;">
    ديني
</a>
<div class="main-content">
    <!-- favorite section starts   -->

    <section id="comedy">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-13 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <a href="#" class="iq-view-all"></a>
                    </div>
                    <div class="favorite-contens">
                        <ul class="favorites-slider list-inline row p-0 mb-0">
                            <!-- slide item 1 -->
                            <?php foreach ($searchResultRows3 as $key => $row) { ?>
                                <li class="slide-item" style="width: 421px; height:236px">
                                    <div class="block-images position-relative">
                                        <div class="img-box">
                                            <img src="../Uploads/<?php echo $row['cover'] ?>" class="img-fluid" alt="" style=" width:421px;
                                                height:171px"/>
                                        </div>
                                        <div class="block-description">
                                            <h6 class="iq-title">
                                                <a href="#"> <?php echo $row['name'] ?> </a>
                                            </h6>

                                            <div class="hover-buttons">
                                                   <a href="#" class="btn btn-hover iq-button video-btn" data-bs-toggle="modal"
                                                      data-bs-target="#play"
                                                      onclick="playIt('<?= $row['video'] ?>');loadSeriesEpisodes({name: '<?=$row["name"]?>',season: '<?=$row["season"]?>'})">
                                                              <i class="fa fa-play mr-3"></i>
                                                تشغيل الآن</a>

                                            </div>
                                        </div>
                                        <div class="block-social-info">
                                            <ul class="list-inline p-0 m-0 music-play-lists">
                                            </ul>
                                        </div>
                                    </div>
                                </li>


                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


