# Design Patterns for Fun and Proficiency in Symfony!

Well hi there! This repository holds the code and script
for the [Design Patterns for Fun and Proficiency Tutorials](https://symfonycasts.com/screencast/design-patterns) on
SymfonyCasts.

## Setup

If you've just downloaded the code, congratulations!!

To get it working, follow these steps:

**Download Composer dependencies**

Make sure you have [Composer installed](https://getcomposer.org/download/)
and then run:

```
composer install
```

You may alternatively need to run `php composer.phar install`, depending
on how you installed Composer.

**Running the App!**

This is a command-line only app - so no web server needed. Instead, run:

```
php bin/console app:game:play
```

Have fun and battle hard!

## Have Ideas, Feedback or an Issue?

If you have suggestions or questions, please feel free to
open an issue on this repository or comment on the course
itself. We're watching both :).

## Thanks!

And as always, thanks so much for your support and letting
us do what we love!

<3 Your friends at SymfonyCasts

#### Notas propias

##### Cap 14

[Decoración: Anular los servicios del núcleo AsDecorator ](https://symfonycasts.com/es/screencast/design-patterns/as-decorator#play)

#### Lo aprendido

Los patrones de diseño están organizados en tres grupos... solo para ayudarte a pensar sobre el propósito de cada uno y
lo que intentan resolver:

* Creational (Creacional). Se trata de ayudar a crear instancias de objetos. Incluyen el patrón de factory, el builder
  patrón, el patrón singleton y otros.

* Structural (Estructural). Estos lo ayudan a organizar las cosas cuando tiene un montón de objetos y necesita
  identificar las relaciones entre ellos. Incluyen el patrón decorator, el patrón composite, etc.

* Behavioral (Comportamental). Estos ayudan a resolver problemas sobre cómo los objetos se comunican entre sí, así como
  también asignan responsabilidades entre objetos. Incluyen el patrón strategy, patrón observer, etc.

#### Patrón Estrategia

Empecemos con la definición técnica:

* El patrón de estrategia define una familia de algoritmos, encapsula cada uno de ellos y los hace intercambiables.
  Permite que el algoritmo varíe independientemente de los clientes que lo utilizan.
* El patrón de estrategia brilla cuando necesita cambiar el comportamiento (es decir, el código) de un algoritmo (es
  decir, un método dentro de una clase) sin tocar su implementación.
* El patrón de estrategia aprovecha principalmente los principios SRP y OCP.
* Para SRP, le permite encapsular algoritmos en (es decir, código separado en) clases separadas. Entonces, cada clase
  puede enfocarse en "una" responsabilidad. Luego, el patrón de estrategia ayuda a esas clases a conectarse y trabajar
  juntas.
* Para OCP, el patrón de estrategia nos brinda la capacidad de cambiar el comportamiento de una clase sin modificar su
  código.
* Por cierto, el patrón de estrategia también es una buena oportunidad para aprovechar el principio DIP. ¿Cómo? Cuando
  crea la interfaz para la "estrategia" (por ejemplo, AttackType), debe nombrarla de una manera que tenga sentido para
  la clase de "alto nivel" que la usará (por ejemplo, Carácter) y no para una de las clases que implementará eso. Por
  ejemplo, si hubiéramos llamado a la interfaz MagicAttackInterface (sabiendo que crearemos una clase MagicAttack que
  implemente esto), eso violaría DIP. En cambio, queremos nombrar la interfaz de una manera que tenga más sentido para
  Character, sin pensar en absoluto en qué clases necesitarán implementar esto.
* Usar el nombre del patrón para sus clases e interfaces es una excelente manera de que los demás sepan lo que está
  haciendo. Sin embargo, no es una regla. Hay casos en los que puede confundir la intención de la clase, tal y como nos
  pasó a nosotros con la interfaz de AttackType. La claridad sobre la intención de sus clases e interfaces es el
  principal objetivo a perseguir. Entonces, si agregar el nombre del patrón no ayuda a aclarar su propósito, no lo use.

#### Patrón Construct

Definición

* La definición oficial del "patrón constructor" es la siguiente

  Un patrón de diseño de creación que te permite construir y configurar objetos complejos paso a paso. El patrón te
  permite producir diferentes tipos y representaciones de un objeto utilizando el mismo código de construcción.

  En otras palabras, creas una clase constructora que ayuda a construir otros objetos... y esos objetos pueden ser de
  diferentes clases o de la misma clase con diferentes datos.

#### Patrón Factory

Definición

* Un Factory no es más que una clase cuyo trabajo es crear otra clase.
* Es un patrón de creación.
* El propósito del patrón de factory en general es centralizar la instanciación de objetos.
* ¿Qué problemas puede resolver? Tienes un objeto que es difícil de
  instanciar, se añade una clase constructora. Ayuda con el principio de
  responsabilidad única. Ayuda a abstraer la lógica de creación de una clase de la clase
  que utilizará ese objeto. Seguimos teniendo código para usar el constructor, pero la mayor parte de la
  complejidad vive ahora en la clase constructora.

#### Patrón Observer

Definición

* El patrón observador define una dependencia de uno a muchos entre los objetos, de modo que cuando un objeto cambia
  de estado, todos sus dependientes son notificados y se actualizan automáticamente.
* El patrón observador permite que un grupo de objetos sea notificado por un objeto central cuando ocurre algo.