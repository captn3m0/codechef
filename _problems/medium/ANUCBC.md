---
{"category_name":"medium","problem_code":"ANUCBC","problem_name":"Cards, bags and coins","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"white_king","date_added":"15-01-2014","tags":{"0":"anudeep2011","1":"april14","2":"dynamic","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/ANUCBC","time":{"view_start_date":1397468306,"submit_start_date":1397468306,"visible_start_date":1397467741,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/ANUCBC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/ANUCBC.pdf">Russian</a>.</h3>
<h3>Statement</h3>
<p>Yet another game from chef. Chef gives you <b>N</b> cards and <b>M</b> bags. Each of the <b>N</b> cards has an integer written on it. Now chef asks you to close your eyes and choose a subset of them. He then sums the numbers written on chosen cards, takes its absolute value and gives you those many coins. You win the game if you can divide these coins into <b>M</b> bags with each bag having equal share. As a first step to calculate the probability of winning, you would like to know the <b>number of different subsets which will make you win</b>. Note that all the cards are of different color, so even if 2 cards have the same number written on it, they are still considered as different cards.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
First line of each test case contains two integers <b>N</b> and <b>Q</b>. <b>Q</b> denotes the number of queries to be answered. Second line of each test case contains <b>N</b> integers, the numbers written on cards.<br />
Following <b>Q</b> lines contain an integer <b>M</b>.</p>
<h3>Output</h3>
<p>For each query output the required Answer modulo <b>1000000009</b>. Answer is the number of subsets that will ensure you win.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>30</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>100</b></li>
<li><b>-10^9</b> ≤ <b>Number on card</b> ≤ <b>10^9</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
2
5 1
1 2 -1 4 5
9
5 2
1 2 3 4 5
5
15

<b>Output</b>
4
8
2
</pre><h3>Explanation</h3>
<p><b>Test Case #1, Query #1</b><br />
{}, {1,-1}, {1,-1,4,5}, {4,5} are winning subsets. Sums are 0, 0, 9, 9 respectively.</p>
<p><b>Test Case #2, Query #1</b><br />
{}, {5}, {1,4}, {2,3}, {1,4,5}, {2,3,5}, {1,2,3,4}, {1,2,3,4,5} are winning subsets. Sums are 0, 5, 5, 5, 10, 10, 10, 15 respectively.</p>
<p><b>Test Case #2, Query #2</b><br />
{}, {1,2,3,4,5} are winning subsets. Sums are 0 and 15 respectively.</p>
<h3>Author's Note</h3>
<p>Time Limit is not very strict (Yes, not very loose either) if correct Algorithm is used.Author's solution passes with 2 sec Time Limit (C++ solution, using scanf and printf).<br />
Maximum Input File Size &lt; 4MB.
</p>
