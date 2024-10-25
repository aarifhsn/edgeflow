<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\PostResource;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        return PostResource::collection(Post::with('category')->get());
    }
}
