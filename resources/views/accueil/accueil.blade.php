@extends('layouts.app')

@section('content')
    <div id="carousel"></div>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Informations
                    </div>
                    <div class="card-body">
                        <p style="font-weight: bold;">
                            Réputé par ses plus fidèles client.e.s pour son accueil chaleureux, son cadre moderne, sa propreté impeccable et la qualité de ses prestations, le salon de coiffure mixte Salon Patrick à Neuve-Chapelle vous ouvre ses portes du mardi au samedi, à une minute à pied de la mairie.
                        </p>
                        <p>
                            Stéphanie, Martine et Stéphanie, vos trois coiffeuses expérimentées et bienveillantes, vous proposent toujours une coupe adaptée à la forme de votre visage et à votre nature de cheveu. Alors, vous partez sur un dégradé, un carré ou une frange ?
                        </p>
                        <p>
                            Et pour un coup de soleil capillaire, laissez-vous tenter par une coloration éclatante, des mèches, dorées ou cuivrées, une patine polaire, un ombré hair tendance ou encore une permanente pour de jolies boucles sauvages.
                        </p>
                        <p>
                            Messieurs, vous pouvez aussi venir vous faire coiffer par Patrick. Testez le rasage à l’ancienne, la coloration Cover 5 pour camoufler vos cheveux blancs ou encore la permanente. Et profitez-en pour faire tailler votre barbe. C’est gratuit. ;)
                        </p>
                        <p>
                            Enfin, pour vos prochaines cérémonies, prenez rendez-vous au salon de coiffure mixte Salon Patrick à Neuve-Chapelle pour des tresses parfaitement exécutées ou un bun sophistiqué. Haut ou bas, relâché ou serré, bohème ou chic, à chacune son chignon !
                        </p>

                    </div>
                </div>
                <div style="padding-bottom: 2%"></div>
                <div class="card">
                    <div class="card-header">
                        Carte
                    </div>
                    <div class="card-body">
                        <div id="map-container-google-1" class="z-depth-1-half" style="height: 500px; overflow:hidden; padding-bottom:56.25%; position:relative;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d81066.1554970218!2d2.711477622886966!3d50.584054400863735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d50.584102099999996!2d2.7814039!5e0!3m2!1sfr!2sfr!4v1671757045634!5m2!1sfr!2sfr" frameborder="0"
                                    style="border:0; left:0; top:0; height:100%; width:100%; position:absolute;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Horaires
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table style="width: 100%;">
                                <thead>
                                <th></th>
                                <th></th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Lundi</td>
                                    <td style="text-align: right;">Fermé</td>
                                </tr>
                                <tr>
                                    <td>Mardi</td>
                                    <td style="text-align: right;">08:00 - 12:00 - 13:30 - 19:00</td>
                                </tr>
                                <tr>
                                    <td>Mercredi</td>
                                    <td style="text-align: right;">08:00 - 12:00 - 13:30 - 19:00</td>
                                </tr>
                                <tr>
                                    <td>Jeudi</td>
                                    <td style="text-align: right;">08:00 - 12:00 - 13:30 - 19:00</td>
                                </tr>
                                <tr>
                                    <td>Vendredi</td>
                                    <td style="text-align: right;">08:00 - 12:00 - 13:30 - 19:00</td>
                                </tr>
                                <tr>
                                    <td>Samedi</td>
                                    <td style="text-align: right;">08:00 - 18:00</td>
                                </tr>
                                <tr>
                                    <td>Dimanche</td>
                                    <td style="text-align: right;">Fermé</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
