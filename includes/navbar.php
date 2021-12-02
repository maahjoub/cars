   <!-- Start header -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
       <div class="container">
            <select>
             <option value=""><?php echo lang('Lang'); ?></option>
             <option value="Ar"><?php echo lang('Ar'); ?></option>
             <option value="En"><?php echo lang('En'); ?></option>
           </select>
           <a class="navbar-brand" href="#">CarsRent </a>
           <button type="button" class="btn btn-primary mx-3 btn-sm" data-bs-toggle="modal" data-bs-target="#Register">
               
               <?php echo lang('Register'); ?>
           </button>
           <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#LogIn">
               <?php echo lang('Login'); ?>
           </button>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                   <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="#"><?php echo lang('Home'); ?></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#"><?php echo lang('Servises'); ?></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link"><?php echo lang('Contact'); ?> </a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>
   <!-- End header -->
