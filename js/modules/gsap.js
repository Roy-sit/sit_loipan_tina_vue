export function scrollAnimation() {

    gsap.registerPlugin(ScrollTrigger);

        gsap.from("#modern", {
            y: 90,
            opacity: 0,
            duration: 1,
            ease: "elastic.out(1,0.7)"
        });

        gsap.from("#art", {
            y: -90,
            opacity: 0,
            duration: 1,
            ease: "elastic.out(1,0.7)"
        })

        gsap.from('#gallery', {
            y: 90,
            opacity: 0,
            duration: 1,
            ease: "elastic.out(1,0.7)"
        })
        

}