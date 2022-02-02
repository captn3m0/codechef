---
{"category_name":"easy","problem_code":"COOK82C","problem_name":"Hussain Set","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"deadwing97","problem_tester":"kingofnumbers","date_added":"20-05-2017","tags":{"0":"cook82","1":"deadwing97","2":"easy","3":"queue"},"time":{"view_start_date":1495391400,"submit_start_date":1495391400,"visible_start_date":1495391400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/mandarin/COOK82C.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/russian/COOK82C.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/vietnamese/COOK82C.pdf">vietnamese</a> as well.</h3>

<p>Hussain is very bored, and has a lot of exams lined up next week. But he doesn't want to study. As usual, he decided to fail his exams and play with Hasan instead (who has already failed). Hussain invented this new game to play with Hasan. </p>

<p>Hussain shows Hasan a multiset of integers. (A multiset is a collection of elements where there can be duplicates). In every move Hussain removes a maximum number from this multiset and divides it by 2 (integer division, which is rounded down).</p>

<p>If after dividing, the number is still positive (greater than 0) he re-inserts it back into the multiset. </p>

<p>Before the start of the game, Hussain shows Hasan the numbers in his multiset.</p>

<p>Hussain asks Hasan, <b>M</b> questions. The <b>i-th</b> question will be denoted by <b>Q[i]</b>, and Hasan must find the value of the number Hussain will be dividing (before he performs the division) after <b>Q[i]</b>-1 moves. That is, what is the value of the number on which the <b>Q[i]</b>-th division is performed?</p>

<p>Can you help Hasan and answer the queries?</p>


<h3>Input</h3>
<ul>
<li>The first line contains 2 space separated integers <b>N, M</b> denoting the initial size of the multiset and the number of questions respectively.</li>

<li>The next line contains <b>N</b> space separated integers, the initial elements of the multiset.</li>

<li>Of the next <b>M</b> lines, the <b>i-th</b> line will contain <b>Q[i]</b>.</li>
</ul>

<h3>Output</h3>
<ul>
<li>Output <b>M</b> lines, the i-th of which contains the answer for the i-th query.</li>
</ul>

<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>N, M</b> ≤ 10<sup>6</sup></li>
<li>The queries are given in chronological order. That is, <b> Q[i] > Q[i-1] </b> </li>
<li>Every element of the multiset will be a positive integer less than 2<sup>63</sup></li>
<li>It's guaranteed that the set will contain at least one element at the time of any query.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4 6
8 5 3 1
1
2
3
4
6
8

<b>Output:</b>
8
5
4
3
2
1
</pre>

<h3>Explanation</h3>
<p>We show the multiset sorted at each step, for convenience.</p>
<ul>
<li>Before any move, the multiset is (8, 5, 3, 1).</li>
<li>In the first move, 8 is removed, dived by 2, and thus becomes 4, and then re-inserted. So, the multiset, after the first move is (5, 4, 3, 1).</li>
<li>In the second move, 5 is removed and after division, it become 2, which is re-inserted. The multiset becomes (4, 3, 2, 1).</li>
<li>After the third move, the multiset becomes (3, 2, 2, 1).</li>
<li>After the fourth move, it becomes (2, 2, 1, 1).</li>
<li>After the fifth move, it becomes (2, 1, 1, 1).</li>
<li>After the sixth move, it becomes (1, 1, 1, 1).</li>
<li>In the seventh move, 1 is removed, and on division, it no longer is greater than 0. Hence, it is not re-inserted. So, after the seventh move, the multiset becomes (1, 1, 1).</li>
<li>After the eight move, the multiset becomes (1, 1).</li>
</ul>
<p></p>
<p>The value being divided on the first move is 8. Hence the first output is 8.</p>
<p>The value being divided on the first move is 5. Hence the first output is 5.</p>
<p>The value being divided on the eight move is 1. Hence the last output is 1.</p>
