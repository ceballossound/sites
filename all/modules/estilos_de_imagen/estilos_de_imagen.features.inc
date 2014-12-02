<?php
/**
 * @file
 * estilos_de_imagen.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function estilos_de_imagen_image_default_styles() {
  $styles = array();

  // Exported image style: estilo_general_de_contenido.
  $styles['estilo_general_de_contenido'] = array(
    'name' => 'estilo_general_de_contenido',
    'label' => 'estilo general de contenido',
    'effects' => array(
      2 => array(
        'label' => 'Escalar y recortar',
        'help' => 'Escalar y recortar mantendrán la relación de proporciones de la imagen original y se desechará lo que sobre por el lado mayor. Esto es especialmente útil para crear miniaturas perfectamente cuadradas sin deformar la imagen.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 729,
          'height' => 444,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: estilo_para_comentarios.
  $styles['estilo_para_comentarios'] = array(
    'name' => 'estilo_para_comentarios',
    'label' => 'estilo para comentarios',
    'effects' => array(
      7 => array(
        'label' => 'Escalar y recortar',
        'help' => 'Escalar y recortar mantendrán la relación de proporciones de la imagen original y se desechará lo que sobre por el lado mayor. Esto es especialmente útil para crear miniaturas perfectamente cuadradas sin deformar la imagen.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 601,
          'height' => 380,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: estilo_para_noticias_previas.
  $styles['estilo_para_noticias_previas'] = array(
    'name' => 'estilo_para_noticias_previas',
    'label' => 'estilo para noticias previas',
    'effects' => array(
      1 => array(
        'label' => 'Escalar y recortar',
        'help' => 'Escalar y recortar mantendrán la relación de proporciones de la imagen original y se desechará lo que sobre por el lado mayor. Esto es especialmente útil para crear miniaturas perfectamente cuadradas sin deformar la imagen.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 330,
          'height' => 120,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}
