<?php

/* En PHP, les mots-clés `self` et `static` sont utilisés dans le contexte de la programmation orientée objet pour faire référence à des éléments de classe tels que les propriétés et les méthodes. Ils sont utilisés dans des contextes différents pour accéder à des éléments de classe et ont des comportements légèrement différents. Voici ce que signifient ces deux mots-clés :

    1. **`self` :**
    Le mot-clé `self` est utilisé pour faire référence à des éléments de la classe dans laquelle il est utilisé. Il fait référence à la classe actuelle statiquement, c'est-à-dire que cela dépend de la classe dans laquelle le code est écrit, et non de la classe à l'exécution. Il est souvent utilisé pour accéder à des propriétés statiques et des méthodes statiques de la classe dans laquelle il est utilisé. Voici un exemple d'utilisation :
    
    ```php */
    class Exemple {
        public static $proprieteStatique = "Ceci est une propriété statique.";
    
        public static function methodeStatique() {
            return "Ceci est une méthode statique.";
        }
    
        public function utiliserSelf() {
            echo self::$proprieteStatique;
            echo self::methodeStatique();
        }
    }
    
    $objet = new Exemple();
    $objet->utiliserSelf();
/*     ```
    
    2. **`static` :**
    Le mot-clé `static` est utilisé pour faire référence à des éléments de classe, mais son comportement diffère de `self`. Lorsqu'il est utilisé à l'intérieur d'une classe, `static` se réfère à la classe dans laquelle le code est exécuté (donc à la classe réelle à l'exécution). Cela signifie que si vous avez des méthodes et des propriétés statiques et que vous étendez la classe avec une sous-classe, l'utilisation de `static` se référera à la classe où la méthode est appelée, pas nécessairement à la classe définie à l'origine. Voici un exemple :
    
    ```php */
    class Parente {
        public static function whoAmI() {
            echo "Je suis la classe Parente.";
        }
    }
    
    class Enfant extends Parente {
        public static function whoAmI() {
            echo "Je suis la classe Enfant.";
            echo "Appel depuis " . static::class;
        }
    }
    
    Enfant::whoAmI();  // Sortie : "Je suis la classe Enfant. Appel depuis Enfant"
/*     ```
    
    Dans cet exemple, l'utilisation de `static::class` dans la classe `Enfant` renvoie le nom de la classe dans laquelle la méthode est appelée, même si la méthode a été héritée de la classe parente.
    
    En résumé, `self` fait référence à la classe actuelle statiquement, tandis que `static` fait référence à la classe réelle où le code est exécuté, ce qui peut différer en cas d'héritage. */