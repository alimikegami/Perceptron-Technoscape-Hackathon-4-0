<?php include("template/header.php");?>

<!-- <button type="button" class="btn login-button" data-toggle="modal" data-target="#modalUlasan">Launch demo modal</button> -->
                <!-- <div class="modal fade" id="modalUlasan" tabindex="-1" aria-labelledby="labelModalUlasan" aria-hidden="false"> -->
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ulas: Glamping Malang Asri</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <img src="img/hotel1.jpg" class="img-fluid" alt="...">
                                    </div>
                                </div>
                                <br>
                                <form action="">
                                <div class="row">
                                    <div class="col text-center">
                                        <ion-icon name="star"></ion-icon> 
                                        <ion-icon name="star"></ion-icon> 
                                        <ion-icon name="star"></ion-icon> 
                                        <ion-icon name="star"></ion-icon> 
                                        <ion-icon name="star"></ion-icon> 


                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="ulasan_deskripsi" class="form-label">Ulasan Kamu</label>
                                        <input type="text" class="form-control align-text-top" style="height: 250px;" id="ulasan_deskripsi" name="review">
                                    </div>
                                </div>
                                </form>
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="save">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>