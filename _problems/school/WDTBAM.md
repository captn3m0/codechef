---
{"category_name":"school","problem_code":"WDTBAM","problem_name":"Who dares to be a millionaire","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"eartemov","problem_tester":null,"date_added":"20-07-2015","tags":{"0":"ad","1":"cakewalk","2":"eartemov","3":"oct15"},"editorial_url":"http://discuss.codechef.com/problems/WDTBAM","time":{"view_start_date":1444642200,"submit_start_date":1444642200,"visible_start_date":1444642200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/mandarin/WDTBAM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/russian/WDTBAM.pdf">Russian</a> </h3>


<p>Chef is going to participate in a new quiz show: "Who dares to be a millionaire?"</p>
<p>According to the rules of the game, contestants must answer <b>N</b> questions. The quiz being famous for its difficulty, each question has <b>26</b> candidate answers, but only one of which is correct. Answers are denoted by capital Latin letters from A to Z. Chef knows all the questions that can be asked, and for each of them he knows the answer candidate he will choose (some of them can be incorrect). For each question, we'll tell you Chef's answer to it.</p>
The game goes on as follows. First, all the questions are shuffled randomly. Then, a contestant is asked these questions one-by-one in the new shuffled order. If the contestant answers any question incorrectly, the game is over. Total winnings of the contestant are calculated as follows. Let <b>X</b> denote the number of questions answered correctly by the contestant. Depending on this value, the winnings are determined: <b>W<sub>0</sub></b> dollars is the amount won for <b>X = 0</b>, <b>W<sub>1</sub></b> dollars is for <b>X = 1</b>, and so on till <b>X = N</b>. Note that the game was invented by a twisted mind, and so a case where <b>W<sub>i</sub></b> ≥ <b>W<sub>i + 1</sub></b> for some <b>0</b> ≤ <b>i</b> ≤ <b>N − 1</b> is possible.</p>
<p>Chef is interested in finding the maximum possible winnings that he can amass.</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The  description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of questions.</p>
<p>Next line contains <b>N</b> capital Latin letters denoting the correct answers to these questions.</p>
<p>Next line contains <b>N</b> capital Latin letters denoting answers given by Chef to these questions.</p>
<p>Next line contains <b>N + 1</b> space-separated integers <b>W<sub>0</sub></b>, <b>W<sub>1</sub></b>, ..., <b>W<sub>N</sub></b> denoting the winnings for <b>0</b>, <b>1</b>, ..., <b>N</b> correct answers.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the value of maximum possible winnings that Chef can get.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>0</b> ≤ <b>W<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask 1: (20 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>8</b></li>
</ul>
<p><b>Subtask 2: (80 points)</b></p>
<ul>
<li>Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
5
ABCDE
EBCDA
0 10 20 30 40 50
4
CHEF
QUIZ
4 3 2 1 0
8
ABBABAAB
ABABABAB
100 100 100 100 100 100 100 100 100</tt>

<b>Output:</b>
<tt>30
4
100</tt>

</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> If questions will be placed in order: <b>2<sup>nd</sup></b> (Chef's answer is B, which is correct), <b>3<sup>rd</sup></b> (Chef's answer is C, and it is correct as well), <b>4<sup>th</sup></b> (Chef's answer is D, and he is right), <b>5<sup>th</sup></b> (Chef's answer is A but correct answer is E and the game is over), <b>1<sup>st</sup></b>, Chef will correctly answer <b>3</b> questions, and therefore win <b>30</b> dollars.</p>
<p><b>Example case 2.</b> Chef's answers for all questions are incorrect, so his winnings are <b>W<sub>0</sub></b> dollars.</p>
<p><b>Example case 3.</b> Since all <b>W<sub>i</sub></b> are equal to <b>100</b> dollars, Chef will win this sum in any possible case.</p>
