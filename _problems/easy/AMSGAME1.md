---
{"category_name":"easy","problem_code":"AMSGAME1","problem_name":"Subtraction Game 1","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"satej ","problem_tester":"gamabunta","date_added":"11-05-2013","tags":{"0":"cakewalk","1":"cook34","2":"gcd","3":"satej"},"editorial_url":"http://discuss.codechef.com/problems/AMSGAME1","time":{"view_start_date":1368988200,"submit_start_date":1368988200,"visible_start_date":1368988200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">Chef is playing a game on a sequence of <b>N</b> positive integers, say <b>A<sub>1</sub>, A<sub>2</sub>, ... A<sub>N</sub></b>. The game is played as follows.</p>
<ul>
<li>If all the numbers are equal, the game ends.</li>
<li>Otherwise
<ul>
<li>Select two numbers which are unequal</li>
<li>Subtract the smaller number from the larger number</li>
<li>Replace the larger number with the result from above (see the explanation section for clarity)</li>
</ul>
</li>
</ul>
<p style="text-align:justify">Chef has already figured out that the game <b>always terminates</b>. He also knows, for a given sequence of integers, the game will always terminate on the <b>same value</b>, no matter how the game is played. Chef wants you to simulate the game for him and tell him on which value will the game terminate for a given sequence of integers.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains an integer <b>T</b>, the number of test cases. Then follow the description of <b>T</b> test cases. The first line of each test case contains a single integer <b>N</b>, the length of the sequence. The second line contains <b>N</b> positive integers, each separated by a single space.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, <b>output a single integer</b> - the value of all the numbers when they are <b>equal</b> (and the game terminates), on a line by itself.</p>
<h3>Constraints</h3>
<p>
<b>1 ≤ T ≤ 100</b><br />
<b>1 ≤ N ≤ 1000</b><br />
<b>1 ≤ A<sub>i</sub> ≤ 10<sup>9</sup></b>
</p>
<h3>Sample</h3>
<pre>
<b>Input</b>
3
2
10 12
2
5 9
3
6 10 15

<b>Output</b>
2
1
1

</pre><h3>Explanation</h3>
<p style="text-align:justify"><b>Test Case 1:</b> Since there are only two numbers, the operations are forced.</p>
<ul>
<li>{ 10, 12 } => Replace 12 with ( 12 - 10 = 2 ) => { 10, 2 }</li>
<li>{ 10, 2 } => Replace 10 with ( 10 - 2 = 8 ) => { 8, 2 }</li>
<li>{ 8, 2 } => Replace 8 with ( 8 - 2 = 6 ) => { 6, 2 }</li>
<li>{ 6, 2 } => Replace 6 with ( 6 - 2 = 4 ) => { 4, 2 }</li>
<li>{ 4, 2 } => Replace 4 with ( 4 - 2 = 2 ) => { 2, 2 }</li>
</ul>
<p style="text-align:justify">The value of all the numbers when the game ends is <b>2</b>.</p>
<p style="text-align:justify"><b>Test Case 2:</b> Since there are only two numbers, the operations are forced.</p>
<ul>
<li>{ 5, 9 } => Replace 9 with ( 9 - 5 = 4 ) => { 5, 4 }</li>
<li>{ 5, 4 } => Replace 5 with ( 5 - 4 = 1 ) => { 1, 4 }</li>
<li>{ 1, 4 } => Replace 4 with ( 4 - 1 = 3 ) => { 1, 3 }</li>
<li>{ 1, 3 } => Replace 3 with ( 3 - 1 = 2 ) => { 1, 2 }</li>
<li>{ 1, 2 } => Replace 2 with ( 2 - 1 = 1 ) => { 1, 1 }</li>
</ul>
<p style="text-align:justify">The value of all the numbers when the game ends is <b>1</b>.</p>
<p style="text-align:justify"><b>Test Case 3:</b> One way to play the game is</p>
<ul>
<li>{ 6, 10, 15 } => Replace 15 with ( 15 - 6 = 9 ) => { 6, 10, 9 }</li>
<li>{ 6, 10, 9 } => Replace 10 with ( 10 - 6 = 4 ) => { 6, 4, 9 }</li>
<li>{ 6, 4, 9 } => Replace 9 with ( 9 - 6 = 3 ) => { 6, 4, 3 }</li>
<li>{ 6, 4, 3 } => Replace 6 with ( 6 - 4 = 2 ) => { 2, 4, 3 }</li>
<li>{ 2, 4, 3 } => Replace 3 with ( 3 - 2 = 1 ) => { 2, 4, 1 }</li>
<li>{ 2, 4, 1 } => Replace 4 with ( 4 - 2 = 2 ) => { 2, 2, 1 }</li>
<li>{ 2, 2, 1 } => Replace first 2 with ( 2 - 1 = 1 ) => { 1, 2, 1 }</li>
<li>{ 1, 2, 1 } => Replace 2 with ( 2 - 1 = 1 ) => { 1, 1, 1 }</li>
</ul>
<p style="text-align:justify">The value of all the numbers when the game ends is <b>1</b>. You may try to play the game differently and observe that <b>the game will always end when all the values are 1</b>.</p>
