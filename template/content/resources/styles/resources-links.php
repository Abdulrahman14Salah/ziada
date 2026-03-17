<a href="<?php the_permalink(); ?>" class="card-elegant group cursor-pointer transform transition-all duration-500 hover:scale-105 fade-in-up animate" style="animation-delay: 0ms;">
    <div class="relative h-32 mb-4 rounded-xl overflow-hidden bg-gradient-to-br from-primary-glow/20 to-accent/20 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link2 text-primary-glow">
            <path d="M9 17H7A5 5 0 0 1 7 7h2"></path>
            <path d="M15 7h2a5 5 0 1 1 0 10h-2"></path>
            <line x1="8" x2="16" y1="12" y2="12"></line>
        </svg>
        <div class="absolute top-3 left-3"><span class="bg-primary/90 text-primary-foreground px-3 py-1 rounded-full text-xs font-medium">Health &amp; Medical</span></div>
    </div>
    <h3 class="text-lg font-bold text-foreground mb-2 group-hover:text-primary transition-colors duration-300 line-clamp-2"><?php the_title(); ?></h3>
    <div class="text-muted-foreground text-sm leading-relaxed line-clamp-2 link-description"><?php esc_html(the_excerpt()); ?></div>
    <button class="w-full inline-flex items-center justify-center gap-2 bg-primary text-primary-foreground hover:text-primary-foreground px-4 py-3 rounded-lg text-sm font-medium hover:bg-primary/90 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link">
            <path d="M15 3h6v6"></path>
            <path d="M10 14 21 3"></path>
            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
        </svg>
        <span>View Link</span>
    </button>
</a>