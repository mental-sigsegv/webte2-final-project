<x-layouts.app>
    <button onclick="window.location.href='{{ route('manual.download') }}'" class="download-button">Stiahnuť ako PDF</button>

    <h2>Prihlásenie:</h2>
    <p>Používateľ sa môže prihlásiť pomocou vlastnej registrácie.</p>
    <h2>Zmena hesla:</h2>
    <p>Používateľ môže zmeniť svoje heslo.</p>

    <h2>Otazky:</h2>
    <ul>
        <li>Otazky je možné v menu Nova otazka.</li>
        <li>Používateľ môže definovať viacero hlasovacích otázok.</li>
        <li>Každej otázke je generovaný QR kód a unikátny 5-znakový kód.</li>
    </ul>

    <h2>Typy otázok:</h2>
    <ul>
        <li>Otázky s výberom správnej odpovede.</li>
        <li>Otázky s otvorenou krátkou odpoveďou.</li>
    </ul>

    <h2>Zobrazenie výsledkov:</h2>
    <ul>
        <li>Pri otázkach je možné zobraziť výsledky.</li>
    </ul>

    <h2>Úprava otázok:</h2>
    <ul>
        <li>Používateľ môže upravovať či je otázka aktivna, meniť predmet a znenie otázky a mazať existujúce otázky.</li>
    </ul>

    <h2>Filtrovanie otázok:</h2>
    <ul>
        <li>Otázky je možné filtrovať podľa predmetu a dátumu vytvorenia.</li>
    </ul>

    <h2>Zobrazenie výsledkov:</h2>
    <ul>
        <li>Použivatel ma možnosť zobraziť výsledky.</li>
    </ul>

    <h2>Export otázok a odpovedí:</h2>
    <ul>
        <li>Možnosť exportu otázok a odpovedí do CSV</li>
    </ul>

    <p>Administrátor má tú istú funkčnosť ako prihlásený používateľ s tým rozdielom, že má k dispozícii hlasovacie otázky všetkých prihlásených používateľov s možnosťou filtrovania nad vybraným používateľom.</p>
    <p>Pri vytváraní novej hlasovacej otázky administrátor môže špecifikovať, či to robí vlastným menom alebo v mene iného používateľa.</p>
    <p>Administrátor má prístup k správe prihlásených používateľov, vrátane vytvárania, čítania, aktualizácie a mazania (CRUD) používateľských účtov, ako aj možnosť zmeny ich rolí a hesiel.</p>

    <h2>Získanie hlasovacej otázky:</h2>
    <ul>
        <li>Používateľ sa môže dostať na stránku s hlasovacou otázkou:</li>
        <ul>
            <li>Načítaním zverejneného QR kódu.</li>
            <li>Zadaním vstupného kódu na domovskej stránke aplikácie.</li>
            <li>Zadaním adresy do prehliadača v tvare <code>https://nodeXX.webte.fei.stuba.sk/abcde</code>, kde <code>abcde</code> je 5-znakový vstupný kód.</li>
        </ul>
    </ul>

    <h2>Vyplnenie hlasovacej otázky:</h2>
    <p>Po vyplnení hlasovacej otázky bude užívateľ presmerovaný na stránku s grafickým zobrazením výsledkov hlasovania na danú otázku.</p>
</x-layouts.app>
