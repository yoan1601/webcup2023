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
                                    <center><h3 class="card-title">Deviens maître de ton destin en prenant une initiative</h3></center>
                                    <form class="work-request forms-sample" action="<?php echo site_url('prediction/reponse'); ?>">
                                        <div class="form-group " style="width: 100%;">
                                            <label for="exampleTextarea1">Mon rêve ... </label>
                                            <textarea class="form-control" id="exampleTextarea1" rows="4" cols="12" style="width: 100%; background:transparent;"></textarea>
                                        </div>
                                        <div class="work-request--options">
                                            <span class="options-a">
                                                <input id="opt-1" type="checkbox" value="app design">
                                                <label for="opt-1">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                                        <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                                            <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"></path>
                                                        </g>
                                                    </svg>
                                                    Travail
                                                </label>
                                                <input id="opt-2" type="checkbox" value="graphic design">
                                                <label for="opt-2">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                                        <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                                            <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"></path>
                                                        </g>
                                                    </svg>
                                                    Amour
                                                </label>
                                                <input id="opt-3" type="checkbox" value="motion design">
                                                <label for="opt-3">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                                        <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                                            <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"></path>
                                                        </g>
                                                    </svg>
                                                    Santé
                                                </label>
                                            </span>
                                            <span class="options-b">
                                                <input id="opt-4" type="checkbox" value="ux design">
                                                <label for="opt-4">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                                        <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                                            <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"></path>
                                                        </g>
                                                    </svg>
                                                    Etude
                                                </label>
                                            </span>
                                        </div>
                                        <input type="submit" value="Montre moi mon destin">
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