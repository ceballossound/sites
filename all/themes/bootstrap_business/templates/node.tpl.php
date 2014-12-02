<div class="row">


   

</div>

<div class="row">
 
    <div class="col-md-8">
        
        <div class="contart">
            <?php
            // We hide the comments and links now so that we can render them later.
            hide($content['comments']);
            hide($content['links']);
            hide($content['field_imagen']);
            hide($content['field_tags']);
           hide($content['field_documentos']);
            hide($content['field_fecha']);
            print render($content);
            ?>
             <?php print render($content['field_documentos']); ?> 

        </div>
        
    </div>
     <div class="col-md-4">
        
         <?php print render($title_prefix); ?>
        <h1>
            <a href="<?//php print $node_url; ?>">
                <?//php print $title; ?>
            </a>
        </h1>
        
           <div class="infoart">
            <?php if ($display_submitted): ?>
                <?php print render($content['field_imagen']); ?>
                <?php print render($content['field_tags']); ?>
                <div class="user-pub">
                    <div class="icopub">
                        <img src="<?php print base_path() . path_to_theme(); ?>/images/icopub.png" class="img-responsive">
                    </div>
                    <div class="autorpub">
                        <h4> Creado por</h4>
                        <?php print t('!username', array('!username' => $name,)); ?>
                    </div>
                </div>
                <div class="fecha-pub">
                    <?php
                    print t('!datetime', array('!datetime' => $date));
                    ?>
                </div>
            <?php endif; ?>
            <h2 class="infopub">
            </h2>
        </div>

    </div>

    



</div>

<div class="row">
    <div class="col-md-12">
        
        <?php print render($content['comments']);?>
    </div>
</div>

