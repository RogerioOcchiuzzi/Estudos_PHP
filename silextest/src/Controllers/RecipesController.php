<?php

namespace CookBook\Controllers;

class Recipes {

    public function getNewForm(Application $app): string {

        return $app['twig']->render('new_recipe.twig');
    }

    public function create(Application $app, Request $request): string {

        $params = $request->request->all();
        $errors = [];

        if (empty($params['name'])) {
            $errors[] = 'Name cannot be empty.';
        }

        if (empty($params['ingredients'])) {
            $errors[] = 'Ingredients cannot be empty.';
        }

        if (empty($params['instructions'])) {
            $errors[] = 'Instructions cannot be empty.';
        }

        if ($params['time'] <= 0) {
            $errors[] = 'Time has to be a positive number.';
        }

        if (!empty($errors)) {
            $params = array_merge($params, ['errors' => $errors]);
            return $app['twig']->render('new_recipe.twig', $params);
        }

        $sql = 'INSERT INTO recipes (name, ingredients, instructions, time) '
            . 'VALUES(:name, :ingredients, :instructions, :time)';
        $result = $app['db']->executeUpdate($sql, $params);

        if (!$result) {
            $params = array_merge($params, ['errors' => $errors]);
            return $app['twig']->render('new_recipe.twig', $params);
        }

        return $app['twig']->render('home.twig');
    }
    public function getAll(Application $app): string {

        $recipes = $app['db']->fetchAll('SELECT * FROM recipes');

        return $app['twig']->render('home.twig',['recipes' => $recipes]);
    }
}