<?php
$category = get_query_var('faqs_category', 'faqs');
$number = get_query_var('num', "#");
?>
<div class="mb-12 fade-in-up animate" style="animation-delay: 0ms;">
    <h2 class="text-2xl font-bold text-foreground mb-6 flex items-center">
        <span class="w-8 h-8 bg-primary/20 rounded-lg flex items-center justify-center mr-3 text-primary text-sm font-bold"><?php echo $number; ?></span>
    <span><?php echo $category; ?></span>
    </h2>
    <div class="space-y-4">

        <?php
        set_query_var('faqs_category', $category);
        get_template_part('/template/faqs/custom-loop', 'faqs');

        ?>
    </div>
</div>