@extends('layouts.header')
@section('content')

<style>
    h2 {
        text-align: center;
        color:  #f99828;
        margin-bottom: 30px;
    }

    .progressbar {
        display: flex;
        justify-content: space-between;
        counter-reset: step;
        margin-bottom: 40px;
        padding: 0;
    }

    .progressbar li {
        list-style: none;
        text-align: center;
        width: 100%;
        position: relative;
        color: #bbb;
        font-weight: 500;
    }

    .progressbar li::before {
        content: counter(step);
        counter-increment: step;
        width: 35px;
        height: 35px;
        display: block;
        margin: auto;
        background: white;
        border: 3px solid #ccc;
        border-radius: 50%;
        line-height: 32px;
        color: #999;
        font-weight: bold;
    }

    .progressbar li.active {
        color:  #f99828;
    }

    .progressbar li.active::before {
        border-color:  #f99828;
        color:  #f99828;
    }

    .progressbar li+li::after {
        content: '';
        position: absolute;
        top: 16px;
        left: -50%;
        width: 100%;
        height: 3px;
        background-color: #ccc;
        z-index: -1;
    }

    .progressbar li.active+li::after {
        background-color: #f99828;
    }

    .step {
        display: none;
        animation: fadeIn 0.3s ease-in-out;
    }

    .step.active {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        gap: 15px;
        flex-wrap: wrap;
    }

    .form-group label {
        flex: 0 0 150px;
        font-weight: 500;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        flex: 1;
        padding: 10px 14px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
        transition: border 0.3s;
    }

    .form-group textarea {
        resize: vertical;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color:  #f99828;
        outline: none;
        box-shadow: 0 0 5px rgba(46, 134, 222, 0.2);
    }

    .buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
    }

    .buttons button {
        padding: 10px 24px;
        border: none;
        background:  #f99828;
        color: #fff;
        border-radius: 8px;
        font-size: 15px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .buttons button:hover {
        background:  #f99828;
    }

    @media (max-width: 600px) {
        .form-group {
            flex-direction: column;
            align-items: flex-start;
        }

        .form-group label {
            flex: none;
            margin-bottom: 6px;
        }
    }
</style>


</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <h2>Inscription à une formation</h2>
            <div class="card mb-1 mt-2">
                <div class="card-body d-flex justify-content-between">
                    <ul>
                        <li>Formation:
                            <strong class="text-bold">fzefze</strong>
                        </li>
                        <li>Frais d'inscription:
                        </li>
                        <li>Frais de formation:
                        </li>
                    </ul>
                    <ul>
                        <li>MTN Monney: <span> .....</span></li>
                        <li>Moov Monney: <span> .....</span></li>
                        <li>Compte UBA: <span class="text-danger"> 514 090 005 851 </span></li>
                    </ul>
                    <ul></ul>
                </div>
            </div>
            <div class="col-lg-9 mt-3">

                <ul class="progressbar">
                    <li class="active">Informations</li>
                    <!--  <li>Attentes</li> -->
                    <li>Paiement</li>
                    <li>Confirmation</li>
                </ul>

                <form id="form-inscription">
                    <!-- Étape 1 -->
                    <div class="step active">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label">Nom et prenom</label>
                                <input type="text" class="form-control" required name="nom" placeholder="Votre nom & prénom">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required placeholder="Votre email">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Télephone</label>
                                <input type="text" class="form-control" required name="prenom" placeholder="Numero de telephone">
                            </div>

                        </div>
                    </div>

                    <!-- Étape 3 -->
                    <div class="step">
                        <div class="row g-3">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Moyen de paiement</label>
                                <select class="form-select" id="paiement" name="paiement">
                                    <option value="MTN">MTN MONNEY</option>
                                    <option value="MOOV">MOOV MONNEY</option>
                                    <option value="UBA">UBA</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6" id="momoFields">
                                <label class="form-label">Numéro de transaction</label>
                                <input type="text" class="form-control" name="'numero_transaction">
                            </div>
                        </div>
                    </div>

                    <!-- Étape 4 -->
                    <div class="step text-center">
                        <h5 class="mb-3">🎉 Félicitations !</h5>
                        <p>Vous êtes prêt·e à valider votre inscription. Cliquez sur "Soumettre".</p>
                    </div>

                    <!-- Boutons -->
                    <div class="d-flex justify-content-between mt-4 mb-5">
                        <button type="button" class="btn btn-secondary" id="prevBtn">Précédent</button>
                        <button type="button" class="btn subs btn-sm" id="nextBtn">Suivant</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>

    <script>
        const steps = document.querySelectorAll(".step");
        const progressItems = document.querySelectorAll(".progressbar li");
        const nextBtn = document.getElementById("nextBtn");
        const prevBtn = document.getElementById("prevBtn");

        let currentStep = 0;

        const showStep = (index) => {
            steps.forEach((step, i) => {
                step.classList.toggle("active", i === index);
                progressItems[i].classList.toggle("active", i <= index);
            });

            prevBtn.style.display = index === 0 ? "none" : "inline-block";
            nextBtn.textContent = index === steps.length - 1 ? "Soumettre" : "Suivant";
        };

        nextBtn.addEventListener("click", () => {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            } else {
                document.getElementById("multiStepForm").submit();
            }
        });

        prevBtn.addEventListener("click", () => {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });

        // Dynamique : pays / département
        const pays = ['Bénin', 'Côte d\'Ivoire', 'Togo'];
        const departements = {
            'Bénin': ['Littoral', 'Atlantique', 'Borgou'],
            'Côte d\'Ivoire': ['Abidjan', 'Bouaké', 'Yamoussoukro'],
            'Togo': ['Lomé', 'Kara', 'Sokodé']
        };

        const paysSelect = document.getElementById("pays");
        const depSelect = document.getElementById("departement");

        pays.forEach(p => {
            const opt = document.createElement("option");
            opt.value = p;
            opt.textContent = p;
            paysSelect.appendChild(opt);
        });

        paysSelect.addEventListener("change", function() {
            const dList = departements[this.value] || [];
            depSelect.innerHTML = '';
            dList.forEach(dep => {
                const opt = document.createElement("option");
                opt.value = dep;
                opt.textContent = dep;
                depSelect.appendChild(opt);
            });
        });

        // Déclencher au chargement
        paysSelect.dispatchEvent(new Event('change'));

        // Paiement : champs dynamiques
        document.getElementById("paiement").addEventListener("change", function() {
            const value = this.value;
            document.getElementById("momoFields").style.display = value === "UBA" ? "none" : "block";
            document.getElementById("ubaFields").style.display = value === "UBA" ? "block" : "none";
        });

        // Initialisation
        showStep(currentStep);
    </script>
    @endsection