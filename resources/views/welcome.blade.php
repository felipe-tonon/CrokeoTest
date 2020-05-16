@extends('layout')


@section('content')
    <form action="/calculate-prescription" method="post">
        @csrf
        <div class="container rounded mb-3 p-3 shadow">
            <div class="form-group">
                <span class="h2">1. Débutons avec votre adresse email</span><br/>
                <br/>
                <input type="email" class="form-control bg-transparent border-thick border-light text-light"
                       placeholder="Entrez votre adresse email" name="email" required>
                <span class="text-dark">Cela nous permettra de créer votre compte et de sauvegarder votre progression</span>
            </div>
        </div>
        <div class="container rounded mb-3 p-3">
            <div class="form-group">
                <span class="h2">2. Qui est votre meilleur ami ?</span><br/>
                <div class="text-center">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth">
                            <input type="radio" name="petType" id="petType-1" value="1" autocomplete="off">Chat
                            <img src="/images/cat.png">
                        </label>
                        <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth">
                            <input type="radio" name="petType" id="petType-2" value="2" autocomplete="off"> Chien
                            <img src="/images/dog.png">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container rounded mb-3 p-3 shadow">
            <span class="h2">3. Quel est son nom ?</span>
            <input class="form-control bg-transparent border-thick border-light text-light mt-3 mb-3"
                   type="text" name="petName" required/>
        </div>
        <div class="container rounded mb-3 p-3">
            <span class="h2">4. Quel taille à votre chien ? (Sélectionner la taille de votre chien)</span><br/>
            <br/>
            <span class="text-dark">Si <span class="font-weight-bolder">"Rex"</span> est encore en pleine croissance, quelle taille aura-t-il à l'âge adulte ?</span><br/>
            <br/>

            <div class="text-center">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth">
                        <input type="radio" name="petSize" value="1" autocomplete="off" required>XS<br/>
                    </label>
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth">
                        <input type="radio" name="petSize" value="2" autocomplete="off">S<br/>
                    </label>
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth">
                        <input type="radio" name="petSize" value="3" autocomplete="off">M<br/>
                    </label>
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth">
                        <input type="radio" name="petSize" value="4" autocomplete="off">L<br/>
                    </label>
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth">
                        <input type="radio" name="petSize" value="5" autocomplete="off">XL<br/>
                    </label>
                </div>
            </div>

            <input type="number" class="form-control bg-transparent border-thick border-light text-light mt-3 mb-3"
                   placeholder="Poids en kg (optionnel)" name="weightInKg" />
            <br/>
            <span class="text-dark">
                Si vous avez un doute pas d'inquiétude vous pouvez toujours modifier sa taille et
                son poids dans votre espace client
            </span>
        </div>
        <div class="container rounded mb-3 p-3 shadow">
            <span class="h2"> 5. Quel genre ?</span>
            <div class="text-center">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth p-3">
                        <input type="radio" name="petGender" value="1" autocomplete="off" required>Mâle
                    </label>
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth p-3">
                        <input type="radio" name="petGender" value="2" autocomplete="off">Femelle
                    </label>
                </div>
            </div>
        </div>
        <div class="container rounded mb-3 p-3">
            <span class="h2"> 6. Son âge ?</span>
            <div class="text-center">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth p-3">
                        <input type="radio" name="petAge" value="1" autocomplete="off" required>-1
                    </label>
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth p-3">
                        <input type="radio" name="petAge" value="2" autocomplete="off">1 - 11 Ans
                    </label>
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth p-3">
                        <input type="radio" name="petAge" value="3" autocomplete="off">11+ Ans
                    </label>
                </div>
            </div>
        </div>
        <div class="container rounded mb-3 p-3 shadow">
            <span class="h2">7. Niveau d’activité</span>
            <div class="text-center">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth p-3">
                        <input type="radio" name="petActivityLevel" value="1" autocomplete="off" required>Uniquement à <br/>
                        <small class="font-small">L'INTÉRIEUR</small>
                    </label>
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth p-3">
                        <input type="radio" name="petActivityLevel" value="2" autocomplete="off">Activité
                        modérée <br/>
                        <small class="font-small">(SORT ENVIRON 1-2H/JOUR)</small>
                    </label>
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth p-3">
                        <input type="radio" name="petActivityLevel" value="3" autocomplete="off"> Activité
                        importante<br/>
                        <small class="font-small">(>2H/JOUR À L'EXTÉRIEUR)</small>
                    </label>
                </div>
            </div>
        </div>
        <div class="container rounded mb-3 p-3">
            <span class="h2">8. Stérilisé ?</span>
            <div class="text-center">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth p-3">
                        <input type="radio" name="isSterilized" value="1" autocomplete="off" required>Oui
                    </label>
                    <label class="btn btn-outline-light btn-lg m-3 rounded border-thick border-rounded-smooth p-3">
                        <input type="radio" name="isSterilized" value="0" autocomplete="off">Non
                    </label>
                </div>
            </div>
        </div>
        <div class="container rounded mb-3 p-3 shadow">
            <div class="row">
                <div class="col-6">&nbsp;</div>
                <div class="col-6 text-right">
                    <button class="btn-lg btn-light border-rounded-smooth btn-block pt-3 pb-3">Calculer</button>
                </div>
            </div>
        </div>
    </form>
    <br/>
    <br/>
@endsection