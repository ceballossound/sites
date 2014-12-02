<?php
/**
 * @file
 * Bartik's theme implementation to provide an HTML container for comments.
 *
 * Available variables:
 * - $content: The array of content-related elements for the node. Use
 *   render($content) to print them all, or
 *   print a subset such as render($content['comment_form']).
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default value has the following:
 *   - comment-wrapper: The current template type, i.e., "theming hook".
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * The following variables are provided for contextual information.
 * - $node: Node object the comments are attached to.
 * The constants below the variables show the possible values and should be
 * used for comparison.
 * - $display_mode
 *   - COMMENT_MODE_FLAT
 *   - COMMENT_MODE_THREADED
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess_comment_wrapper()
 * @see theme_comment_wrapper()
 */
?>
<div id="comments" class="<?php print $classes; ?>"<?php print $attributes; ?>>

    <?php if ($node->type != 'forum'): ?>


    <?php endif; ?>


    <?php if ($node->type != 'reto'): ?>
        <div class="row">
            <div class="col-md-6">

                <?php print render($title_prefix); ?>
                <div class="titcoments">
                    <h2 class="commen-section-title"><?php print t('Comments'); ?></h2>
                </div>
                <?php if ($content['comment_form']): ?>
                    <div class="formcoment">
                        <h2 class="title comment-form"><?php print t('Add new comment'); ?></h2>
                        <?php print render($content['comment_form']); ?>
                    </div>
                <?php endif; ?>
                <?php print render($title_suffix); ?>








            </div>
            <div class="col-md-6">
                <div class="boxcoment">
                    <?php print render($content['comments']); ?>
                </div>

            </div>


        </div>

    <?php endif; ?>


    <?php if ($node->type == 'sreto'): ?>



        <?php print render($title_prefix); ?>


        <div class="titcoments">

            <br>
            <img src="<?php print base_path() . path_to_theme(); ?>/images/img.png"> 

                                        <!-- <h2 class="title"><?php print t('IDEACION'); ?></h2>-->
        </div>
        <?php if ($content['comment_form']): ?>
            <div class="formcoment">
                <h1 class="title comment-form"><?php print t('Agregar nueva Idea'); ?></h1>
                <br>                     
                <?php print render($content['comment_form']); ?>
            </div>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <br>
        <div class="boxcoment">

           <!-- <img src="<?php print base_path() . path_to_theme(); ?>/images/img2.png"> -->
            <div class="separador"></div>
            <?php print render($content['comments']); ?>

        </div>

        <br>
        <img src="<?php print base_path() . path_to_theme(); ?>/images/img.png">




    <?php endif; ?>

    <?php if ($node->type == 'reto'): ?>
        <div class="row">
            <div class="col-md-4">


                <?php print render($title_prefix); ?>


                <div class="titcoments">

                    
                    <!--  <img src="<?php print base_path() . path_to_theme(); ?>/images/img.png"> -->
                    <div class="separador">
                        <h4>ESPACIO DE IDEACION</h4>  
                    </div>

                                        <!-- <h2 class="title"><?php print t('IDEACION'); ?></h2>-->
                </div>
                <?php if ($content['comment_form']): ?>
                    <div class="formcoment">
                        <h1 class="title comment-form"><?php print t('Agregar nueva Idea'); ?></h1>
                        <br>                     
                        <?php print render($content['comment_form']); ?>
                    </div>
                <?php endif; ?>
                <?php print render($title_suffix); ?>








            </div>
            <div class="col-md-8">


                <div class="boxcoment">
                   
                   <!-- <img src="<?php print base_path() . path_to_theme(); ?>/images/img2.png"> -->
                    <?php
                //    foreach ($content['comments'] as $valor) {
                       
                        print render($content['comments']);
                       
                  //  }

                    // print render($content['comments']);
                    ?>


                </div>

            </div>


        </div>

    <?php endif; ?>


</div>
