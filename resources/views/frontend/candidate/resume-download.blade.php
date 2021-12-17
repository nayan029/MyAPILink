<html>
<head>
    <title>Download Resume</title>
</head>
<body>
    <table width="100%">
        <thead>
            <tr>
                <td style="font-size: 25px;text-align: center;color: #EC91BC;border-bottom: 2px solid #000;background: #192842;">Apilink Resume</td>
            </tr>
        </thead>
    </table>
    <div class="right">
        <table width="100%" style="border:2px solid #000;border-bottom:0;border-top: 0;">
            <thead>
                <tr>
                    <td style="font-size: 25px;text-align: center;color: #75bfd3;border-bottom: 2px solid #000;background: #000000db;">Infos Personnelles</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Civilité – {{$userData['civility']}}</td>
                </tr>
                <tr>
                    <td>Prénom – {{$userData['first_name']}}</td>
                </tr>
                <tr>
                    <td>Nom de famille – {{$userData['last_name']}}</td>
                </tr>
                <tr>
                    <td>Date de naissance - {{$userData['dob']}}</td>
                </tr>
                <tr>
                    <td>E-mail – {{$userData['email']}}</td>
                </tr>
                <tr>
                    <td>Numéro de téléphone - {{$userData['phone']}}</td>
                </tr>
                <tr>
                    <td>Ville - {{$userData['city']}}</td>
                </tr>
                <tr>
                    <td>Code postal - {{$userData['postal_code']}}</td>
                </tr>
            </tbody>
        </table>
        <table width="100%" style="border:2px solid #000;border-bottom:0">
            <thead>
                <tr>
                    <td style="font-size: 25px;text-align: center;color: #75bfd3;border-bottom: 2px solid #000;background: #000000db;">Situation actuelle</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Situation actuelle – {{$userData['current_situation']}}</td>
                </tr>
                <tr>
                    <td>Recherche – {{$userData['research']}}</td>
                </tr>
                <tr>
                    <td>Disponible – {{$userData['available_day']}}</td>
                </tr>
                <tr>
                    <td>Temps disponible - {{$userData['available_time']}}</td>
                </tr>
            </tbody>
        </table>

        <table width="100%" style="border:2px solid #000;border-bottom:0">
            <thead>
                <tr>
                    <td style="font-size: 25px;text-align: center;color: #75bfd3;border-bottom: 2px solid #000;background: #000000db;">Mon parcours</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Diplômes – {{$userData['diplomas']}}</td>
                </tr>
                <tr>
                    <td>Mon rôle dans l'établissement – {{$userData['roles']}}</td>
                </tr>
                <tr>
                    <td>Expérience dans le domaine – {{$userData['experiences_of']}}</td>
                </tr>
                <tr>
                    <td>Tranche d'âge avec expérience - {{$userData['experiences_at']}}</td>
                </tr>
                <tr>
                    <td>Pédagogie appliquée - {{$userData['pedagogy']}}</td>
                </tr>
            </tbody>
        </table>


        <table width="100%" style="border:2px solid #000;border-bottom:0">
            <thead>
                <tr>
                    <td style="font-size: 25px;text-align: center;color: #75bfd3;border-bottom: 2px solid #000;background: #000000db;">A propos de moi</td>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Mes qualités – {{$userData['qualities']}} </td>
                </tr>
                <tr>
                    <td>Langues parlées couramment – {{$userData['languages_spoken']}} </td>
                </tr>
                <tr>
                    <td>Mobilité – {{$userData['mobility']}}</td>
                </tr>
                <tr>
                    <td>Distance - {{$userData['km_rang']}}</td>
                </tr>
                <tr>
                    <td>permis véhicule - {{$userData['permit_vehicle']}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>