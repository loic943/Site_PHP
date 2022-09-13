<?php 

/**
 * Validation des règles de formulaire
 *
 * @param array $regles (ex: ['nom' => 'required'])
 * @return void
 */
function validate(array $regles): void
{
    foreach ($regles as $champ => $contraintes) {
        $value = $_POST[$champ] ?? null;
        foreach ($contraintes as $contrainte) {
            $validation_function = "validate_{$contrainte}";
            $error = $validation_function($value);
            if ($error) {
                $_SESSION['previous_errors'][$champ] = $error;
                break;
            }
        }
    }

    if (!empty($_SESSION['previous_errors'])) {
        save_inputs();
        var_dump('redirection request_uri');
        redirect($_SERVER['REQUEST_URI']);
    }

}

/**
 * Validation de la règle 'required'
 *
 * @param string $value (type $_POST['champ'])
 */
function validate_required(string $value)
{
    if (empty($value)) {
        return 'Le champ ci-dessus est requis';
    }
}
