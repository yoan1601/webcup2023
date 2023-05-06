<?php
$this->load->view('templates/header_prediction.php');
?>

<div class="content" style="margin-top: auto;">
    <div class="hire">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <center>
                                        <h2 class="card-title">Prédiction</h2>
                                    </center>
                                    <center>
                                        <h4 class="card-title">Situation amoureuse</h4>
                                    </center>
                                    <center>
                                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus impedit nisi, molestias ab sed minima reiciendis fugiat non dolorum nihil. Voluptatem tempora aliquam ipsum dolorum aut optio eveniet id. Sequi.</h5>
                                    </center>
                                </div>
                                <div class="reponse_options">
                                    <button class="comment" onclick="display_comment()">
                                        Commentaire
                                    </button>
                                    <button class="comment">
                                        <a href="<?php echo site_url('prediction/solution'); ?>" style="text-decoration: none; color: white;">
                                            Prendre une initiative
                                        </a>
                                    </button>

                                </div>
                                <form class="work-request forms-sample" action="<?php echo site_url('main/'); ?>">
                                    <div class="form-group " style="width: 100%">
                                        <input type="radio" name="satisfaction" value="1" checked>satisfait</input>
                                        <input type="radio" name="satisfaction" value="0">non satisfait</input>
                                    </div>
                                    <input type="submit" value="quitter le temple"></input>
                                    <div class="form-group " style="width: 100%; display:none;" id="commentaire">
                                        <label for="exampleTextarea1">Deposez votre commentaire</label>
                                        <textarea class="form-control" id="exampleTextarea1" rows="4" cols="12" style="width: 100%; background:transparent;"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->load->view('templates/footer_prediction'); ?>