<?php

use App\models\Business;
use App\models\Category;
use App\models\FinCap;
use App\models\Issue;
use App\models\IssueStory;
use App\models\Newsletter;
use App\models\Role;
use App\models\Status;
use App\models\Story;
use App\models\Subscription;
use App\models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Default Laravel Welcome view...
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    //echo "";
    echo "<h1>Laravel Route Testing</h1>";
    echo "<br>";
    // echo "Retrieving a newsletter with an ID of 1:";
    // echo "<br>";
    // $newsletter_1 = Newsletter::find(1);
    // echo $newsletter_1;
    // echo "<hr>";
    // echo "Retrieving an issue with an ID of 1:";
    // echo "<br>";
    // $issue_1 = Issue::find(1);
    // echo $issue_1;
    // echo "<hr>";
    // echo "Retrieving a story with an ID of 1:";
    // echo "<br>";
    // $story_1 = Story::find(1);
    // echo $story_1;
    // echo "<hr>";

    // Lista de todos los usuarios para los 4 roles, ordenada por fecha de creacion.
    echo "<b>Obtener todos los usuarios para todos los roles ordenada por fecha de creacion:</b>";
    echo "<br>";
    $usersAll = User::with('role')->orderBy('created_at')->get();
    foreach ($usersAll as $user) {
        echo $user->name . " - " . $user->created_at . " - " . $user->role->description; 
        echo "<br>";
    }
    echo "<hr>";

    // Lista de todos los usuarios ordenada por fecha de creacion y filtrados por el rol de suscriptor.
    echo "<b>Obtener todos los usuarios por fecha de creacion por filtrado por rol (suscriptor):</b>";
    echo "<br>";
    $usersSub = User::with('role')->orderBy('created_at')->get()->where('role.description', 'Suscriptor');
    foreach($usersSub as $user) {
        echo $user->name . " - " . $user->created_at . " - " . $user->role->description; 
        echo "<br>";
    }
    echo "<hr>";

    // Lista de todos los usuarios ordenada por fecha de creacion y filtrados por al rol de suscriptor, ademas de mostrar su referral score.
    echo "<b>Obtener todos los usuarios por fecha de creacion por filtrado por rol (suscriptor) incluyendo su referral score:</b>";
    echo "<br>";
    $usersSubScore = User::with('role')->orderBy('created_at')->get()->where('role.description', 'Suscriptor');
    foreach($usersSubScore as $user) {
        echo $user->name . " - " . $user->created_at . " - " . $user->role->description . " -       Referral score -> " . $user->referral_score; 
        echo "<br>";
    }
    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // Lista de suscriptores por fecha
    echo "<b>Lista de suscriptores por fecha:</b>";
    echo "<br>";
    //$subsByDate = Subscription::all()->sortBy('created_at');
    $subsByDate = Subscription::orderBy('created_at')->get();
    foreach ($subsByDate as $sub) {

        echo "Newsletter name: " . $sub->newsletter->name . ", Subscriber: " . $sub->user->name . ", Created at: " . $sub->created_at;
        echo "<br>";
    }
    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // Lista de todos los newsletters ordenados del mas nuevo al mas viejo
    echo "<b>Lista de newsletters del mas nuevo al mas viejo:</b>";
    echo "<br>";
    $newslettersAllDesc = Newsletter::orderBy('created_at', 'DESC')->get();
    foreach ($newslettersAllDesc as $newsletter) {
        echo "Nombre: " . $newsletter->name;
        echo "<br>";
        echo "Descripcion: " . $newsletter->description;
        echo "<br>";
        echo "Fecha de creacion: " . $newsletter->created_at;
        echo "<br>";
        echo "<br>";
    }
    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // Lista de los issues de un newsletter (4) ordenada por fecha de creacion
    echo "<b>Lista de todos los issues del newsletter 4, ordenada por fecha de creacion (tambien existe release_date, no se esta filtrando por esta pero se puede):</b>";
    echo "<br>";
    $issuesNewsletter4 = Issue::orderBy('created_at', 'DESC')->get()->where('newsletter_id', 4);
    foreach ($issuesNewsletter4 as $issue) {
        echo "Issue: " . $issue->name;
        echo "<br>";
        echo "Contenido (abstract): " . $issue->content;
        echo "<br>";
        echo "Fecha de creacion: " . $issue->created_at;
        echo "<br>";
        echo "<br>";
    }
    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // Lista de stories de un issue (7) ordenadas por 'order'
    echo "<b>Lista de stories de un issue (7) ordenadas por 'order': </b>";
    echo "<br>";
    $issue7Stories = IssueStory::orderBy('order', 'ASC')->get()->where('issue_id', 7);
    foreach ($issue7Stories as $story) {
        echo "Issue: " . $story->issue->name . " |> " . $story->issue->content;
        echo "<br>";
        echo "Story: " . $story->story->title . " |> " . $story->story->content;
        echo "<br>";
        echo "Orden: " . $story->order;
        echo "<br>"; 
        echo "<br>"; 
    }
    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // OBTENER LISTA DE STORIES (PAGINATION 25), ORDENADAS DE MÁS NUEVAS A MÁS VIEJAS
    echo "<h2><b>Lista de stories con pagination 25 ordenadas de las mas nuevas a las mas viejas</b></h2>";
    echo "<br>";
    $allStoriesPag25 = Story::orderBy('created_at', 'DESC')->paginate(25);
    

    $html = view('allStories', ['allStoriesPag25' => $allStoriesPag25])->render();
    echo $html;


    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // OBTENER LA LISTA DE STORIES (PAGINATION 25), ORDENADAS DE MÁS NUEVAS A MÁS VIEJAS, CON FILTRO POR ESTATUS
    echo "<h2><b>Lista de stories con pagination 25 ordenadas de las mas nuevas a las mas viejas con filtro por estatus(2, nueva/Historia nueva):</b></h2>";
    echo "<br>";
    $allStoriesPag25 = Story::orderBy('created_at', 'DESC')->where('status_id', 2)->paginate(25);
    

    $html = view('allStories', ['allStoriesPag25' => $allStoriesPag25])->render();
    echo $html;


    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // OBTENER LISTA BUSINESS (PAGINATION 25) POR NOMBRE DE A-Z
    echo "<h2><b>Lista de businesses con pagination 25 ordenadas por nombre A-Z:</b></h2>";
    echo "<br>";
    $allBizPg25 = Business::orderBy('name', 'ASC')->paginate(25);
    

    $html = view('allBusinesses', ['businesses' => $allBizPg25])->render();
    echo $html;


    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // OBTENER LISTA DE FIN_CAPS (PAGINATION 25) DE MÁS NUEVA A MÁS VIEJA
    echo "<h2><b>Lista de fin caps de la mas nueva a la mas vieja:</b></h2>";
    echo "<br>";
    $allFinCaps25 = FinCap::orderBy('created_at', 'DESC')->paginate(25);
    

    $html = view('allFinCaps', ['fincaps' => $allFinCaps25])->render();
    echo $html;


    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // OBTENER TODAS LAS CATEGORIAS
    echo "<b>Obtener una lista con todas las categorias: </b>";
    echo "<br>";
    $allCategories = Category::get();
    foreach ($allCategories as $category) {
        echo "Categoria: " . $category->name;
        echo "<br>";
        echo "Descripcion: " . $category->description;
        echo "<br>";
        echo "Palabras clave: " . $category->keywords;
        echo "<br>";
        echo "<br>";
    }
    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // OBTENER TODOS LOS ESTATUS TIPO “STORY_STATUS”
    echo "<b>Obtener todos los estatus del tipo \"STORY_STATUS\" (type): </b>";
    echo "<br>";
    $storyStatuses = Status::get()->where('type', 'STORY_STATUS');
    foreach ($storyStatuses as $status ) {
        echo "Name: " . $status->name;
        echo "<br>";
        echo "Display Name: " . $status->display_name;
        echo "<br>";
        echo "Description: " . $status->description;
        echo "<br>";
        echo "Class: " . $status->class;
        echo "<br>";
        echo "Type: " . $status->type;
        echo "<br>";
        echo "<br>";
    }
    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // OBTENER UNA STORY 
    echo "<b>Obtener una story: </b>";
    echo "<br>";
    $story1 = Story::where('id', 1)->first();
    //echo $story1;
    echo $story1->title;
    echo "<br>";
    echo "Por " . "<i>" . $story1->author . "</i>";
    echo "<br>";
    echo $story1->content;
    echo "<br>";
    echo "<br>";
    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // OBTENER TODOS LOS ESTATUS TIPO "FIN_CAP_STATUS"
    echo "<b>Obtener todos los estatus del tipo \"FIN_CAP_STATUS\" (type): </b>";
    echo "<br>";
    $storyStatuses = Status::get()->where('type', 'FIN_CAP_STATUS');
    foreach ($storyStatuses as $status ) {
        echo "Name: " . $status->name;
        echo "<br>";
        echo "Display Name: " . $status->display_name;
        echo "<br>";
        echo "Description: " . $status->description;
        echo "<br>";
        echo "Class: " . $status->class;
        echo "<br>";
        echo "Type: " . $status->type;
        echo "<br>";
        echo "<br>";
    }
    echo "<hr>";

    echo "<br>";
    echo "<br>";
    echo "<br>";
});
