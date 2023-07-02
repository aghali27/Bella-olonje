@extends('layouts.app')

@section('content')


<?php
if( have_rows('flexible_template') ):
    while ( have_rows('flexible_template') ) : the_row(); ?>

<?php if( get_row_layout() == 'home_banner' ): ?>

<div class="container-fluid bg-black">
    <?php $image = get_sub_field('background_image'); ?>
    <img class="h-screen opacity-50 w-full object-contain" src="<?php echo esc_url($image['url']); ?>"
        alt="<?php echo $image['alt']; ?>">
</div>

<?php endif; ?>

<?php endwhile;
    endif; ?>

@endsection