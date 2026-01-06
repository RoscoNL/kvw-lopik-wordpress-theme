# KVW Lopik WordPress Theme

**Modern & Kleurrijk Design**

Een volledig custom WordPress thema voor KVW Lopik Kindervakantieweek.

## Kenmerken

- ✅ Volledig responsive design
- ✅ Modern & Kleurrijk design (groen, geel, roze, cyaan, blauw)
- ✅ Custom post types (Activities, News, Team Members)
- ✅ Contact formulier met AJAX
- ✅ Inschrijvingsformulier
- ✅ Widgets en sidebar support
- ✅ SEO-friendly
- ✅ Accessibility compliant
- ✅ Veilige formulierverwerking

## Kleurenpalet

```
--kvw-green: #00D084
--kvw-yellow: #FFD700
--kvw-pink: #FF1493
--kvw-cyan: #00CED1
--kvw-blue: #0066CC
--kvw-orange: #FF8C00
--kvw-purple: #9370DB
```

## Bestandsstructuur

```
kvw-lopik-wordpress-theme/
├── style.css              # Hoofd stylesheet
├── functions.php          # Theme functions
├── index.php              # Template index
├── header.php             # Header template
├── footer.php             # Footer template
├── front-page.php         # Homepage template
├── page.php               # Pagina template
├── css/
│   └── custom.css         # Custom styles
├── js/
│   └── main.js            # Main JavaScript
├── inc/                   # Include files
├── templates/             # Custom templates
└── template-parts/        # Template parts
```

## Installatie

1. Download het thema
2. Upload naar `/wp-content/themes/kvw-lopik-wordpress-theme/`
3. Activeer in WordPress Dashboard
4. Ga naar Appearance > Customize om instellingen aan te passen

## Custom Post Types

### Activities
- Activiteiten voor de week
- Categorie support
- Featured image support

### News
- Nieuwsberichten
- Categorie support
- Auteur support

### Team Members
- Teamleden
- Featured image support

## Formulieren

### Contact Formulier
- Naam, Email, Telefoon, Onderwerp, Bericht
- AJAX verwerking
- Email notificatie

### Inschrijvingsformulier
- Kindnaam, Leeftijd, Email ouder, Telefoon
- AJAX verwerking
- Email notificatie

## Widgets

- Primary Sidebar
- Footer Widget Area

## Hooks & Filters

### Acties
- `kvw_lopik_setup` - Theme setup
- `kvw_lopik_enqueue_assets` - Asset enqueuing
- `kvw_lopik_register_post_types` - Post type registration
- `kvw_lopik_register_taxonomies` - Taxonomy registration
- `kvw_lopik_register_widgets` - Widget registration

### Filters
- `body_class` - Body classes

## Veiligheid

- Nonce verification op alle formulieren
- Sanitization van alle input
- Escaping van alle output
- AJAX security checks

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Responsive Breakpoints

- Desktop: 1280px+
- Tablet: 768px - 1279px
- Mobile: < 768px

## Licentie

GPL v2 of later

## Support

Voor vragen of problemen, neem contact op met:
- Email: info@kvwlopik.nl
- Telefoon: 06-31 13 73 19

---

**Versie:** 1.0.0  
**Gemaakt voor:** KVW Lopik  
**Design:** Modern & Kleurrijk
