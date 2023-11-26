<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <!--
        Realizar un programa para un Centro Educativo en el que acaban de abrir una tienda de libros y 
        revistas para comprar y vender de segunda mano. Las clases necesarias serán:
        ● Clase abstracta ReadingMaterial 
        ○ variables privadas: id, title, pages, price
        ○ objeto private editor de la clase Publisher (ver descripción de la clase más abajo)
        ○ método añadirIVA (el IVA de los Book es de 4% y el de Magazine de 9%)
        ○ método mostrarCategoria (pages<50: “mini”, pages>50 “large”)
        ● Clase pública Book (hija de ReadingMaterial)
        ○ variables privadas: chapters, authors
        ● Clase pública Magazine (hija de ReadingMaterial)
        ○ variable privada: additionalResources
        ● Clase pública Publisher
        ○ variable privadas: id, name, address, telephone, website
        Todas las clases deben incluir constructor y métodos getter y setter
        Crea un objeto un objeto Publisher con el valor de las variables que desees.
        Crea un objeto Book y un objeto Magazine con el valor de las variables que desees, muéstralas en una 
        web php, actualízalas y vuelve a mostrarlas por pantalla.
        Añade las siguientes funcionalidades y prueba los métodos con alguna instancia.
        a- Incluye una función de ordenación utilizando el algoritmo BubbleSort (ordenación de libros 
        por precio ascendente o descendente)
        b- Realiza un método de ordenación por orden alfabético del título.
        c- Ordena por orden alfabético al menos 5 referencias (a introducir en el array de libros o 
        magazines).
        d- Método de búsqueda en el array de libros o magazines por autor.
        e- Método de búsqueda en el array de libros o magazines por título.
    -->
</head>
<body>
    <?php
        abstract class ReadingMaterial{
            private $id;
            private $title;
            private $pages;
            private $price;

            public function __constructor($i,$t,$pag,$pri){
                $this->id=$i;
                $this->title=$t;
                $this->pages=$pag;
                $this->price=$pri;
            }

            public function getId(){
                return $this -> id;
            }
            public function setId($new){
                $this->id=$new;
            }
            public function getTitle(){
                return $this -> title;
            }
            public function setTitle($new){
                $this->title=$new;
            }
            public function getPages(){
                return $this -> pages;
            }
            public function setPages($new){
                $this->pages=$new;
            }
            public function getPrice(){
                return $this -> price;
            }
            public function setPrice($new){
                $this->price=$new;
            }

            abstract public function addIVA();

    
            public function showCategory() {
                if ($this->pages < 50) {
                    return "mini";
                } else {
                    return "large";
                }
            }

        }
        class Book extends ReadingMaterial{
            private $chapters;
            private $authors;

            public function __constructor($i,$t,$pag,$pri,$cha,$aut){
                parent::__construct($i,$t,$pag,$pri);
                $this->authors=$aut;
                $this->chapters=$cha;
            }

            public function getChapters(){
                return $this -> chapters;
            }
            public function setChapters($new){
                $this->chapters=$new;
            }
            public function getAuthors(){
                return $this -> authors;
            }
            public function setAuthors($new){
                $this->authors=$new;
            }

            public function addIVA() {
                $this->setPrice($this->getPrice() * 1.04); 
            }
        }
        class Magazine extends ReadingMaterial{
            private $additionalResources;

            public function __constructor($id, $title, $pages, $price, $editor,$ar){
                parent::__construct($id, $title, $pages, $price, $editor);
                $this->additionalResources=$ar;
            }

            public function getAdditionalResources(){
                return $this -> additionalResources;
            }
            public function setAdditionalResources($new){
                $this->additionalResources=$new;
            }

            public function addIVA() {
                $this->setPrice($this->getPrice() * 1.09); 
            }
        }
        class Publisher{
            private $id;
            private $name;
            private $address;
            private $telephone;
            private $website;

            public function __constructor($i,$n,$ad,$tel,$web){
                $this->id=$i;
                $this->name=$n;
                $this->address=$ad;
                $this->telephone=$tel;
                $this->website=$web;
            }

            public function getId(){
                return $this -> id;
            }
            public function setId($new){
                $this->id=$new;
            }
            public function getName(){
                return $this -> name;
            }
            public function setName($new){
                $this->name=$new;
            }
            public function getAddress(){
                return $this -> address;
            }
            public function setAddress($new){
                $this->address=$new;
            }
            public function getTelephone(){
                return $this -> telephone;
            }
            public function setTelephone($new){
                $this->telephone=$new;
            }
            public function getWebsite(){
                return $this -> website;
            }
            public function setWebsite($new){
                $this->website=$new;
            }
            
        }
        $publicacion = new Publisher(1, "Ejemplo Publicacion", "123", "123-456-7890", "www.ejemplo.com");
        $libro1 = new Book(1, "Libro1", 200, 30.0,  5, "John Doe");
        $libro2 = new Book(2, "Libro2", 100, 10.0, $publicacion, 1, "ana Doe");
        $libro3 = new Book(3, "Libro3", 300, 20.0, $publicacion, 4, "paula Doe");
        $revista = new Magazine(2, "Revista", 40, 5.0, $publicacion, "Online resources");
        $libros = array($libro1, $libro2, $libro3);
        echo $libro;
        echo $revista;
        $libro->addIVA();
        $revista->addIVA();
        echo $libro;
        echo $revista;
        $librosOrdenadosAsc = bubbleSortAscendente($libros);
        echo "Orden por precio ascendente:\n";
        print_r($librosOrdenadosAsc);

        function bubbleSortAscendente($array) {
            $n = count($array);
        
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($array[$j]->precio > $array[$j + 1]->precio) {
                        // Intercambiar elementos si están en el orden incorrecto
                        $temp = $array[$j];
                        $array[$j] = $array[$j + 1];
                        $array[$j + 1] = $temp;
                    }
                }
            }
        
            return $array;
        }

        // Función de ordenación por título alfabéticamente
        function ordenarPorTitulo($array) {
            usort($array, function ($a, $b) {
                return strcmp($a->titulo, $b->titulo);
            });

            return $array;
        }
        function buscarPorAutor($array, $autor) {
            $resultados = array_filter($array, function ($libro) use ($autor) {
                return $libro->autor == $autor;
            });
        
            return $resultados;
        }
        function buscarPorTitulo($array, $titulo) {
            $resultados = array_filter($array, function ($libro) use ($titulo) {
                return $libro->titulo == $titulo;
            });
        
            return $resultados;
        }

    ?>
</body>
</html>