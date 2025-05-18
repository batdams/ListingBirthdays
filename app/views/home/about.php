<div class="d-flex aligne_items-center justify-content-center page-id" id="page-about">
<section class="p-3">
                <div class="container-sm text-center contactForm" id="Contact">
                    <h2>Formulaire de contact</h2>
                        <form id ="formContact"  method="POST" action="<?php echo BASE_URL;?>/userMessageView">
                            <fieldset>
                                <legend>Coordonnées</legend>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-4 p-1 text-center">
                                                <label for="name" class="form-label">Nom</label><br>
                                                <input id="name" type="text" class="form-control" required>
                                            </div>
                                            <div class="col-sm-4 p-1 text-center">
                                                <label for="surname" class="form-label">Prénom</label><br>
                                                <input id="surname" type="text" class="form-control" required>
                                            </div>
                                            <div class="col-sm-4 p-1 text-center">
                                                <label for="mail" class="form-label">courriel</label><br>
                                                <input id="mail" type="email" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                            </fieldset>
                            <fieldset>
                                <div class="text-center">
                                    <div>
                                        <label for="objet">Objet :</label>
                                        <select type="text" name="objet" id="objet" required>
                                            <option value="demande_de_contact" selected>Demande de contact</option>
                                            <option value="serviceProblem">Problème d'utilisation du service</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="section" class="form-label">Section impactée</label>
                                        <input id="section" name="section" type="text" class="form-control" required>
                                    </div>
                                    <div>
                                        <label for="demandeDescription" class="form-label">Description de la demande</label>
                                        <textarea class="form-control demandDescription" style="height: 150px;" required></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <input type="submit" value="Valider">
                        </form>
                    </div>
                </div>
            </section>
            <section>
                <article class="container-sm p-3 mentions" id="mentions">
                    <div class="row text-center">
                        <h2>Mentions Légales</h2>
                        <div class="col-sm-6 text-center">
                            <h5>Éditeur</h5>
                            <p>Site BdayList est un site réalisé par DaBill.<br>
                            Siège social : Le Boulay-Morin – 27930 – France.<br>
                            Tél. : + 33 6 62 67 16 43<br>
                            Directeur de publication : Damien Billiau<br>
                            Crédits images<br>
                            Photos : unsplash.com</p>
                        </div>
                        <div class="col-sm-6 text-center">
                            <h5>Hébergeur de site</h5>
                            <p>Netlify<br>
                            Unit 3D North Point House<br>
                            North Point Business Park<br>
                            New Mallow Road<br>
                            Cork T23AT2P<br>
                            Ireland</p>
                        </div>
                    </div>
                </article>
                <article class="container-sm CGU p-3" id="cgu">
                    <h2 class="text-center">Condition générales d'utilisation</h2>
                    <p>L’utilisation du site <b>BdayList</b> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site sont donc invités à les consulter de manière régulière.
Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par la société Dabill, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.
Le site <b>BdayList</b> est mis à jour régulièrement. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
<h5>Description des services fournis</h5>
<p>La société DaBill s’efforce de fournir sur son site internet des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.
Tous les informations indiquées sur le site internet sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site DaBill ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
<h5>Politique de confidentialité et gestion des données personnelles</h5>
<p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l’article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995 ainsi que par le RGPD.
La société DaBill collecte des informations personnelles relatives à l’utilisateur via son formulaire de contact et de demande de devis. L’utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu’il rempli de lui-même les champs des formulaires. Il est alors précisé à l’utilisateur du site l’obligation ou non de fournir ces informations.
Les informations recueillies sur ce formulaire sont enregistrées par l’équipe informatique de la société DaBill. Elles peuvent être conservées sur des serveurs de messagerie sécurisée et sont destinées uniquement aux échanges par email, ou téléphone entre la responsable du site et les internautes.
Les données recueillies sur le site DaBill lors de l’envoi d’un email sont strictement réservées au responsable du site et à son équipe et ne seront en aucun cas cédées ou vendues à des tiers. Aucune adresse email ou donnée personnelle ne sera transmise à des tiers ou des partenaires, sauf avec l’accord écrit des intéressés.
L’ensemble du site ainsi que sa base de données sont protégés par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
<h5>Limitations contractuelles sur les données techniques</h5>
<p>Le site Internet de la société DaBill ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour.</p>
<h5>Propriété intellectuelle et contrefaçons</h5>
<p>La société DaBill est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes.
Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de la part de la société.
Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
<h5>Limitations de responsabilité</h5>
La société DaBill ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications traditionnelles de navigation web, soit de l’apparition d’un bug ou d’une incompatibilité.
La société DaBill ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site DaBill.
<h5>Liens hypertextes</h5>
Le site <b>BdayList</b> contient un certain nombre de liens hypertextes vers d’autres sites. Cependant, la société DaBill n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.
<h5>Droit applicable et attribution de juridiction</h5>
Tout litige en relation avec l’utilisation du site <b>BdayList</b> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.
<h5>Analyses des visites sur notre site</h5>
Nous pouvons utiliser des services d’analyse des visites pour mesurer les visites des internautes. Les informations qui peuvent être enregistrées sont : l’URL des liens par l’intermédiaire desquels l’utilisateur a accédé au site, le fournisseur d’accès de l’utilisateur, l’adresse de protocole Internet (IP) de l’utilisateur, le système informatique de l’utilisateur. Ces analyses de visites fonctionnent via les cookies, elles sont stockées sur les serveurs de Google pour une durée de 26 mois, et il vous trouverez toutes les explications concernant leur utilisation ou leur refus plus bas sur cette page.
<h5>Déclaration relative à l’utilisation de cookies sur ce site internet</h5>
La navigation sur le site <b>BdayList</b> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.
Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur pour refuser l’installation des cookies.
<h5>C’est quoi un cookie, ça se mange ?</h5>
Le gâteau oui ! Mais pas ceux utilisés sur le site <b>BdayList</b> 😉 Les cookies sont des petits éléments d’information envoyés à partir d’un site Internet et stockés sur l’ordinateur de l’utilisateur lors de sa visite sur ce site. Les cookies remplissent de nombreuses fonctions, comme celles d’informer le site Internet de votre activité antérieure sur le site de façon à rendre votre utilisation du site plus efficace et plus conviviale, de se souvenir de vos préférences, de vous permettre de naviguer sur le site, et de vous authentifier si vous vous êtes inscrit(e) sur le site ou si vous cherchez à réaliser un achat par l’intermédiaire de ce site. Les cookies peuvent également faire en sorte que les publicités que vous voyez en ligne soient mieux adaptées à vous-même et à vos intérêts.
L’utilisation des cookies n’endommage en aucune façon votre ordinateur et sont en général automatiquement supprimés au bout d’un certain temps, par exemple six mois. Vous trouverez de plus amples informations concernant les cookies sur le site : www.allaboutcookies.org.
<h5>DaBill utilise-t-il des cookies sur son site internet ?</h5>
Oui, comme la plupart des sites. Cela nous permet de détecter qu’un même utilisateur est revenu sur notre site, de savoir combien d’utilisateurs ont visité notre site, quelles pages ont été consultées et s’il y a eu des problèmes techniques lors du chargement des pages ou de la navigation sur le site. Grâce à la collecte de ces informations, nous pouvons savoir quelles sont les parties de notre site qui présentent le plus d’intérêt et d’utilité pour nos utilisateurs, et surveiller l’intérêt global généré par notre site internet. Cela nous permet également d’identifier des problèmes techniques liés au site, de façon à pouvoir les résoudre dans les meilleurs délais. En retour, cela nous aide à assurer le bon fonctionnement de notre site internet et à améliorer l’offre que nous proposons à nos visiteurs.
<h5>Suis-je obligé(e) d’accepter les cookies ?</h5>
Non. Vous pouvez désactiver l’utilisation des cookies, y compris ceux utilisés sur notre site internet, en désactivant la fonction cookie de votre navigateur. Cependant, certaines parties de notre site, de même que la plupart des autres sites, ne fonctionneront pas correctement si vous optez pour cette solution.
<h5>Quels types de cookies sont utilisés par ce site ?</h5>
Trois grandes catégories de cookies sont utilisées sur nos sites internet :
· Cookies strictement nécessaires (ou essentiels). Ces cookies sont essentiels pour vous permettre de naviguer sur un site internet et utiliser ses fonctions. Comme tous les sites internet publics, notre site utilise des cookies strictement nécessaires.
· Cookies de performance. Ces cookies collectent des informations sur la manière dont les visiteurs utilisent un site internet, et permettent de savoir par exemple quelles sont les pages le plus souvent consultées par les utilisateurs, et si ceux-ci reçoivent des messages d’erreurs de certaines pages web. Ces cookies ne collectent pas d’informations identifiant le visiteur. Les informations collectées sont agrégées et anonymes, et ne sont utilisées que pour améliorer le fonctionnement du site internet. Comme presque tous les sites internet, nous utilisons des cookies de performance sur nos sites.
· Cookies de fonctionnalité. Ces cookies permettent au site internet de se souvenir des choix que vous faites (tels que votre nom d’utilisateur, votre langue ou la région dans laquelle vous vous trouvez). En retour, cela permet au site de vous fournir des fonctions améliorées et plus personnelles, et d’améliorer ainsi votre visite sur ce site. Les informations collectées par ces cookies sont généralement anonymes et n’incluent pas votre activité de navigation sur d’autres sites internet. Comme presque tous les sites internet, nous utilisons des cookies de fonctionnalité sur nos sites.
<h5>Que se passe-t-il si j’autorise les cookies sur mon navigateur ?</h5>
À moins que ces fonctions ne soient désactivées, en utilisant notre site internet et les services en ligne, vous nous autorisez à installer des cookies et les technologies associées sur votre ordinateur.
<h5>La société DaBill autorise-t-elle des tiers à installer des cookies ou autres technologies similaires sur ses sites internet ?</h5>
En règle générale, nous n’autorisons pas les tiers (tels que les annonceurs) à installer des cookies sur nos sites internet ou à se livrer à de la publicité comportementale. Cependant, sur certains de nos sites internet tels que nos pages de réseaux sociaux, il est possible que des personnes aient téléchargé le contenu de tiers, tels que des vidéos de YouTube ou autres, ou intégré du contenu et des outils de partage provenant d’autres sites tiers. Comme nous ne contrôlons pas la diffusion des cookies par des sites qui n’appartiennent pas et ne sont pas exploités par DaBill, vous devrez contrôler le(s) site(s) internet tiers pertinent(s) pour en savoir plus sur ces cookies, pour savoir s’il est possible de refuser de les recevoir, et quelle est la manière de le faire. Cependant, vous pouvez en général désactiver les cookies de tiers en réglant les paramètres de votre navigateur. Vous trouverez des instructions à ce sujet sur le site : www.aboutcookies.org.
                </article>
</section>