
<div class="row" style="margin-top:6%;">
    <div class="col-md-2">
    </div>
    <div class="col-md-6">
        <div class="alert alert-info text-center">
            <p> List of People <i class="fa fa-users"></i> you may know</p>
        </div>
        <?php
            $sql = $this->run("SELECT * FROM `users` WHERE `user_id`!='".$_SESSION['user_id']."' AND `status`='1'");
            if($this->rows($sql) > 0 ){

                while($row = $this->assoc($sql)){
                    ?>
                    <div class="panel panel-primary">
                        <div class="panel-body">

                            <?php echo $row['username']; ?>
                            <br>
                            <img src="img/audu.jpg" class="img-circle" alt="cinque Terre" style="width:8%">
                            <br>
                            <button class="btn btn-success btn-xs" id="btn_add_<?php echo $row['user_id']; ?>" onclick="add_friend(<?php echo $row['user_id']; ?>)"> 
                                Add Friend <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <?php
                }

            }else{
                ?>
                <div class="alert alert-warning text-center">
                     <p> No friend <i class="fa fa-user"></i> Found</p>
                </div>
                <?php
            }
        ?>
    </div>
    <div class="col-md-4">
    </div>
</div>