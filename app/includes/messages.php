<!-- LOGIN MESSAGE -->
<?php if(isset($_SESSION['message'])): ?>
    <div class="msg <?php echo $_SESSION['type']; ?>">
        <li><?php echo $_SESSION['message']; ?></li>
    </div>
    <?php endif; ?>
    <!-- but we want only display it once, so -->
        <?php  
        unset($_SESSION['message']);
        unset($_SESSION['type']);
        ?>