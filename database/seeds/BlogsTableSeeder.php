<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blogs')->delete();
        
        \DB::table('blogs')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'Errores comunes que cometemos',
                'slug' => 'errores-comunes-que-cometemos',
                'image_name' => 'errores-comunes-que-cometemos.jpg',
            'content' => 'Hola a todos! :) Hoy os traigo un post sobre errores que cometemos a la hora de vestirnos. ¿Cuál de estos errores cometéis vosotras? ¡No os los perdáis! 

1-No tener en cuenta el tamaño de los bolsillos del pantalón.

Si quieres aportar volumen, puedes escoger bolsillos grandes o con líneas rectas, cuadrados, con botones o bordados, sobretodo que llamen la atención a esa zona. Si por lo contrario tienes un glúteo prominente, apuesta por bolsillos más pequeños que no llamen mas la atención y también bolsillos angulosos. Evita los pantalones que no tengan bolsillos en la parte de atrás porque normalmente no favorecen.

2. No es escoger bien el bolso o los bolsos que utilizamos. No es que se lleven los bolsos grandes o pequeños, lo que hay que mirar es que esté compensado con nuestro cuerpo y estatura. Un mismo bolso puede quedar genial a alguien y a otra persona  quedarle grande y llamar demasiado la atención. Así  que escoge un bolso acorde a tus dimensiones o, si más no, tenlo en cuenta cuando inviertas en uno.

3. Llevar la ropa demasiado grande o arrugada puede dar un toque relajado pero si no es controlado y no es lo que estamos buscando puede dar un aspecto descuidado y desarreglado. Sé que a veces da mucha pereza planchar la ropa pero lo que podéis hacer es tener un plancha pequeña o alguna de vapor que sea ágil y practica.

4. No tener en cuenta la ropa interior es un error. Dejar ver la ropa interior, a menos que no se a nuestra intención y forme parte de nuestro look, no es lo correcto. Evita la ropa interior que apriete y cree pliegues feos. Evita también usar braguitas apretadas con un pantalón fino que las marque, porque puede hacer llamar la atención a quien nos está viendo y puede arruinar nuestro look. Intenta tener algunas prendas (sujetadores, braguitas) que te den soluciones en los diferentes escotes o prendas que tengas (algunas prendas color crema, algunos sin costura, palabra de honor, tira recta, tira cruzada…)

5. No invertir bien a la hora de comprar nuestra ropa es un error. ¡A veces más no es mejor! Mejor es tener prendas que nos favorecen y que sacan lo mejor de nosotros, además de fáciles de combinar.

Siempre digo que hay que invertir en los básicos, en esas prendas que vamos a sacar más partido, que son básicas y neutras y que nos combinaran con casi todo.

Es mejor tener 1 o 2 camisas o camisetas blancas que son de calidad, que no se arrugan y que te sientan bien a tener 6 de mala calidad. Yo invertiría en un bolso básico antes que uno de temporada, a menos que no tuviera ya unos cuentos básicos.   La base para tener un buen fondo de armario es empezar teniendo unos básicos que te permiten crear mil y un looks.

¿Cuál de estos errores habéis cometido o cometéis vosotras? ¡Dejádmelo en los comentarios!',
            'user_id' => 1,
            'created_at' => '2018-01-29 14:42:20',
            'updated_at' => '2018-01-29 14:42:20',
        ),
        1 => 
        array (
            'id' => 3,
            'title' => 'El espacio de nuestro armario',
            'slug' => 'el-espacio-de-nuestro-armario',
            'image_name' => 'el-espacio-de-nuestro-armario.jpg',
        'content' => 'Hola a todos :) Hoy vamos a ver cómo aprovechar al máximo todo el espacio de nuestro armario. Espero que os sirvan de ayuda los consejos… ¡así que vamos a verlos! 

– La forma en que ordenamos nuestras prendas. Es fundamental que en el armario guardemos las prendas que más usamos. No tiene sentido guardar prendas que no nos ponemos, porque solo ocupan espacio. Por lo tanto, las que no nos ponemos, es mejor guardarlas en otro sitio. Además, es interesante ordenar nuestro armario por temporadas, y todas las del mismo tipo siempre juntas.
– Guarda la ropa bien doblada. A parte que no se arrugará tanto, hará que tengamos más espacio disponible para guardar más prendas. Pon las más pesadas a bajo, y las más ligeras arriba.
– Colgador múltiple. Si tu armario es pequeño y necesitas colgar muchas prendas, puedes hacerte con un colgador múltiple. Es como una cadena que sirve para colgar varias perchas a la vez, una debajo de la otra. Es muy económica y va genial :)
– Utiliza cajas. Te irán genial para guardar todo lo que no uses tan a menudo o cosas de temporadas anteriores. Y coloca todas las perchas mirando hacia el mismo sitio.
– Prueba en doblar las camisetas en vertical para que te quepan en los cajones. Además, de esta forma, las verás a simple vista, no se arrugaran tanto  y te será más fácil encontrarlas. También puedes probar de enrollar las prendas, sobretodo la ropa de deporte. ¡No se arrugan!
– Cubiteras para organizar las joyas. ¡Una idea fácil y barata!
¿Qué consejo usáis vosotras para aprovechar al máximo el espacio del armario? Dejadlo en los comentarios',
    'user_id' => 1,
    'created_at' => '2018-01-29 14:43:47',
    'updated_at' => '2018-01-29 14:43:47',
),
2 => 
array (
    'id' => 4,
    'title' => 'Ropa escencial para ir de vacaiones',
    'slug' => 'ropa-escencial-para-ir-de-vacaiones',
    'image_name' => 'ropa-escencial-para-ir-de-vacaiones.jpg',
    'content' => '¿Os vais de vacaciones? Hoy os traigo varios consejos para hacer vuestra maleta de de mano de verano, sobretodo si os vais de viaje en vuestras vacaciones. ¡Espero que os sirvan de ayuda!   

1. Lleva puesto el volumen. Lo fundamental y más importante es que las prendas más voluminosas las lleves puestas. De esta forma, dejarás mucho más espacio en la maleta para las otras cosas.
2. Lleva bolsas de plástico. ¡Mínimo un par! Una de ellas la puedes usar para poner la ropa sucia o mojada, y la otra para llevar el calzado, por si se te ensucia. ¡Nunca vienen mal y no ocupan nada!
3. Aunque lleves maleta de mano, es mejor que las cosas importantes las lleves en el bolso o riñonera, como el dinero y los documentos. ¡Nunca se sabe! Así, los tienes mucho más accesibles.
4. ¡Lleva un jersey! Aunque sea verano, pensad que en los aviones y, en general, en la mayoría de transportes públicos, ponen el aire acondicionado súper fuerte, y si es un vuelo o trayecto largo, vas a pasar frío. Por eso te recomiendo que te lleves un jersey y lo tengas a mano.
5. Intenta ocupar todos los espacios de la maleta. Hay muchas cosas que las puedes poner dentro de los zapatos, en los bolsillos del pantalón o chaqueta, etc. ¡Piensa que así quedará todo más compacto y ahorrarás espacio!
6. Ve con los looks pensados. ¡Y mejor si son prendas que combinan entre ellas! De esta forma, llevarás la ropa justa y necesaria, ni más ni menos. Ah, y sobretodo, deja algo de espacio libre por si de viaje te quieres comprar algo.
¡Espero que os haya servido de ayuda el post! ¿A dónde vais de vacaciones? ¿O ya habéis ido?',
    'user_id' => 1,
    'created_at' => '2018-01-29 14:44:40',
    'updated_at' => '2018-01-29 14:44:40',
),
3 => 
array (
    'id' => 5,
    'title' => 'Cuida tu lenguaje no verbal',
    'slug' => 'cuida-tu-lenguaje-no-verbal',
    'image_name' => 'cuida-tu-lenguaje-no-verbal.jpg',
'content' => 'Hola a todos :) Hoy os voy a comentar lo que dice de nosotros el lenguaje no verbal. Es tan importante lo que decimos como lo que mostramos, y por eso es fundamental conocer lo que podemos expresar con el cuerpo. Además, el lenguaje no verbal es muy útil para desarrollar otras habilidades y competencias.


¿Sabías que…? Entre un 60 y un 70% de lo que se comunica es mediante el lenguaje no verbal. Por ejemplo: posturas corporales, movimientos, miradas, gestos involuntarios… Por eso, lo más importante de la comunicación es escuchar lo que no se dice. ¡Vamos a ver puntos clave!

1. Los gestos de la cara porque pueden dar la información de inseguridad. Si nos tocamos la oreja es señal de no querer escuchar; si nos tocamos la nariz, la persona puede estar mintiendo; y si nos tocamos el cuello, la persona duda de lo que está diciendo.
2. La mirada también dice mucho de nosotros: levantar las cejas es como un saludo, o agrado y lo utilizamos para gustar. Si mantenemos la mirada fija, es que estamos mostrando interés y, si bajamos la cabeza pero en cambio la mirada no, puede denotar sumisión.
3. Las posiciones de los hombros son una zona ignorada pero dejadme deciros que comunican nuestro estado de ánimo. Una persona cabizbaja, con los hombros encogidos, denota tristeza. En cambio, una persona con los hombros hacia atrás, la espalda recta y erguida, muestra todo lo contrario.
4. La posición de las manos la utilizamos para señalar y apoyar los mensajes verbales. Los pulgares fuera de los bolsillos muestran confianza y autoridad. Si dejamos las manos en los bolsillos, expresamos pasotismo. Sujetar la otra mano por la espalda demuestra nerviosismo. Juntar las puntas de los dedos expresa seguridad y, entrelazar los dedos, transmite ansiedad. Además, mostrar la palma de las manos abiertas muestra sinceridad, todo lo contrario que mostrar las manos cerradas.
5. La posición de las piernas también es importante. Las piernas separadas son un gesto más de dominio. En cambio, las piernas enroscadas denotan timidez.
En definitiva, no podemos sacar conclusiones de un único gesto, pero sí que podemos corregir algunos de nuestros gestos. Por ejemplo, utilizar la sonrisa para alegrarnos la vida y la de los demás. Espero que lo pongáis en práctica',
'user_id' => 1,
'created_at' => '2018-01-29 14:45:37',
'updated_at' => '2018-01-29 14:45:37',
),
4 => 
array (
'id' => 6,
'title' => 'Tendencias 2018',
'slug' => 'tendencias-2018',
'image_name' => 'tendencias-2018.jpg',
'content' => 'Hola a todos :) Hoy os traigo las tendencias de otoño invierno en cuanto a colores, tipos de tejidos, prendas, etc. ¡Espero que os sirva de ayuda! Vamos allá :)


1. LOS COLORES DE TEMPORADA:

Esta es la gama de colores del Pantone que se va a llevar. Como podéis ver, hay muchos, así que si me tuviera que quedar con algunos, escogería estos 6.
ROJO:

Si no sois muy atrevidas para llevar muchas prendas rojas, las podéis podéis utilizar en complementos para darle el toque mas actual y atrevido.

AZUL:

Dentro de la tendencia del color azul, podemos ver tonalidades azul más oscuro, azul más clarito y también en tono verdoso.

Creo que el color oscuro le aporta un toque sofisticado al look.


En cambio, un azul aguamarina más clarito tirando a turquesa queda más divertido.
Y también vamos a ver un azul casi gris.
VINO Y MOSTAZA:

También vamos a ver este tipo de colores más contrastados. ¿Cuál os gusta más?

Y el tono estrella que nunca falla en otoño: EL TOPO.

2. TEJIDOS:
Estos son los tejidos que se van a utilizar este otoño invierno.

Terciopelo:

El terciopelo le quitará el protagonismo a la pana, aunque esta última se va a seguir llevando.

Pana:  
Es uno de los tejidos retros invernales que vuelve con mucha fuerza. Lo podemos encontrar en todas las variaciones: chaquetas, zapatos, pantalones faldas … Y el color estrella para esta prenda es un rosa clarito. .

Las plumas y el pelo: Es muy típico en esta época del año en prendas de abrigar pero este año también las veremos en los jersey zapatos, bolsillos y detalles.
3. LOS VAQUEROS:

Son un clásico que no pasa de moda y que es muy ponible en todas las pendas. Una tendencia nueva de esta temporada es con perlas. Si hay una prenda que nunca se pasa, esos son los jeans. Cambian de corte, de lavado y de estilo pero todas las temporadas regresan.

Prendas con forro de borrego tipo cazadora o militar:  Una tendencia que me encanta y que se puso muy de moda en los hace ya casi 10 años. Creo que es una tendencia muy ponible que se puede adaptar fácilmente a un look muy actual.

¿Qué os han parecido estas tendencias? ¿Cuál os gusta más?',
'user_id' => 1,
'created_at' => '2018-01-29 14:46:17',
'updated_at' => '2018-01-29 14:46:17',
),
5 => 
array (
'id' => 7,
'title' => 'Mejora tus poses',
'slug' => 'mejora-tus-poses',
'image_name' => 'mejora-tus-poses.jpg',
'content' => 'Hoy os voy a dar algunos trucos para posar debidamente delante de una cámara (para una sesión de fotos con un fotógrafo profesional, por ejemplo) y salir perfectas siempre.



– Mirar siempre al objetivo de la cámara. Si lo haces más arriba o más abajo saldrás con la mirada perdida.

– Posar siempre con la espalda totalmente recta (no tiesa), el abdomen hacia dentro y los hombros abiertos, un poco hacia atrás y relajados.

– Si estás de pie, apóyate sobre una pierna porque te verás mucho más cómoda y natural; sobretodo, intenta buscar la asimetría. Sólo tienes que inclinarte un poco hacia un lado o doblar un poco el brazo o la pierna.

– Para salir estilizada, procura que el objetivo de la cámara no esté más abajo que tu cabeza porque, así, los defectos se destacan.

– Poner una pierna delante de la otra con la rodilla ligeramente flexionada para que tparezcan más estilizadas.

– Sonreir ligeramente, con una sonrisa muy forzada te verás mal.

– Mantén tu barbilla baja y empuja la cabeza hacia el frente para evitar que se note la papada o algunas arrugas del cuello.

– Si tienes unos brazos grandes o no están musculados, no los apoyes sobre el cuerpo, mejor apóyalos sobre la cadera o dobla los codos y mantenlos separados a unos 5 centímetros del cuerpo. ¡Se verán mucho más delgados!

– Tener una buena actitud: piensa en positivo, olvídate de los problemas y deja que tu autoestima suba al máximo porque tus pensamientos se reflejarán en la cámara.

– Respirar. Muchas veces, cuando estamos muy concentradas o nerviosas, aceleramos o disminuimos la respiración de una manera abismal. Sé consiente de tu respiración y mantenla normal y relajada. ¡Lo importante es sentirte cómoda!
– Practicar constantemente delante de un espejo hasta encontrar tu mejor perfil y tus mejores poses.

¿Qué os han parecido estos consejos? ¿Creéis que os servirán de ayuda?',
'user_id' => 1,
'created_at' => '2018-01-29 14:47:13',
'updated_at' => '2018-01-29 14:47:13',
),
));
        
        
    }
}