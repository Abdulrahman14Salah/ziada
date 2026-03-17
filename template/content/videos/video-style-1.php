<article class="flex flex-col">
    <div class="card-glow cursor-pointer group mb-4">
        <div class="relative rounded-xl overflow-hidden">
            <?php the_post_thumbnail('large', ['class' => 'w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300']) ?>
            <a href="<?php the_permalink(); ?>">
                <div class="absolute inset-0 bg-primary/20 group-hover:bg-primary/10 transition-colors duration-300"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play text-primary-foreground ml-0.5">
                            <polygon points="6 3 20 12 6 21 6 3"></polygon>
                        </svg>
                    </div>
                </div>
                <div class="absolute bottom-2 right-2 bg-secondary/80 text-secondary-foreground px-2 py-1 rounded text-sm">8:32</div>
            </a>
        </div>
    </div>
    <div class="flex flex-col">
        <h3 class="font-bold text-card-foreground mb-2 group-hover:text-primary transition-colors duration-300"><a href="<?php the_permalink(); ?>"><?php the_title(); ?>1</a></h3>
        <div class="text-muted-foreground text-sm mb-2"><?php the_excerpt(); ?></div>
        <div class="flex items-center justify-between text-sm text-muted-foreground"><span class="bg-primary/10 text-primary px-2 py-1 rounded-full text-xs">Success Stories</span><span>12K views</span></div>
    </div>
</article>