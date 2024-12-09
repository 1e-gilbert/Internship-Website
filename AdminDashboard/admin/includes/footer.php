 <footer class="footer pt-5">
     <div class="container-fluid">
         <div class="row align-items-center justify-content-lg-between">
             <div class="col-lg-6 mb-lg-0 mb-4">
                 <div class="copyright text-center text-sm text-muted text-lg-start">
                     ©
                     <script>
                         document.write(new Date().getFullYear())
                     </script>,
                     made with <i class="fa fa-heart"></i> by
                     <a href="https://www.linkedin.com/in/danielle-a-05497b229/" class="font-weight-bold" target="_blank">Danielle Agboka</a>
                     for a better web.
                 </div>
             </div>
             <div class="col-lg-6">
                 <ul class="nav nav-footer justify-content-center justify-content-lg-end">

                     <li class="nav-item">
                         <a href="#" class="nav-link pe-0 text-muted" target="_blank">About</a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </footer>


 <script src="admin/assets/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 </main>

 <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    ?>
     <script>
         Swal.fire({
             position: "bottom-end",
             icon: "<?php echo $_SESSION['status_code'] == 'success' ? 'success' : 'error'; ?>",
             title: "<?php echo $_SESSION['status']; ?>", // Use the session message directly
             showConfirmButton: false,
             timer: 1500
         });
     </script>
 <?php
        unset($_SESSION['status']);
    }
    ?>


 </body>

 </html>