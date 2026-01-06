<?php
/**
 * The front page template - PIXEL PERFECT
 *
 * @package KVW_Lopik
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- HERO SECTION WITH WAVES -->
    <section class="hero">
        <div class="hero-content">
            <h1>ZOMER 2025:<br>KVW LOPIK</h1>
            <p>Een week vol plezier, avontuur en nieuwe vrienden!</p>
            <a href="<?php echo esc_url( home_url( '/inschrijven' ) ); ?>" class="cta-button">
                BEKIJK PROGRAMMA & MELD JE AAN!
            </a>
        </div>
        
        <!-- Curved Wave Divider -->
        <div class="hero-wave">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,50 Q150,0 300,50 T600,50 T900,50 T1200,50 L1200,120 L0,120 Z" fill="#00D084" opacity="0.8"/>
                <path d="M0,60 Q200,20 400,60 T800,60 T1200,60 L1200,120 L0,120 Z" fill="#FFD700" opacity="0.8"/>
            </svg>
        </div>
    </section>

    <!-- CONTENT CARDS SECTION -->
    <section class="site-content">
        <div class="cards-grid">
            <!-- Card 1: Kindervakantieweek - GROEN -->
            <div class="card green-border">
                <div class="card-icon-large">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="50,10 20,90 80,90" fill="#00D084"/>
                        <circle cx="50" cy="30" r="8" fill="#FFD700"/>
                    </svg>
                </div>
                <h3>Kindervakantieweek<br>2025</h3>
                <p>Data, tijden en alle info over de leukste week van de zomer. Schrijf je snel in!</p>
                <a href="<?php echo esc_url( home_url( '/inschrijven' ) ); ?>" class="btn btn-primary">
                    Inschrijven Nu
                </a>
            </div>

            <!-- Card 2: Nieuwsbrief - GEEL -->
            <div class="card yellow-border">
                <div class="card-icon-large">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <rect x="15" y="25" width="70" height="50" rx="5" fill="#FFD700"/>
                        <path d="M15,30 L50,55 L85,30" stroke="#fff" stroke-width="3" fill="none"/>
                    </svg>
                </div>
                <h3>Nieuwsbrief<br>ontvangen</h3>
                <p>Blijf op de hoogte van alle het laatste nieuws en updates. Mis niks!</p>
                <form method="post" action="<?php echo esc_url( admin_url('admin-ajax.php') ); ?>" class="newsletter-form">
                    <input type="email" name="email" placeholder="Email" required>
                    <button type="submit" class="btn btn-secondary">Inschrijven</button>
                    <input type="hidden" name="action" value="kvw_newsletter_signup">
                </form>
            </div>

            <!-- Card 3: Contact - ROZE -->
            <div class="card pink-border">
                <div class="card-icon-large">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="35" cy="35" r="25" fill="#FF1493"/>
                        <circle cx="65" cy="65" r="25" fill="#FF1493"/>
                        <text x="50" y="60" font-size="50" text-anchor="middle" fill="#fff">?</text>
                    </svg>
                </div>
                <h3>Contact</h3>
                <p>Vragen? Neem gerust contact met ons op. We helpen je graag!</p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-pink">
                    Contact Opnemen
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
