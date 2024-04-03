<!-- Generate a list of things, e.g. from a database -->

<ul>

    <li
        hx-trigger="click"
        hx-get="<?= SITE_BASE ?>/thing-preview/1"
        hx-target="#thing-info"
    >
        First Thing
    </li>

    <li
        hx-trigger="click"
        hx-get="<?= SITE_BASE ?>/thing-preview/2"
        hx-target="#thing-info"
    >
        Second Thing
    </li>

    <li
        hx-trigger="click"
        hx-get="<?= SITE_BASE ?>/thing-preview/3"
        hx-target="#thing-info"
    >
        Third Thing
    </li>

</ul>
