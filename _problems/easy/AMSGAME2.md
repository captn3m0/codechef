---
{"category_name":"easy","problem_code":"AMSGAME2","problem_name":"Subtraction Game 2","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"satej ","problem_tester":"gamabunta","date_added":"11-05-2013","tags":{"0":"cook34","1":"dynamic","2":"satej","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/AMSGAME2","time":{"view_start_date":1368988200,"submit_start_date":1368988200,"visible_start_date":1368988200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">Chef is playing a game on a sequence of <b>N</b> positive integers, say <b>A<sub>1</sub>, A<sub>2</sub>, ... A<sub>N</sub></b>. The game is played as follows.</p>
<ul>
<li>If all the numbers are equal, the game ends.</li>
<li>Otherwise
<ul>
<li>Select two numbers which are unequal</li>
<li>Subtract the smaller number from the larger number</li>
<li>Replace the larger number with the result from above</li>
</ul>
</li>
</ul>
<p style="text-align:justify">Chef has already figured out that the game <b>always terminates</b>. He also knows, for a given sequence of integers, the game will always terminate on the <b>same value</b>, no matter how the game is played. Chef wants you to simulate the game for him and tell him if the game terminates on <b>1</b>.</p>
<p style="text-align:justify">In fact, there may be many such games. Given a sequence of integers Chef wants to know the number of <b>sub-sequences</b> of the given sequence, for which, playing the above game on the subsuquence will terminate on <b>1</b>. A <b>sub-sequence</b> can be obtained from the original sequence by <b>deleting 0 or more</b> integers from the original sequence. See the explanation section for clarity.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains an integer <b>T</b>, the number of test cases. Then follow the description of <b>T</b> test cases. The first line of each test case contains a single integer <b>N</b>, the length of the sequence. The second line contains <b>N</b> positive integers, each separated by a single space.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, <b>output a single integer</b> - the number of <b>sub-sequences</b> of the original sequence, such that, playing the game on the <b>sub-sequence</b> results in ending the game with all the values equal to <b>1</b>.</p>
<h3>Constraints</h3>
<p>
<b>1 ≤ T ≤ 100</b><br />
<b>1 ≤ N ≤ 60</b><br />
<b>1 ≤ A<sub>i</sub> ≤ 10<sup>4</sup></b><br />
<b>All A<sub>i</sub> will be distinct.</b>
</p>
<h3>Sample</h3>
<pre>
<b>Input</b>
3
4
2 3 5 7
4
3 4 8 16
3
6 10 15

<b>Output</b>
11
7
1

</pre><h3>Explanation</h3>
<p style="text-align:justify"><b>Test Case 1:</b> The following 11 sub-sequences are counted.</p>
<ul>
<li>{ 2, 3 }</li>
<li>{ 2, 5 }</li>
<li>{ 2, 7 }</li>
<li>{ 3, 5 }</li>
<li>{ 3, 7 }</li>
<li>{ 5, 7 }</li>
<li>{ 2, 3, 5 }</li>
<li>{ 2, 3, 7 }</li>
<li>{ 2, 5, 7 }</li>
<li>{ 3, 5, 7 }</li>
<li>{ 2, 3, 5, 7 }</li>
</ul>
<p style="text-align:justify"><b>Test Case 2:</b> The following 7 sub-sequences are counted.</p>
<ul>
<li>{ 3, 4 }</li>
<li>{ 3, 8 }</li>
<li>{ 3, 16 }</li>
<li>{ 3, 4, 8 }</li>
<li>{ 3, 4, 16 }</li>
<li>{ 3, 8, 16 }</li>
<li>{ 3, 4, 8, 16 }</li>
</ul>
<p style="text-align:justify"><b>Test Case 3:</b> There are 8 subsequences of { 6, 10, 15 }</p>
<ul>
<li>{} => The game cannot be played on this sub-sequence</li>
<li>{ 6 } => The game cannot be played on this sub-sequence</li>
<li>{ 10 } => The game cannot be played on this sub-sequence</li>
<li>{ 15 } => The game cannot be played on this sub-sequence</li>
<li>{ 6, 10 } => The game cannot end at { 1, 1 }</li>
<li>{ 6, 15 } => The game cannot end at { 1, 1 }</li>
<li>{ 10, 15 } => The game cannot end at { 1, 1 }</li>
<li>{ 6, 10, 15 } => The game ends at { 1, 1, 1 }. Hence this is the only sub-sequence that is counted in the result.</li>
</ul>
