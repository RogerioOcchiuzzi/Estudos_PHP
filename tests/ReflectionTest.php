<?php

require_once 'ReflectionEditor.php';
require_once 'ReflectionArticle.php';
 
class ReflectionTest {
 
    function testItCanReflect() {
        $editor = new ReflectionEditor('John Doe');
        $tuts = new ReflectionArticle();

        //$tuts->publishNextArticle($editor);

        $reflector = new ReflectionClass($editor);

        $editorName = $reflector->getProperty('name');
        $editorName->setAccessible(true);

        //duas maneira diferentes de acessar a mesma variavel
        //a primeira é usando reflections diretamente
        var_dump($editorName->getValue($editor)); 

        //a segunda é usando funções que usan 
        //reflections indiretamente
        var_dump(call_user_func(array($editor, 'getEditorName')));

        $editorName->setValue($editor, 'Mark Twain');
        var_dump($editorName->getValue($editor)); 

        //$publishMethod = $reflector->getMethod('publish');
        //$publishMethod->invoke($editor); //call to publish()

        //var_dump($reflector->getMethods());
    }
 
}

$Rt = new ReflectionTest();
$Rt->testItCanReflect();