<?php

/* En PHP, les mots-clés `public`, `protected` et `private` sont utilisés pour définir la visibilité des propriétés et des méthodes au sein d'une classe. Ils permettent de contrôler l'accès à ces éléments depuis l'extérieur de la classe et des classes dérivées (héritées). Voici ce que signifient ces trois niveaux de visibilité :

1. **Public (`public`) :**
Les propriétés et méthodes déclarées comme publiques sont accessibles depuis n'importe où, à la fois à l'intérieur de la classe et depuis l'extérieur de celle-ci. Cela signifie que vous pouvez y accéder directement en créant une instance de la classe ou en utilisant l'opérateur de résolution de portée `->`. Par exemple :

```php
class MaClasse {
    public $proprietePublique = "Ceci est public.";

    public function methodePublique() {
        return "Ceci est une méthode publique.";
    }
}

$objet = new MaClasse();
echo $objet->proprietePublique;  // Sortie : "Ceci est public."
echo $objet->methodePublique();  // Sortie : "Ceci est une méthode publique."
```

2. **Protégé (`protected`) :**
Les propriétés et méthodes déclarées comme protégées sont accessibles à l'intérieur de la classe où elles sont définies, ainsi que dans les classes dérivées (héritées) de cette classe. Cependant, elles ne sont pas accessibles depuis l'extérieur de la classe ou des classes dérivées. Les membres protégés sont souvent utilisés lorsque vous souhaitez permettre aux classes dérivées d'accéder aux membres parentaux, tout en limitant l'accès à l'extérieur. Par exemple :

```php */
class MaClasse {
    protected $proprieteProtegee = "Ceci est protégé.";

    protected function methodeProtegee() {
        return "Ceci est une méthode protégée.";
    }
}

class MaClasseDerivee extends MaClasse {
    public function afficherMembreProtege() {
        return $this->proprieteProtegee;
    }
}

$objetDerive = new MaClasseDerivee();
echo $objetDerive->afficherMembreProtege();  // Sortie : "Ceci est protégé."
/* ```

3. **Privé (`private`) :**
Les propriétés et méthodes déclarées comme privées sont accessibles uniquement à l'intérieur de la classe où elles sont définies. Elles ne sont pas accessibles depuis les classes dérivées ni depuis l'extérieur de la classe. Les membres privés sont utilisés lorsque vous souhaitez encapsuler complètement certaines parties de votre classe, les rendant inaccessibles de l'extérieur. Par exemple :

```php */
class MaClasse2 {
    private $proprietePrivee = "Ceci est privé.";

    private function methodePrivee() {
        return "Ceci est une méthode privée.";
    }
}

$objet = new MaClasse();
// Les lignes suivantes généreraient des erreurs car les membres privés ne sont pas accessibles.
// echo $objet->proprietePrivee;
// echo $objet->methodePrivee();
/* ```

En choisissant la bonne visibilité (`public`, `protected` ou `private`) pour les membres d'une classe, vous pouvez garantir que l'interaction avec ces membres est correctement contrôlée et que votre code est bien encapsulé, ce qui favorise la modularité et la maintenance. */