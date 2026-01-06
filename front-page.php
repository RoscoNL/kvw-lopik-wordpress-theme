<?php
/**
 * The front page template
 *
 * @package KVW_Lopik
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <h1><?php esc_html_e( 'ZOMER 2025: KVW LOPIK', 'kvw-lopik' ); ?></h1>
            <p><?php esc_html_e( 'Een week vol plezier, avontuur en nieuwe vrienden!', 'kvw-lopik' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/inschrijven' ) ); ?>" class="cta-button">
                <?php esc_html_e( 'BEKIJK PROGRAMMA & MELD JE AAN!', 'kvw-lopik' ); ?>
            </a>
        </div>
    </section>

    <!-- CONTENT CARDS SECTION -->
    <section class="container">
        <div class="cards-grid">
            <!-- Card 1: Kindervakantieweek -->
            <div class="card green-border">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🏕️</div>
                <h3><?php esc_html_e( 'Kindervakantieweek 2025', 'kvw-lopik' ); ?></h3>
                <p><?php esc_html_e( 'Data, tijden en alle info over de leukste week van de zomer. Schrijf je snel in!', 'kvw-lopik' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/inschrijven' ) ); ?>" class="btn btn-primary" style="margin-top: 1rem;">
                    <?php esc_html_e( 'Inschrijven Nu', 'kvw-lopik' ); ?>
                </a>
            </div>

            <!-- Card 2: Nieuwsbrief -->
            <div class="card yellow-border">
                <div style="font-size: 3rem; margin-bottom: 1rem;">📧</div>
                <h3><?php esc_html_e( 'Nieuwsbrief ontvangen', 'kvw-lopik' ); ?></h3>
                <p><?php esc_html_e( 'Blijf op de hoogte van alle updates. Mis niet het laatste nieuws!', 'kvw-lopik' ); ?></p>
                <form style="margin-top: 1rem;">
                    <input type="email" placeholder="<?php esc_attr_e( 'je@email.nl', 'kvw-lopik' ); ?>" required style="margin-bottom: 0.5rem;">
                    <button type="submit" class="btn btn-secondary" style="width: 100%;">
                        <?php esc_html_e( 'Inschrijven', 'kvw-lopik' ); ?>
                    </button>
                </form>
            </div>

            <!-- Card 3: Contact -->
            <div class="card pink-border">
                <div style="font-size: 3rem; margin-bottom: 1rem;">💬</div>
                <h3><?php esc_html_e( 'Contact', 'kvw-lopik' ); ?></h3>
                <p><?php esc_html_e( 'Vragen? Neem contact met ons op. We helpen je graag!', 'kvw-lopik' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-pink" style="margin-top: 1rem;">
                    <?php esc_html_e( 'Contact opnemen', 'kvw-lopik' ); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- WHY KVW SECTION -->
    <section class="light-bg">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 3rem; font-size: 2.5rem;">
                <?php esc_html_e( 'Waarom KVW Lopik?', 'kvw-lopik' ); ?>
            </h2>

            <div class="cards-grid">
                <div class="card" style="text-align: center; border-left: none; border-top: 5px solid var(--kvw-green);">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">🏕️</div>
                    <h3><?php esc_html_e( 'Hutten Bouwen', 'kvw-lopik' ); ?></h3>
                    <p><?php esc_html_e( 'Bouw je eigen droomhut met vrienden', 'kvw-lopik' ); ?></p>
                </div>

                <div class="card" style="text-align: center; border-left: none; border-top: 5px solid var(--kvw-yellow);">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">🎮</div>
                    <h3><?php esc_html_e( 'Spelletjes', 'kvw-lopik' ); ?></h3>
                    <p><?php esc_html_e( 'Veel plezier en spannende wedstrijden', 'kvw-lopik' ); ?></p>
                </div>

                <div class="card" style="text-align: center; border-left: none; border-top: 5px solid var(--kvw-pink);">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">👫</div>
                    <h3><?php esc_html_e( 'Vriendschappen', 'kvw-lopik' ); ?></h3>
                    <p><?php esc_html_e( 'Maak nieuwe vrienden uit de buurt', 'kvw-lopik' ); ?></p>
                </div>

                <div class="card" style="text-align: center; border-left: none; border-top: 5px solid var(--kvw-cyan);">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">🎉</div>
                    <h3><?php esc_html_e( 'Avontuur', 'kvw-lopik' ); ?></h3>
                    <p><?php esc_html_e( 'Beleef een onvergetelijke week', 'kvw-lopik' ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section style="background: linear-gradient(135deg, var(--kvw-pink) 0%, var(--kvw-cyan) 100%); color: white; text-align: center; padding: 4rem 2rem;">
        <div class="container">
            <h2 style="color: white; margin-bottom: 1rem; font-size: 2rem;">
                <?php esc_html_e( 'Klaar voor het avontuur?', 'kvw-lopik' ); ?>
            </h2>
            <p style="margin-bottom: 2rem; font-size: 1.1rem;">
                <?php esc_html_e( 'Schrijf je nu in voor KVW Lopik 2025 en maak deel uit van de leukste week van de zomer!', 'kvw-lopik' ); ?>
            </p>
            <a href="<?php echo esc_url( home_url( '/inschrijven' ) ); ?>" class="btn" style="background-color: var(--kvw-yellow); color: var(--kvw-dark); font-size: 1.1rem; padding: 1rem 2rem;">
                <?php esc_html_e( 'Nu Inschrijven', 'kvw-lopik' ); ?>
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
