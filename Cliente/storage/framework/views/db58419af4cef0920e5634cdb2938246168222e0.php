<?php $__env->startSection('title',); ?>

<?php $__env->startSection('conteudo'); ?>


<div class="hero-wrapper hero-2" id="hero">
    <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
        <div class="hero-slider" data-bg-src="<?php echo e(asset ('img/camiseta1.jpg')); ?>">
            <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-100px" data-left="0">
                <img src="<?php echo e(asset('img/')); ?>" alt="img">
            </div>
            <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                <img src="<?php echo e(asset ('img/')); ?>" alt="img">
            </div>
            <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                <img src="<?php echo e(asset('img/')); ?>" alt="img">
            </div>
            <div class="container">
                <div class="row justify-content-lg-end justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="hero-style2">
                            <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Grow Your</span>
                            <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Strength</h1>
                            <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">WITH Fitmas</span>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                <a href="<?php echo e(url('/contato')); ?>" class="btn style-r0 style2">Marque uma consulta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="hero-slider" data-bg-src="<?php echo e(asset ('img/caneca.jpg')); ?>">
            <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                <img src="<?php echo e(asset('img/')); ?>" alt="img">
            </div>
            <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                <img src="<?php echo e(asset('img/')); ?>" alt="img">
            </div>
            <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="30%">
                <img src="<?php echo e(asset('img/')); ?>" alt="img">
            </div>
            <div class="container">
                <div class="row justify-content-lg-end justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="hero-style2">
                            <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Grow Your</span>
                            <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Strength</h1>
                            <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">WITH Fitmas</span>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                <a href="<?php echo e(url('/contato')); ?>" class="btn style-r0 style2">Make Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-arrow">
        <button data-slick-prev="#heroSlider2" class="slick-arrow slick-prev">PREV</button>
        <button data-slick-next="#heroSlider2" class="slick-arrow slick-next">NEXT</button>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Desktop\Cliente\Cliente\resources\views/site/home.blade.php ENDPATH**/ ?>