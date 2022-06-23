<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= base_url('/owl.carousel.min.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('/owl.theme.default.min.css'); ?>" rel="stylesheet" />
    <title>Anime World</title>
  </head>
  <body>
  <div class="container-fluid">
      <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between pt-3">
      <a href="/blog" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <h3>Anime World</h3>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/blog" class="nav-link px-2 link-dark">Home</a></li>
        <li><a href="/anime/all" class="nav-link px-2 link-dark">Anime Series</a></li>
        <li><a href="/movie/all" class="nav-link px-2 link-dark">Anime Movies</a></li>
        <li><a href="/anime/create" class="nav-link px-2 link-dark">Request Anime</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <form method="post" action="/anime/search/" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input name="search" type="search" class="form-control form-control-dark" placeholder="Search...">
        </form>
      </div>
    </header>
  </div>
  </div>
    <?= $this->renderSection('content'); ?>
     
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center border-top py-3 my-3">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            </a>
            <span class="text-muted">&copy; 2022 AnimeWorld.com</span>
          </div>

          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><i class="fa-xl fa-brands fa-facebook-square"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="fa-xl fa-brands fa-instagram"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="fa-xl fa-brands fa-twitter-square"></i></a></li>
          </ul>
        </footer>
      </div>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url('/owl.carousel.min.js'); ?>"></script>
    <script>
        $(document).ready(function(){
            var one = $('#one');
            var two = $('#two');
            var three = $('#three')
            var four = $('#four')
            var five = $('#five')
            one.owlCarousel({
                autoplay:true,
                autoplayHoverPause:true,
                items:4,
                dots:true,
                lazyLoad:true,
                loop:true,
                autoplayTimeout:2000,
                responsive:{
                    0:{
                       items:1,
                       loop:true
                    },
                    485:{
                       items:2,
                       loop:true
                    },
                    728:{
                       items:3,
                       loop:true
                    },
                    960:{
                       items:3,
                       loop:true
                    },
                    1200:{
                       items:4,
                       loop:true
                    }
                }
            });
            
            two.owlCarousel({
                autoplay:true,
                autoplayHoverPause:true,
                items:1,
                dots:false,
                lazyLoad:true,
                loop:true,
                autoplayTimeout:3000
            });
            
            three.owlCarousel({
                autoplay:true,
                autoplayHoverPause:true,
                items:4,
                dots:true,
                lazyLoad:true,
                loop:true,
                autoplayTimeout:4000,
                responsive:{
                    0:{
                       items:1,
                       loop:true
                    },
                    485:{
                       items:2,
                       loop:true
                    },
                    728:{
                       items:3,
                       loop:true
                    },
                    960:{
                       items:3,
                       loop:true
                    },
                    1200:{
                       items:4,
                       loop:true
                    }
                }
            });
            
            four.owlCarousel({
                autoplay:true,
                autoplayHoverPause:true,
                items:4,
                dots:true,
                lazyLoad:true,
                loop:true,
                autoplayTimeout:2000,
                responsive:{
                    0:{
                       items:1,
                       loop:true
                    },
                    485:{
                       items:2,
                       loop:true
                    },
                    728:{
                       items:3,
                       loop:true
                    },
                    960:{
                       items:3,
                       loop:true
                    },
                    1200:{
                       items:4,
                       loop:true
                    }
                }
            });
            
            five.owlCarousel({
                autoplay:true,
                autoplayHoverPause:true,
                items:4,
                dots:true,
                lazyLoad:true,
                loop:true,
                autoplayTimeout:2000,
                responsive:{
                    0:{
                       items:1,
                       loop:true
                    },
                    485:{
                       items:2,
                       loop:true
                    },
                    728:{
                       items:3,
                       loop:true
                    },
                    960:{
                       items:3,
                       loop:true
                    },
                    1200:{
                       items:4,
                       loop:true
                    }
                }
            });
          });
    </script>
    
  </body>
</html>