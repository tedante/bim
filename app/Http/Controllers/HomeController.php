<?php
/**
 * Indikator ditampilkan
 * Tingkat kesulitan hrs sama
 * Maksimalkan di ilustrasi
 * Ada evaluasi
 * Variasi tampilan
 */
namespace App\Http\Controllers;

use App\User;
use App\Question;
use App\Answer;
use App\Result;
use Illuminate\Support\Facades\DB;
use App\QuestionsOption;
use Illuminate\Http\Request;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd (Auth::user()->role_id);
        if (Auth::user()->role_id == 1) {
            return view('admin.home');
        } else {
            return view('home');
        }
    }

    public function resultStore(Request $request)
    {
        // dd($request);
        $anwer = QuestionsOption::find($request->input('option_id'));
        $user = User::find($request->input('user_id'));
        // dd($anwer->correct);
        if ($anwer->correct) {
            Answer::create([
                'user_id' => $request->user_id,
                'question_id' => $request->question_id,
                'option_id' => $request->input('option_id'),
                'correct' => $anwer->correct,
                'name' => $user->name
            ]);
            return view('step1');
        } else {
            return redirect()->back();
        }
        
    }

    public function step1()
    {
        return view('step1');
    }

    public function challenge()
    {
        
        $questions = Question::inRandomOrder()->get();

        // return view('quiz', compact('questions'));
        // $questions = DB::table('questions')->inRandomOrder()->Paginate(1);
        foreach ($questions as $question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
            $answer = $question->options;
        }
        //using pagination method
        // dd($answer);
        return view('quiz', ['questions' => $questions, 'options' => $answer]);
    }
    public function challengeStore(Request $request)
    {
        
         // dd(Auth::user()->name);
         $i = 0;
         // dd($request->option_id[4]);
         foreach($request->question_id as $item) {

            // print_r($item);
            // die();
            $anwer = QuestionsOption::find($request->option_id[$i]);
            $user = User::find($request->input('user_id'));
            Answer::create([
                'user_id' => $request->user_id,
                'question_id' => $item,
                'option_id' => $request->option_id[$i],
                'correct' => $anwer->correct,
                'name' => $user->name
            ]);
            
         }
            return view('home');
        
    }

    public function ranking()
    {
        // $poin = Answer::get()->where('user_id', '=', Auth::user()->id)->sum('correct');
        // dd($poin);
        $poin = DB::select('SELECT name, SUM(correct) AS points FROM answers GROUP BY user_id ORDER BY points DESC');
        // dd($poin);
        return view('ranking', ['users' => $poin]);
    }

    public function step1item1()
    {
        return view('step1item1');
    }

    public function step1item2()
    {
        return view('step1item2');
    }

    public function step1item3()
    {
        return view('step1item3');
    }

    public function step1item1question1()
    {
        $question = Question::find(6);
        return view('itemQuestion', ['question' => $question]);
    }

    public function step1item2question1()
    {
        $question = Question::find(7);
        return view('itemQuestion', ['question' => $question]);
    }

    public function step1item3question1()
    {
        $question = Question::find(8);
        return view('itemQuestion', ['question' => $question]);
    }
}
