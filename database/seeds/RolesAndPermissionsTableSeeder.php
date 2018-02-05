<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $createUser = new Permission();
        $createUser->name         = 'crear-usuario';
        $createUser->display_name = 'Crear Usuarios'; //Opcional
        $createUser->description  = 'Crear nuevos usuarios'; //Opcional
        $createUser->save();

        $editUser = new Permission();
        $editUser->name         = 'modificar-usuario';
        $editUser->display_name = 'Modificar Usuarios'; //Opcional
        $editUser->description  = 'Modificar usuarios'; //Opcional
        $editUser->save();

        $deleteUser = new Permission();
        $deleteUser->name         = 'eliminar-usuario';
        $deleteUser->display_name = 'Eliminar Usuarios'; //Opcional
        $deleteUser->description  = 'Eliminar usuarios'; //Opcional
        $deleteUser->save();

        $createRol = new Permission();
        $createRol->name         = 'crear-rol';
        $createRol->display_name = 'Crear Roles'; //Opcional
        $createRol->description  = 'Crear nuevos roles'; //Opcional
        $createRol->save();

        $editRol = new Permission();
        $editRol->name         = 'modificar-rol';
        $editRol->display_name = 'Modificar Roles'; //Opcional
        $editRol->description  = 'Modificar roles'; //Opcional
        $editRol->save();

        $deleteRol = new Permission();
        $deleteRol->name         = 'eliminar-rol';
        $deleteRol->display_name = 'Eliminar Roles'; //Opcional
        $deleteRol->description  = 'Eliminar roles'; //Opcional
        $deleteRol->save();

        $createSlider = new Permission();
        $createSlider->name         = 'crear-slider';
        $createSlider->display_name = 'Crear Slider'; //Opcional
        $createSlider->description  = 'Crear nuevo Slider'; //Opcional
        $createSlider->save();

        $editSlider = new Permission();
        $editSlider->name         = 'modificar-slider';
        $editSlider->display_name = 'Modificar Slider'; //Opcional
        $editSlider->description  = 'Modificar Slider'; //Opcional
        $editSlider->save();

        $deleteSlider = new Permission();
        $deleteSlider->name         = 'eliminar-slider';
        $deleteSlider->display_name = 'Eliminar Slider'; //Opcional
        $deleteSlider->description  = 'Eliminar Slider'; //Opcional
        $deleteSlider->save();

        $createPost = new Permission();
        $createPost->name         = 'crear-post';
        $createPost->display_name = 'Crear Post'; //Opcional
        $createPost->description  = 'Crear nuevo post'; //Opcional
        $createPost->save();

        $editPost = new Permission();
        $editPost->name         = 'modificar-post';
        $editPost->display_name = 'Modificar Post'; //Opcional
        $editPost->description  = 'Modificar Post'; //Opcional
        $editPost->save();

        $deletePost = new Permission();
        $deletePost->name         = 'eliminar-post';
        $deletePost->display_name = 'Eliminar Post'; //Opcional
        $deletePost->description  = 'Eliminar post'; //Opcional
        $deletePost->save();

        $createProduct = new Permission();
        $createProduct->name         = 'crear-producto';
        $createProduct->display_name = 'Crear Producto'; //Opcional
        $createProduct->description  = 'Crear nuevo Producto'; //Opcional
        $createProduct->save();

        $editProduct = new Permission();
        $editProduct->name         = 'modificar-producto';
        $editProduct->display_name = 'Modificar Producto'; //Opcional
        $editProduct->description  = 'Modificar Producto'; //Opcional
        $editProduct->save();

        $deleteProduct = new Permission();
        $deleteProduct->name         = 'eliminar-producto';
        $deleteProduct->display_name = 'Eliminar Producto'; //Opcional
        $deleteProduct->description  = 'Eliminar Producto'; //Opcional
        $deleteProduct->save();

        $createContact = new Permission();
        $createContact->name         = 'crear-contacto';
        $createContact->display_name = 'Crear Contacto'; //Opcional
        $createContact->description  = 'Crear nuevo Contacto'; //Opcional
        $createContact->save();

        $editContact = new Permission();
        $editContact->name         = 'modificar-contacto';
        $editContact->display_name = 'Modificar Contacto'; //Opcional
        $editContact->description  = 'Modificar Contacto'; //Opcional
        $editContact->save();

        $deleteContact = new Permission();
        $deleteContact->name         = 'eliminar-contacto';
        $deleteContact->display_name = 'Eliminar Contacto'; //Opcional
        $deleteContact->description  = 'Eliminar Contacto'; //Opcional
        $deleteContact->save();

        $createCategory = new Permission();
        $createCategory->name         = 'crear-categoria';
        $createCategory->display_name = 'Crear Categoria'; //Opcional
        $createCategory->description  = 'Crear nuevo Categoria'; //Opcional
        $createCategory->save();

        $editCategory = new Permission();
        $editCategory->name         = 'modificar-categoria';
        $editCategory->display_name = 'Modificar Categoria'; //Opcional
        $editCategory->description  = 'Modificar Categoria'; //Opcional
        $editCategory->save();

        $deleteCategory = new Permission();
        $deleteCategory->name         = 'eliminar-categoria';
        $deleteCategory->display_name = 'Eliminar Categoria'; //Opcional
        $deleteCategory->description  = 'Eliminar Categoria'; //Opcional
        $deleteCategory->save();

        $deleteComment = new Permission();
        $deleteComment->name         = 'eliminar-comentario';
        $deleteComment->display_name = 'Eliminar Comentario'; //Opcional
        $deleteComment->description  = 'Eliminar Comentario'; //Opcional
        $deleteComment->save();

        $deleteReview = new Permission();
        $deleteReview->name         = 'eliminar-reseña';
        $deleteReview->display_name = 'Eliminar Reseña'; //Opcional
        $deleteReview->description  = 'Eliminar Reseña'; //Opcional
        $deleteReview->save();
       

        $role = new Role();
        $role->name         = 'admin';
        $role->display_name = 'Usuario Administrador'; //Opcional
        $role->description  = 'Administrador del sistema'; //Opcional
        $role->save();

        $role->givePermissionTo('crear-usuario');
        $role->givePermissionTo('modificar-usuario');
        $role->givePermissionTo('eliminar-usuario');
        $role->givePermissionTo('crear-rol');
        $role->givePermissionTo('modificar-rol');
        $role->givePermissionTo('eliminar-rol');
        $role->givePermissionTo('crear-slider');
        $role->givePermissionTo('modificar-slider');
        $role->givePermissionTo('eliminar-slider');
        $role->givePermissionTo('crear-post');
        $role->givePermissionTo('modificar-post');
        $role->givePermissionTo('eliminar-post');
        $role->givePermissionTo('crear-producto');
        $role->givePermissionTo('modificar-producto');
        $role->givePermissionTo('eliminar-producto');
        $role->givePermissionTo('crear-contacto');
        $role->givePermissionTo('modificar-contacto');
        $role->givePermissionTo('eliminar-contacto');
        $role->givePermissionTo('crear-categoria');
        $role->givePermissionTo('modificar-categoria');
        $role->givePermissionTo('eliminar-categoria');
        $role->givePermissionTo('eliminar-comentario');
        $role->givePermissionTo('eliminar-reseña');


        $role = new Role();
        $role->name         = 'usuario';
        $role->display_name = 'Usuario'; //Opcional
        $role->description  = 'Usuario Comun'; //Opcional
        $role->save();

        $role->givePermissionTo('crear-post');
    }
}
