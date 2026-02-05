// main.js - small interactions for FarmConnect
document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.getElementById('sidebarToggle');
    var sidebar = document.getElementById('mobileSidebar');
    if (toggle && sidebar) {
        toggle.addEventListener('click', function () {
            var willOpen = !sidebar.classList.contains('open');
            sidebar.classList.toggle('open');
            // animate focus
            toggle.classList.toggle('is-open');
            // update aria-expanded
            try { toggle.setAttribute('aria-expanded', willOpen ? 'true' : 'false'); } catch(e){}
            // create backdrop when open
            if (willOpen) {
                var existing = document.querySelector('.sidebar-backdrop');
                if (!existing) {
                    var bd = document.createElement('div');
                    bd.className = 'sidebar-backdrop';
                    document.body.appendChild(bd);
                    // allow fade-in
                    setTimeout(function(){ bd.classList.add('show'); }, 10);
                    bd.addEventListener('click', function(){
                        sidebar.classList.remove('open');
                        toggle.classList.remove('is-open');
                        toggle.setAttribute('aria-expanded', 'false');
                        bd.classList.remove('show');
                        setTimeout(function(){ if(bd.parentNode) bd.parentNode.removeChild(bd); }, 220);
                    });
                }
                // prevent body scroll while open
                document.documentElement.classList.add('no-scroll');
            } else {
                var bd2 = document.querySelector('.sidebar-backdrop');
                if (bd2) { bd2.classList.remove('show'); setTimeout(function(){ if(bd2.parentNode) bd2.parentNode.removeChild(bd2); }, 220); }
                document.documentElement.classList.remove('no-scroll');
            }
        });
    }

    // Add active class on click and close on mobile
    var links = document.querySelectorAll('#mobileSidebar .nav-link');
    links.forEach(function (lnk) {
        lnk.addEventListener('click', function (e) {
            // remove previous active
            links.forEach(function(x){ x.classList.remove('active'); });
            // Also remove from top-nav links so desktop updates if needed
            var topLinks = document.querySelectorAll('.top-nav .nav-link');
            topLinks.forEach(function(x){ x.classList.remove('active'); });
            this.classList.add('active');
            // set active on top-nav equivalent if present
            var href = this.getAttribute('href');
            var topMatch = document.querySelector('.top-nav .nav-link[href="'+href+'"]');
            if(topMatch) topMatch.classList.add('active');
            if (window.innerWidth < 992) sidebar.classList.remove('open');
            var bd3 = document.querySelector('.sidebar-backdrop');
            if (bd3) { bd3.classList.remove('show'); setTimeout(function(){ if(bd3.parentNode) bd3.parentNode.removeChild(bd3); }, 220); }
            if (toggle) try { toggle.setAttribute('aria-expanded', 'false'); } catch(e){}
            document.documentElement.classList.remove('no-scroll');
        });
    });

    // Close sidebar when clicking outside (mobile) - guard if sidebar is missing
    document.addEventListener('click', function (e) {
        if (!sidebar) return;
        if (window.innerWidth < 992 && sidebar.classList.contains('open')) {
            var inside = sidebar.contains(e.target) || (toggle && toggle.contains(e.target));
            if (!inside) sidebar.classList.remove('open');
        }
    });

    // subtle entrance animations for feature cards
    var observer = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
            if(entry.isIntersecting){
                entry.target.classList.add('reveal');
                observer.unobserve(entry.target);
            }
        });
    },{threshold:0.12});
    document.querySelectorAll('.card-modern, .feature-item').forEach(function(el){ observer.observe(el); });
});
