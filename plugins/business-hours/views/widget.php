

<ul>
    <?php if ( strlen(trim($weekdays)) > 0 ) : ?>
    <li><b>Monday-Friday: </b><?php echo $weekdays; ?></li>
    <li><b>Saturday: </b><?php echo $saturday; ?></li>
    <li><b>Sunday: </b><?php echo $sunday; ?></li>
    <?php endif; ?>
</ul>