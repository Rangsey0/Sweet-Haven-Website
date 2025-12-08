<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hfood</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

  
  <style>
    /* Product title in food modal style */
    .styled-title {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        color: #d9534f;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .text-uppercase {
        font-family: 'Georgia', serif;
        letter-spacing: 0.1em;
    }

    /* Food Information in food modal style */
    .styled-title {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        color: #d9534f;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .info-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.5rem;
        font-weight: 600;
        color: #5bc0de;
        margin-bottom: 1rem;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border-bottom: 2px solid #5bc0de;
        padding-bottom: 0.5rem;
    }

    .text-uppercase {
        font-family: 'Georgia', serif;
        letter-spacing: 0.1em;
    }
  </style>
  
</head>

<body>
    
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="#hero" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1 style="font-family: 'Pacifico', cursive; font-size: 2em; color: #ff8243;">SweetHaven<span style="color: #ffbf00;">.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="dropdown"><a href=""><span><?php echo e(Auth::user()->name); ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('profile.edit')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('profile.edit'))]); ?>
                            <?php echo e(__('Profile')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                        <li>
                          <?php if(auth()->guard()->check()): ?>
                          <?php if(auth()->user()->isAdmin()): ?>
                              <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('admin.dashboard'),'active' => request()->routeIs('admin.dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.dashboard')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.dashboard'))]); ?>
                                  <?php echo e(__('Dashboard')); ?>

                               <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                          <?php endif; ?>
                          <?php endif; ?>
                        </li>
                        <!-- Authentication -->
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>

                            <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']); ?>
                                <?php echo e(__('Log Out')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                        </form>
                </li>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your <br>Delicious Sweet Food</h2>
          <p data-aos="fade-up" data-aos-delay="100">We're thrilled to see you. Dive in and explore our latest mouthwatering treats and exclusive offers just for you. Enjoy the sweetest experience!</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-book-a-table">Book a Table</a>
            <a href="https://www.youtube.com/" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="https://media.timeout.com/images/101895261/image.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p>+855 5589 55488 55</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p data-aos="fade-up" data-aos-delay="100">
                Welcome to SweetHaven, where every treat is a taste of paradise. Our passion for creating delightful confections drives us to use only the finest ingredients and traditional techniques, ensuring every bite is a moment of bliss.
              </p>
              <br>
              <p data-aos="fade-up" data-aos-delay="100">
                At SweetHaven, we believe in the magic of sweets to bring joy and create cherished memories. From our classic cakes to our innovative pastries, each creation is crafted with love and precision. Whether you're celebrating a special occasion or simply indulging your sweet tooth, our wide variety of treats promises something for everyone.
              </p>
              <br>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Menu</h2>
                <p>Check Our <span>Sweet Menu</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#menu-all">
                        <h4 style="cursor: pointer;">All</h4>
                    </a>
                </li>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-<?php echo e($category->id); ?>">
                        <h4 style="color: orangered; font-size: large; cursor: pointer;"><?php echo e($category->name); ?></h4>
                    </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            

              <!-- Display Products -->
              <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                  <div class="tab-pane fade active show" id="menu-all">
                      <div class="row">
                          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="col-lg-3 col-md-6 mb-4">
                                  <section id="menu" class="menu">
                                      <div data-aos="fade-up">
                                          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                                              <div class="row gy-5 justify-content-center">
                                                  <div class="col-lg-12 menu-item">
                                                      <a href="#" data-bs-toggle="modal" data-bs-target="#productModal<?php echo e($product->id); ?>" class="glightbox">
                                                          <img src="<?php echo e(asset('images/' . $product->image)); ?>" alt="<?php echo e($product->title); ?>" class="menu-img">
                                                      </a>
                                                      <div class="menu-details">
                                                          <h4 class="menu-title p-3 price"><?php echo e($product->title); ?></h4>
                                                          <h5 class="menu-category ms-3" style="color: green;"><?php echo e($product->category->name); ?></h5>
                                                          <div class="container-fluid">
                                                              <div class="row">
                                                                  <p class="ingredients mt-3 ms-1 col-4">
                                                                      Information: 
                                                                  </p>
                                                                  <div class="col-7 mt-3 description-container">
                                                                      <?php echo $product->description; ?>

                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="menu-footer d-flex justify-content-between align-items-center">
                                                          <p class="price">
                                                          $<?php echo e($product->price); ?>

                                                          </p>
                                                          <div>
                                                              
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </section>
                              </div>

                              <!-- Food Modal -->
                              <div class="modal fade product-modal" id="productModal<?php echo e($product->id); ?>" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title styled-title" id="productModalLabel"><?php echo e($product->title); ?></h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                              <div class="container">
                                                  <div class="row">
                                                      <div class="col-md-8">
                                                          <img src="<?php echo e(asset('images/' . $product->image)); ?>" alt="<?php echo e($product->title); ?>" class="img-fluid">
                                                      </div>
                                                      <div class="col-md-4">
                                                          <div class="info-title">Food Information</div>
                                                          <p><?php echo $product->description; ?></p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                              
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>

                      <div class="d-flex justify-content-center">
                          <?php echo e($products->links()); ?>

                      </div>
                  </div>

                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="tab-pane fade" id="menu-<?php echo e($category->id); ?>">
                      <!-- Display products for this category -->
                      <div class="row">
                          <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="col-lg-3 col-md-6 mb-4">
                                  <section id="menu" class="menu">
                                      <div data-aos="fade-up">
                                          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                                              <div class="row gy-5 justify-content-center">
                                                  <div class="col-lg-12 menu-item">
                                                      <a href="#" data-bs-toggle="modal" data-bs-target="#productModal<?php echo e($category->id); ?><?php echo e($product->id); ?>" class="glightbox">
                                                          <img src="<?php echo e(asset('images/' . $product->image)); ?>" alt="<?php echo e($product->title); ?>" class="menu-img">
                                                      </a>
                                                      <div class="menu-details">
                                                          <h4 class="menu-title p-3 price"><?php echo e($product->title); ?></h4>
                                                          <h5 class="menu-category ms-3" style="color: green;"><?php echo e($product->category->name); ?></h5>
                                                          <div class="container-fluid">
                                                              <div class="row">
                                                                  <p class="ingredients mt-3 ms-1 col-4">
                                                                      Information: 
                                                                  </p>
                                                                  <div class="col-7 mt-3 description-container">
                                                                      <?php echo $product->description; ?>

                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="menu-footer d-flex justify-content-between align-items-center">
                                                          <p class="price">
                                                          $<?php echo e($product->price); ?>

                                                          </p>
                                                          <div>
                                                              
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </section>
                              </div>

                              <!-- Food Modal -->
                              <div class="modal fade product-modal" id="productModal<?php echo e($category->id); ?><?php echo e($product->id); ?>" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title styled-title" id="productModalLabel"><?php echo e($product->title); ?></h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                              <div class="container">
                                                  <div class="row">
                                                      <div class="col-md-8">
                                                          <img src="<?php echo e(asset('images/' . $product->image)); ?>" alt="<?php echo e($product->title); ?>" class="img-fluid">
                                                      </div>
                                                      <div class="col-md-4">
                                                          <div class="info-title">Food Information</div>
                                                          <p><?php echo $product->description; ?></p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                              
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>

        </div>
    </section><!-- End Menu Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1954.3766246415626!2d104.88957004787062!3d11.569538642218172!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109519f11b381e5%3A0x93c85e978d6d0c6e!2sCKCC%20(Cambodia-Korea%20Cooperation%20Center)!5e0!3m2!1sen!2skh!4v1716627732577!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, cambodia,</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>855 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Street <br>
              Cambodia,  - US<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +855 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SweetHaven</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>



</html>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\Rangsey\Y3S2\WCTII\ForPostGit\SweetHaven\resources\views/dashboard.blade.php ENDPATH**/ ?>