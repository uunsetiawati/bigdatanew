<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr" data-pc-theme="light">
  <!-- [Head] start -->

  <head>
    <title>Login | Bigdata UPT</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Datta Able is trending dashboard template made using Bootstrap 5 design framework. Datta Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="CodedThemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="<?=base_url('assets/images/favicon.svg')?>" type="image/x-icon" />
  <!-- [Font] Family -->
 <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
<!-- [phosphor Icons] https://phosphoricons.com/ -->
<link rel="stylesheet" href="<?=base_url('assets/fonts/phosphor/duotone/style.css')?>" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="<?=base_url('assets/fonts/tabler-icons.min.css')?>" />
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="<?=base_url('assets/fonts/feather.css')?>" />
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="<?=base_url('assets/fonts/fontawesome.css')?>" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="<?=base_url('assets/fonts/material.css')?>" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>" id="main-style-link" />

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
      <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
        <div class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main relative">
      <div class="auth-wrapper v1 flex items-center w-full h-full min-h-screen">
        <div class="auth-form flex items-center justify-center grow flex-col min-h-screen relative p-6 ">
          <div class="w-full max-w-[350px] relative">
            <div class="auth-bg ">
              <span class="absolute top-[-100px] right-[-100px] w-[300px] h-[300px] block rounded-full bg-theme-bg-1 animate-[floating_7s_infinite]"></span>
              <span class="absolute top-[150px] right-[-150px] w-5 h-5 block rounded-full bg-primary-500 animate-[floating_9s_infinite]"></span>
              <span class="absolute left-[-150px] bottom-[150px] w-5 h-5 block rounded-full bg-theme-bg-1 animate-[floating_7s_infinite]"></span>
              <span class="absolute left-[-100px] bottom-[-100px] w-[300px] h-[300px] block rounded-full bg-theme-bg-2 animate-[floating_9s_infinite]"></span>
            </div>
            <form action="<?= base_url('masuk') ?>" method="post">
            <div class="card sm:my-12  w-full shadow-none">
              <div class="card-body !p-10">
                <div class="text-center mb-8">
                  <a href="#"><img src="<?=base_url('assets/images/logoupthitam.png')?>" alt="img" class="mx-auto"/></a>
                </div>
                <h4 class="text-center font-medium mb-4">Login</h4>
                <div class="mb-3">
                  <input type="email" name="username" class="form-control" id="floatingInput" placeholder="Email Address" />
                </div>
                <div class="mb-4">
                  <input type="password" name="password" class="form-control" id="floatingInput1" placeholder="Password" />
                </div>
                <div class="mt-4 text-center">
                  <button type="submit" class="btn btn-primary mx-auto shadow-2xl">Login</button>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="<?=base_url('assets/js/plugins/simplebar.min.js')?>"></script>
    <script src="<?=base_url('assets/js/plugins/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/js/icon/custom-icon.js')?>"></script>
    <script src="<?=base_url('assets/js/plugins/feather.min.js')?>"></script>
    <script src="<?=base_url('assets/js/component.js')?>"></script>
    <script src="<?=base_url('assets/js/theme.js')?>"></script>
    <script src="<?=base_url('assets/js/script.js')?>"></script>

    <div class="floting-button fixed bottom-[50px] right-[30px] z-[1030]">
    </div>

    
    <script>
      layout_change('false');
    </script>
     
    
    <script>
      layout_theme_sidebar_change('dark');
    </script>
    
     
    <script>
      change_box_container('false');
    </script>
     
    <script>
      layout_caption_change('true');
    </script>
     
    <script>
      layout_rtl_change('false');
    </script>
     
    <script>
      preset_change('preset-1');
    </script>
     
    <script>
      main_layout_change('vertical');
    </script>
    
 
  </body>
  <!-- [Body] end -->
</html>
