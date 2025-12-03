document.addEventListener('DOMContentLoaded', ()=>{
    const container = document.querySelector('.brands-bar');
    const scroller = container && container.querySelector('.brands-scroll-content');
    if(!scroller) return;

    const original = scroller.innerHTML.trim();
    if(!original) return;

    // Duplicate content once to allow continuous scrolling
    scroller.innerHTML = original + original;

    // Compute animation duration based on content width
    requestAnimationFrame(()=>{
        const contentWidth = scroller.scrollWidth / 2;
        const pxPerSecond = 80; // adjust speed
        const duration = Math.max(10, contentWidth / pxPerSecond);
        scroller.style.animationDuration = duration + 's';
        scroller.classList.add('animate');
    });
});
