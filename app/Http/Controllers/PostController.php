<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function create(Request $request){
        $new_post = [
            'title' => 'meu primeiro post',
            'content' => 'conteudo qualquer',
            'author' => 'alessandro'
        ];
        $post = new post($new_post);
        dd($post);
    }
}

