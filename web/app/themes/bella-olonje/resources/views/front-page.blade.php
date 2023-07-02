@extends('layouts.app')

@section('content')


<?php
if( have_rows('flexible_template') ):
    while ( have_rows('flexible_template') ) : the_row(); ?>

<?php if( get_row_layout() == 'home_banner' ): ?>

<div class="container-fluid bg-black relative">
    <?php $image = get_sub_field('background_image'); ?>
    <img class="h-screen opacity-50 w-full object-cover" src="<?php echo esc_url($image['url']); ?>"
        alt="<?php echo $image['alt']; ?>">
    <div class="absolute top-0 text-white banner-text text-center">
        <?php the_sub_field('text'); ?>
        <div class="mt-5">
            <button class="orange-button">Playstore</button>
            <button class="white-button ml-5">App store</button>
        </div>
    </div>
    <?php $overlay = get_sub_field('overlay_image'); ?>
</div>
<div class="overlay-image">
    <img class="" src="<?php echo esc_url($overlay['url']); ?>" alt="<?php echo $overlay['alt']; ?>">
</div>
<div class="divider"></div>
<?php endif; ?>

<?php if( get_row_layout() == 'heading' ): ?>
<?php the_sub_field('text'); ?>
<?php endif; ?>

<?php if( get_row_layout() == 'two_column_layout' ): ?>
<div class="container mx-auto">
    <div class="flex items-center <?php the_sub_field('flip_column'); ?>">
        <div class="basis-5/12">
            <?php $image = get_sub_field('image'); ?>
            <img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <div class="basis-7/12 flex-col">
            <div class="w-10/12">
                <?php the_sub_field('text'); ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_row_layout() == 'download_app_section' ): ?>

<div class="container-fluid bg-black relative">
    <?php $image = get_sub_field('background_image'); ?>
    <img class="h-full opacity-50 w-full object-contain" src="<?php echo esc_url($image['url']); ?>"
        alt="<?php echo $image['alt']; ?>">
    <div class="absolute top-0 text-white background-image-text text-center">
        <?php the_sub_field('text'); ?>
        <div class="mt-5">
            <button class="orange-button">Playstore</button>
            <button class="white-button ml-5">App store</button>
        </div>
    </div>
</div>
<?php endif; ?>

<?php endwhile;
    endif; ?>

@endsection