<?php

return [
    'download_pdf' => 'Stiahnuť ako PDF',
    'login' => 'Prihlásenie:',
    'login_description' => 'Používatelia sa môžu prihlásiť pomocou vlastnej registrácie.',
    'change_password' => 'Zmena hesla:',
    'change_password_description' => 'Používatelia môžu zmeniť svoje heslo.',
    'questions' => 'Otázky:',
    'questions_description' => [
        '1' => 'Otázky je možné vytvoriť v menu "Nová otázka".',
        '2' => 'Používatelia môžu definovať viacero hlasovacích otázok.',
        '3' => 'Každá otázka má generovaný QR kód a jedinečný 5-znakový kód.',
    ],
    'question_types' => 'Typy otázok:',
    'question_types_description' => [
        '1' => 'Otázky s výberom správnych odpovedí.',
        '2' => 'Otázky s otvorenou krátkou odpoveďou.',
    ],
    'results_display' => 'Zobrazenie výsledkov:',
    'results_display_description' =>'Výsledky je možné zobraziť pre všetky otázky.',
    'results_display_methods' => [
        '1' => 'Pre otázky s výberom správnych odpovedí sa zobrazí graf.',
        '2' => 'Pre otázky s otvorenou krátkou odpoveďou sa zobrazia odpovede.',
    ],
    'question_editing' => 'Úprava otázok:',
    'question_editing_description' => 'Používatelia môžu upravovať, či je otázka aktívna, meniť predmet a znenie otázky, a mazať existujúce otázky.',
    'question_filtering' => 'Filtrovanie otázok:',
    'question_filtering_description' => 'Otázky je možné filtrovať podľa predmetu a dátumu vytvorenia.',
    'export_questions' => 'Export otázok a odpovedí:',
    'export_questions_description' => 'Možnosť exportovať otázky a odpovede do CSV.',
    'admin_description' => [
        '1' => 'Administrátor má tú istú funkčnosť ako prihlásený používateľ s tým rozdielom, že má prístup k hlasovacím otázkam všetkých prihlásených používateľov s možnosťou filtrovania nad vybranými používateľmi.',
        '2' => 'Pri vytváraní novej hlasovacej otázky môže administrátor špecifikovať, či to robí vo svojom mene alebo v mene iného používateľa.',
        '3' => 'Administrátor má prístup k správe prihlásených používateľov, vrátane vytvárania, čítania, aktualizácie a mazania (CRUD) používateľských účtov, ako aj možnosť zmeny ich rolí a hesiel.',
    ],
    'getting_poll' => 'Získanie hlasovacej otázky:',
    'getting_poll_description' => 'Používateľ sa môže dostať na stránku s hlasovacou otázkou:',
    'getting_poll_methods' => [
        '1' => 'Načítaním zverejneného QR kódu.',
        '2' => 'Zadaním vstupného kódu na domovskej stránke aplikácie.',
        '3' => 'Zadaním adresy do prehliadača v tvare :url, kde :code je 5-znakový prístupový kód.',
    ],
    'completing_poll' => 'Vyplnenie hlasovacej otázky:',
    'completing_poll_description' => 'Po vyplnení hlasovacej otázky bude užívateľ presmerovaný na stránku s grafickým zobrazením výsledkov hlasovania na danú otázku.',
];
