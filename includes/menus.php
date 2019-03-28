<div class="col-md-2 p-0 bg-white nunito min-vh-100">                       
        <ul class="nav flex-column">
            <li class="nav-item pt-3">
                <a class="nav-link <?php echo $nav_active == 'dashboard' ? 'nav-active' : 'text-secondary'; ?>" href="index.php"><img class="pb-1" src="https://img.icons8.com/ios/25/000000/dashboard.png"> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $nav_active == 'pending' ? 'nav-active' : 'text-secondary'; ?>" href="pending.php"><img class="pb-1" src="https://img.icons8.com/ios/25/000000/data-pending.png"> Pending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $nav_active == 'confirmed' ? 'nav-active' : 'text-secondary'; ?>" href="confirmed.php"><img class="pb-1" src="https://img.icons8.com/ios/25/000000/facebook-like.png"> Confirmed</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $nav_active == 'completed' ? 'nav-active' : 'text-secondary'; ?>" href="completed.php"><img class="pb-1" src="https://img.icons8.com/ios/25/000000/checked.png"> Completed</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $nav_active == 'cancelled' ? 'nav-active' : 'text-secondary'; ?>" href="cancelled.php" ><img class="pb-1" src="https://img.icons8.com/ios/25/000000/cancel.png"> Cancelled</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $nav_active == 'cancelled' ? 'nav-active' : 'text-secondary'; ?>" href="cancelled.php" ><img class="pb-1" src="https://img.icons8.com/wired/25/000000/export.png"> Export Data</a>
            </li>
        </ul>
</div>