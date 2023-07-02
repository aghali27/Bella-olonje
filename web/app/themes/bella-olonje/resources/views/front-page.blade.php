@extends('layouts.app')

@section('content')


<?php
if( have_rows('flexible_template') ):
    while ( have_rows('flexible_template') ) : the_row(); ?>

<?php if( get_row_layout() == 'home_banner' ): ?>

<div class="container-fluid bg-black max-sm:bg-white max-sm:py-10 max-sm:px-5 relative">
    <?php $image = get_sub_field('background_image'); ?>
    <img class="h-screen opacity-50 w-full object-cover max-sm:hidden" src="<?php echo esc_url($image['url']); ?>"
        alt="<?php echo $image['alt']; ?>">
    <div class="absolute max-sm:relative top-0 text-white max-sm:text-grey banner-text text-center">
        <?php the_sub_field('text'); ?>
        <div class="flex justify-center max-sm:flex-col mt-5">
            <div><button class="orange-button">Playstore</button></div>
            <div><button class="white-button ml-5 max-sm:ml-0 max-sm:mt-5">App store</button></div>
        </div>
    </div>
    <?php $overlay = get_sub_field('overlay_image'); ?>
</div>
<div class="overlay-image">
    <img class="" src="<?php echo esc_url($overlay['url']); ?>" alt="<?php echo $overlay['alt']; ?>">
</div>
<div class="divider max-sm:hidden"></div>
<?php endif; ?>

<?php if( get_row_layout() == 'heading' ): ?>
<div class="mt-10">
    <?php the_sub_field('text'); ?>
</div>
<div class="divider hidden max-sm:block"></div>
<?php endif; ?>

<?php if( get_row_layout() == 'two_column_layout' ): ?>
<div class="container mx-auto py-5">
    <div class="flex items-center max-sm:flex-col-reverse <?php the_sub_field('flip_column'); ?>">
        <div class="basis-5/12">
            <?php $image = get_sub_field('image'); ?>
            <img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <div class="basis-7/12 flex-col">
            <div class="w-8/12 max-sm:w-10/12 max-sm:mr-auto max-sm:ml-auto max-sm:text-center <?php if(get_sub_field('flip_column')):
                echo 'mr-auto ml-auto'; ?>
                <?php endif; ?>">
                <?php the_sub_field('text'); ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_row_layout() == 'download_app_section' ): ?>

<div class="container-fluid bg-black max-sm:bg-dark_black max-sm:px-5 relative">
    <?php $image = get_sub_field('background_image'); ?>
    <img class="h-full max-md:h-96 opacity-50 w-full max-sm:hidden object-contain max-md:object-cover"
        src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>">
    <div
        class="absolute max-sm:relative max-sm:py-14 top-0 download-app-section text-white background-image-text text-center">
        <div class="max-sm:hidden"><?php the_sub_field('text'); ?></div>
        <div class="hidden max-sm:block"><?php the_sub_field('mobile_view_text'); ?></div>
        <div class="mt-5 max-sm:hidden">
            <button class="orange-button">Playstore</button>
            <button class="white-button ml-5">App store</button>
        </div>
        <div class="mt-5 hidden max-sm:block">
            <button class="download-orange-button">Buy now</button>
            <button class="download-white-button ml-5 max-sm:ml-0 max-sm:mt-3">Try for free</button>
        </div>
    </div>
</div>
<?php endif; ?>

<?php endwhile;
    endif; ?>

@endsection