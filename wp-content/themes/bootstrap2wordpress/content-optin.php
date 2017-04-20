 <?php
 //Custom Fields
$optin_text            = get_post_meta(20, 'optin_text', true);
$optin_button_text     = get_post_meta(20, 'optin_button_text', true);
 ?>
 
 
 <!--Opt In Section-->
        <section id="optin">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-8">
                        <p class="lead"><?php echo $optin_text; ?></p>
                    </div> <!--Col 8-->
                    
                    <div class="col-sm-4">
                        <button class="btn btn-success btn-lg btn-block"  data-toggle="modal" data-target="#myModal">
                            <?php echo $optin_button_text; ?>
                        </button>
                    </div> <!--Col 4-->
                    
                    
                </div>
            </div> <!--Container-->
        </section>