<?php

/**
 * Accordion Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'accordion-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'accordion';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$items = get_field('items');

?>
<div class="<?php echo esc_attr($className) ?>" id="<?php echo esc_attr($id) ?>">
    <?php foreach ($items as $key => $item): ?>
        <div class="card">
            <div class="card-header" id="heading-<?php echo $key + 1 ?>">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $key + 1 ?>" aria-expanded="true" aria-controls="collapse-<?php echo $key + 1 ?>">
                        <?php echo $item['title'] ?>
                    </button>
                </h2>
            </div>

            <div id="collapse-<?php echo $key + 1 ?>" class="collapse <?php echo $key == 0 ? 'show' : '' ?>" aria-labelledby="heading-<?php echo $key + 1 ?>" data-parent="#<?php echo esc_attr($id) ?>">
                <div class="card-body">
                    <?php if (isset($item['image']['url'])): ?>
                        <div class="card-body-image">
                            <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                        </div>
                    <?php endif ?>

                    <div class="card-body-text">
                        <?php echo $item['text'] ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
