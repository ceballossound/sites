<?php

/**
 * @file
 * ViveDigital's theme implementation to display a node for app profile.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


<div class="boxficha">
  <div class="mod1">
	<?php print render($content['field_image']); ?>
  </div>
  
  <section class="ficha">
  	
  		<h1>
  		<?php print render($title); ?>
  		</h1>
  	<div class="infoapp">
  		<h2><?php print render($content['field_categor_a_aplicaci_n']['#title']); ?></h2>
  		<p><?php print render($content['field_categor_a_aplicaci_n']); ?>  		

  		</p>
  	</div>
  	<div class="infoapp">
  		<h2><?php print render($content['field_tags']['#title']); ?></h2>
  		<p><?php print render($content['field_tags']); ?></p>
  	</div>
  	<div class="tinfoapp">
  		<h2><?php print render($content['field_calificaci_n']['#title']); ?></h2>
  	</div>
  	<div class="tinfoapp">
  		<h2>Tiendas</h2>
  	</div>
  	<div class="barraapp">
  		<div class="estrellas">
  		<p><?php print render($content['field_calificaci_n']); ?></p>
  		</div>
  		<div class="estrellas">
  		<?php if (isset($content['field_link_a_tienda']['#items']['0']['url'])): ?>
  		<p>
  		<a href="<?php print render($content['field_link_a_tienda']['#items']['0']['url']); ?>" target="blank"><img src="<?php print base_path().path_to_theme(); ?>/images/linkplay.png"></a>
  		</p>
  		<?php endif; ?>
  		<?php if (isset($content['field_link_a_apple_store']['#items']['0']['url'])): ?>
  		<p>
  		<a href="<?php print render($content['field_link_a_apple_store']['#items']['0']['url']); ?>" target="blank"><img src="<?php print base_path().path_to_theme(); ?>/images/linkapple.png"></a>
  		</p>
  		<?php endif; ?>
  		</div>
  	</div>
  </section>
</div>

<div class="complemento"></div>

<div class="boximg">

<div class="boxdesc">
  <h1><?php print render($content['body']['#title']); ?></h1>
  <p><?php print render($content['body']); ?></p>
  <?php 
  //inicio
  
    //Detect special conditions devices
        $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
        $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
        $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
        $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
        $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
        $Windows   = stripos($_SERVER['HTTP_USER_AGENT'],"Windows");

        
        if ($node->type == 'aplication') {//para mostrar solo para los nodos de aplication
        
            $urlCompartir="";
            
            if ((array_key_exists('field_link_a_tienda', $content)) and (array_key_exists('field_link_a_apple_store', $content))) {//si hay link a play store y a la apple store
                /*if($content['field_link_a_tienda']!=null)
                {
                    print "not null";//existe 
                }*/
                //print "tiene los dos links";
                
                if( $iPod || $iPhone ){
                    //browser reported as an iPhone/iPod touch -- do something here
                    hide($content['field_link_a_tienda']);//esconde el link de android y muestra el de la apple store
                    $urlCompartir=$content['field_link_a_apple_store'][0]['#element']['url'];//url a compartir
                    
                    
                }else if($iPad){
                    //browser reported as an iPad -- do something here
                    hide($content['field_link_a_tienda']);//esconde el link de android y muestra el de la apple store
                    $urlCompartir=$content['field_link_a_apple_store'][0]['#element']['url'];//url a compartir
                    
                }else if($Android){
                    //browser reported as an Android device -- do something here
                    hide($content['field_link_a_apple_store']);
                    $urlCompartir=$content['field_link_a_tienda'][0]['#element']['url'];//url a compartir
                }else if($webOS){
                    //browser reported as a webOS device -- do something here
                    hide($content['field_link_a_apple_store']);
                    $urlCompartir=$content['field_link_a_tienda'][0]['#element']['url'];//url a compartir
                }else if($Windows)
                {
                    //si esta en windows muestre las dos
                    //hide($content['field_link_a_apple_store']);
                    $urlCompartir=$content['field_link_a_tienda'][0]['#element']['url'];//url a compartir
                }
                
            }
            else
            {
                if(array_key_exists('field_link_a_tienda', $content))//existe el link a la play store y no existe a apple store
                {
                    //TODO compartir la url de play store
                    $urlCompartir=$content['field_link_a_tienda'][0]['#element']['url'];
                
                }
                else
                {
                    if(array_key_exists('field_link_a_apple_store', $content))//existe a la applestore, no existe a la play store
                    {
                        //TODO compartir la url de apple store
                        $urlCompartir=$content['field_link_a_apple_store'][0]['#element']['url'];
                        
                    }
                    else //no existe ninguno de los dos links
                    {
                        //TODO compartir la pagina -->obtener la dir actual
                        $urlCompartir="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
                        
                    
                    
                    }
                    
                }
            
            
            }
        }
        
    print "<div id='fb-root'></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '//connect.facebook.net/es_LA/all.js#xfbml=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class='fb-share-button' data-href='".$urlCompartir."' data-type='button_count'></div>
<!--<div class='fb-like' data-href='https://play.google.com/store/apps/details?id=com.smartsoft.punchgame' data-layout='box_count' data-action='like' data-show-faces='true' data-share='true'></div>-->
<!--<div class='fb-like' data-href='".$urlCompartir."' data-layout='button_count' data-action='like' data-show-faces='true' data-share='true'></div>-->";

 print "&nbsp; &nbsp; &nbsp;";
 print "<a href='https://twitter.com/share' class='twitter-share-button' data-lang='es' data-url='".$urlCompartir."' data-text='App hecha en el Cauca, ejemplo de emprendimiento: ".$title."' data-via='AppsCreaTIC'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";

print "<!-- Inserta esta etiqueta donde quieras que aparezca Botón Compartir. -->
<div class='g-plus' data-action='share' data-href='".$urlCompartir."' data-annotation='none'></div>

<!-- Inserta esta etiqueta después de la última etiqueta de compartir. -->
<script type='text/javascript'>
  window.___gcfg = {lang: 'es'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>";
    
        
    //fin
    ?>
</div>

<?php if (isset($content['field_imagenes_funcionamiento'])): ?>
 <div class="imagesapp">
  <?php print render($content['field_imagenes_funcionamiento']); ?>
 </div>
<?php endif; ?>

</div>



<div class="complemento"></div>
<?php if (isset($content['field_video'])): ?>
<div class="videoapp">
  <?php print render($content['field_video']); ?>
</div>
<?php endif; ?>





<section class="zonacoment">
  
  <section>
    <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
   ?>

  <?php print render($content['comments']); ?>
  </section>
</section>




</div>
