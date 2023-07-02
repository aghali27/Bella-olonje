@extends('layouts.app')

@section('content')


<?php
if( have_rows('flexible_template') ):
    while ( have_rows('flexible_template') ) : the_row(); ?>

<?php if( get_row_layout() == 'home_banner' ): ?>

<div class="container-fluid bg-black max-sm:bg-white max-sm:py-10 relative">
    <?php $image = get_sub_field('background_image'); ?>
    <img class="h-screen opacity-50 w-full object-cover max-sm:hidden" src="<?php echo esc_url($image['url']); ?>"
        alt="<?php echo $image['alt']; ?>">
    <div class="absolute max-sm:relative top-0 text-white max-sm:text-grey banner-text text-center">
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
<div class="container mx-auto py-5">
    <div class="flex items-center max-sm:flex-col-reverse <?php the_sub_field('flip_column'); ?>">
        <div class="basis-5/12">
            <?php $image = get_sub_field('image'); ?>
            <img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <div class="basis-7/12 flex-col">
            <div class="w-8/12 max-sm:mr-auto max-sm:ml-auto max-sm:text-center <?php if(get_sub_field('flip_column')):
                echo 'mr-auto ml-auto'; ?>
                <?php endif; ?>">
                <?php the_sub_field('text'); ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_row_layout() == 'download_app_section' ): ?>

<div class="container-fluid bg-black relative">
    <?php $image = get_sub_field('background_image'); ?>
    <img class="h-full max-md:h-96 opacity-50 w-full object-contain max-md:object-cover"
        src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>">
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