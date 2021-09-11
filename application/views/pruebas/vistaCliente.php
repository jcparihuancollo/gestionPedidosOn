
        <!-- =============================================== -->

       
                <h1> Cliente: 
                <span class="hidden-xs"><?php echo $this->session->userdata("nombre")?></span></h1>

                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="panel panel-defaul">
                                <div class="panel-heading">
                                    <h3 class="panel-title "><span class="glyphicon glyphicon-mark ">peta</span></h3>
                                </div>
                                <div class="panel-body">
                                    
                                </div>

                            </div>
                            

                        </div>
                        
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-defaul">
                                <div class="panel-heading">
                                    <h3 class="panel-title "><span class="glyphicon glyphicon-mark ">seleccionar</span></h3>
                                </div>
                                <div class="panel-body">
                                   <form>
                                       <div class="row">
                                           <div class="col-md-6 col-sm-6">
                                               <div class="form-group">
                                                   <label for="latitude">latitud</label>
                                                   <input type="text" class="form-control" id="latitude" placeholder="" name="">
                                               </div>
                                           </div>
                                            <div class="col-md-6 col-sm-6">
                                               <div class="form-group">
                                                   <label for="longitude">logitud</label>
                                                   <input type="text" class="form-control" id="longitude" placeholder="" name="">
                                               </div>
                                           </div>
                                       </div>
                                        <div class="form-group">
                                            <label for="jembatan_id">Mana</label>
                                            <select class="form-control" name="jembatan_id" id="jembatan_id">
                                                <option value=" ">phile nau tam</option>
                                                <?php foreach ($itemjembatan->result() as $jembatan ) {
                                                    ?>
                                                    <option value="<?php echo $jembatan->id_jembatan; ?>"><?php echo $jembatan->namajembatan; ?></option>
                                                    <?php

                                                }

                                                ?>
                                            </select>
                                        </div>


                                   </form> 

                                </div>

                            </div>
                            

                        </div>

                    </div>
                </div>
       
