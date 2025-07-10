<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Message de contact</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen px-4">

  <div class="bg-white max-w-xl w-full rounded-lg shadow-md p-6">
    <div class="text-center mb-6">
      <h2 class="text-2xl font-bold text-blue-600">ACCES UNIVERSEL</h2>
      <p class="text-gray-600">Message reçu via le formulaire de contact</p>
    </div>

    <div class="space-y-4">
      <div>
        <h4 class="text-gray-700 font-semibold">Nom :</h4>
        <p class="text-gray-900">{{ $details['nom_prenom'] }}</p>
      </div>

      <div>
        <h4 class="text-gray-700 font-semibold">E-mail :</h4>
        <p class="text-gray-900">{{ $details['email'] }}</p>
      </div>

      <div>
        <h4 class="text-gray-700 font-semibold">Sujet :</h4>
        <p class="text-gray-900">{{ $details['sujet'] }}</p>
      </div>

      <div>
        <h4 class="text-gray-700 font-semibold">Message :</h4>
        <p class="text-gray-900 whitespace-pre-line">{{ $details['massage'] }}</p>
      </div>
    </div>

    <div class="mt-6 text-center">
      <p class="text-sm text-gray-400">Ce message a été généré automatiquement.</p>
    </div>
  </div>

</body>

</html>
