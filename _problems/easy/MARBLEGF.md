---
{"category_name":"easy","problem_code":"MARBLEGF","problem_name":"Funny Marbles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kuruma","problem_tester":"gerald","date_added":"4-11-2013","tags":{"0":"dec13","1":"easy","2":"kuruma"},"editorial_url":"http://discuss.codechef.com/problems/MARBLEGF","time":{"view_start_date":1387186200,"submit_start_date":1387186200,"visible_start_date":1387186200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/MARBLEGF.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/MARBLEGF.pdf">Russian</a>.</h3>
<h3>Story-line</h3>
<p>Lira loves marbles very much and she especially loves to play with them with her school friends.</p>
<p>Today, Lira is very excited, as her mom said she would give her and her friends some new marbles for her to play with. She immediately requested her mom to give her the new marbles, but, her mom had some tricks kept up her sleeve:</p>
<p>Mom: "Not so fast, young girl!! These won't come for free! If you want to keep playing with them, you must prove you deserve them!!"</p>
<p>Lira: *<b>moans</b>* "Alright, mom, what do I have to do now?"</p>
<p>(Yes, Lira's mom can be quite annoying)</p>
<p>Mom: "Well, you can assume that I have an array A of size <b>N</b> , where <b>N</b> is the total number of students I will give marbles to, and A[i] is the number of marbles each student initially has."</p>
<p>Lira: *<b>smiles slightly</b>* "So you're feeling generous hum?"</p>
<p>Mom: "Well, not too generous... imagine I wanted to give more marbles to some of your school friends who do well on their exams, or, on the other hand take away some marbles from the greedier friends."</p>
<p>Lira: "Mom, c'mon that's too easy!!"</p>
<p>Mom: "Alright, so given a group of students, starting on student <b>i</b> and ending on student <b>j</b>, I want to know how many marbles they have together!"</p>
<p>Well, it turns out that Lira actually did solve this problem and she did it very efficiently!!</p>
<p>It's now your turn to solve the problem that Lira already did in a brilliant way!</p>
<h3>Formal description:</h3>
<p>Lira is given array <b>A</b>, which contains elements between 1000 and 2000.</p>
<p>Three types of queries can be performed on this array: add a given value to a single element on it, subtract a given value from a single element on it and find the sum of the values between indexes i and j, i.e. A[i]+...+A[j]. Check input and example section for details.</p>
<h3>Input</h3>
<p>The first line of the input contains two integers: <b>N</b> and <b>Q</b>, denoting respectively, the number of students that there are present to receive the marbles as a gift and the number of actions Lira's mom will perform.</p>
<p>These actions can be of three different types:</p>
<li><b>S i j</b> - if the mom wants to find the sum of the number of marbles from students i to j.</li>
<li><b>G i num_marbles</b> - if the mom decides to give num_marbles to student i</li>
<li><b>T i num_marbles</b> - if the mom decides to take away num_marbles from student i</li>
<h3>Output</h3>
<p>The output should contain as many lines as the number of queries S and it should contain the answer for each query on a separate line</p>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1000000</b></li>
<li><b>3</b> ≤ <b>Q</b> ≤ <b>50000</b></li>
<li><b>The array is 0-indexed.</b></li>
<li><b>1000</b> ≤ <b>A[i]</b> ≤ <b>2000</b></li>
<li><b>A student can never have a negative value of marbles. (i.e. there's no data which can cause a student to have a negative value of marbles)</b></li>
<li><b>0</b> ≤ <b>i, j</b> ≤ <b>N-1</b>, and <b>i</b> ≤ <b>j</b> for the sum query</li>
<li><b>At any given time, it is assured that the maximum number of marbles each student can have (<b>num_marbles</b>) never exceeds the size of the int data type.</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<p>5 3
1000 1002 1003 1004 1005
S 0 2
G 0 3
S 0 2

<b>Output:</b>
3005
3008
</p></pre>