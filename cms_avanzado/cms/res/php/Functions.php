<?php
    require 'init.php';

    class User_Actions{
        public function getRecentPosts(){
            global $database;

            $posts = $database->select("posts", [
                 "[>]categories" => ["category_Id" => "category_Id"]
            ],[
                "posts.post_Id",
                "posts.name",
                "posts.img_post",
                "posts.created_at",
                "categories.category"
            ], [
                "ORDER" => ["posts.post_Id" => "DESC"],
                "LIMIT" => "30"
            ]);

            return $posts;
        }

        public function getPostInfo($post_Id){
            global $database;

            $posts = $database->select("posts", [
                "[>]categories" => ["category_Id" => "category_Id"]
            ],[
                "posts.name",
                "posts.body",
                "posts.img_post",
                "posts.created_at",
                "categories.category"
            ], [
                "posts.post_Id" => $post_Id
            ]);

            return $posts;
        }
    }

    class Admin_Actions{
        public function logIn($username_email, $pass){
            global $database;

            $data = $database -> select("admins", [
                "password"
            ],[
                "OR" => [
                    "username" => $username_email,
                    "email" => $username_email
                ]
            ]);

            $password_db = $data[0]["password"];

            
            if(password_verify($pass, $password_db)){
                return true;
            }else{
                return false;
            }
        }

        public function getProfile($email){
            global $database;

            $admin = $database-> select("admins" , [
                "admin_Id",
                "username" 
            ], [
                "email" => $email
            ]);
            return $admin;
        }
        public function getCategories(){
            global $database;

            $categories = $database-> select("categories" , [
                "category_Id",
                "category" 
            ]);
            return $categories;
        }

        public function getRecentPosts(){
            global $database;

            $posts = $database->select("posts", [
                 "[>]categories" => ["category_Id" => "category_Id"]
            ],[
                "posts.post_Id",
                "posts.name",
                "posts.img_post",
                "posts.created_at",
                "categories.category"
            ], [
                "ORDER" => ["posts.post_Id" => "DESC"],
                
            ]);

            return $posts;
        }

        public function saveCategory($category){
            global $database;

            $database -> insert("categories", [
                "category" => htmlentities($category) 
            ]);
            return $database->id();
        }

        public function deleteCategory($category_Id){
            global $database;

            $delete = $database -> delete("categories", [
                "category_Id" => $category_Id
            ]);
            return $delete->rowCount();
        }
        
        public function savePost($name, $category_Id, $description, $name_img, $admin_Id){
            global $database;

            $database -> insert("posts", [
                "name" => htmlentities($name), 
                "body" => $description, 
                "img_post"    => $name_img,
                "category_Id" => htmlentities($category_Id), 
                "admin_Id"    => $admin_Id, 
                "created_at"  => time()
            ]);
            return $database->id();
        }
    }
?>