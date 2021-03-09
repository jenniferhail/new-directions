<?php 
    $prefix = get_field('prefix') . ' ';
    $first = get_field('first_name') . ' ';
    $middle = get_field('middle_name') . ' ';
    $last = get_field('last_name');
    $creds = get_field('credentials');
    $title_1 = get_field('title_1');
    $title_2 = get_field('title_2');
    $company = get_field('company');
    $title_3 = get_field('title_3');
    $company_2 = get_field('company_2');

    $full_name = $prefix . $first . $middle . $last;
    if($creds) {
        $full_name = $prefix . $first . $middle . $last . ', ' . $creds;
    }
?>
<div class="item-<?php echo get_post_type(); ?>">
    <h2><?php echo $full_name; ?></h2>
    <div class="titles">
        <?php if($title_1) : ?>
            <p><?php echo $title_1; ?></p>
        <?php endif; ?>
        <?php if($title_2) : ?>
            <p><?php echo $title_2; ?></p>
        <?php endif; ?>
        <?php if($company) : ?>
            <p><?php echo $company; ?></p>
        <?php endif; ?>
        <?php if($title_3) : ?>
            <p><?php echo $title_3; ?></p>
        <?php endif; ?>
        <?php if($company_2) : ?>
            <p><?php echo $company_2; ?></p>
        <?php endif; ?>
    </div>
</div>