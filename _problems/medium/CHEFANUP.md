---
{"category_name":"medium","problem_code":"CHEFANUP","problem_name":"Chef Anup","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"piyushkumar","problem_tester":"xcwgf666","date_added":"12-03-2015","tags":{"0":"cakewalk","1":"ltime22","2":"maths","3":"piyushkumar"},"editorial_url":"http://discuss.codechef.com/problems/CHEFANUP","time":{"view_start_date":1427617800,"submit_start_date":1427617800,"visible_start_date":1427617800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME22/mandarin/CHEFANUP.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME22/russian/CHEFANUP.pdf">Russian</a>.</h3>


<p>Chef Anup is making dishes. Each dish consists of <b>N</b> ingredients, and quantity of each ingredient is an integer between 1 and <b>K</b> inclusive.</p>
<p>Relative quality of 2 dishes is determined by their lexicographic order. Dish <b>A</b> is of lower quality than dish <b>B</b> if there is a position i (1<=i<=N) such that <b>A<sub>j</sub></b> = <b>B<sub>j</sub></b> for all j < i and <b>A<sub>i</sub></b> < <b>B<sub>i</sub></b>. <br />E.g., if N = 2 and K = 2, then the possible dishes in lexicographic order are (1,1), (1,2), (2,1), (2,2). </p>
<p>Given an integer <b>L</b>, determine the <b>L</b><sup>th</sup> possible dish in increasing order of quality.</p>


<h3>Input</h3>
<ul>
    <li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
    <li>Each test case description consists of a single line containing three integers <b>N</b>, <b>K</b> and <b>L</b> as described above.</li>
</ul>

<h3>Output</h3>
<ul>
    <li>For each test case, print N space-separated integers in a single line describing the quantities of the ingredients for the L<sup>th</sup> dish.</li>
</ul>

<h3>Constraints</h3>
<ul>
    <li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
    <li>For 20 points : <b>N</b> = <b>3</b>, <b>2</b> ≤ <b>K</b> ≤ <b>10<sup>2</sup></b>, <b>1</b> ≤ <b>L</b> ≤ <b>10<sup>6</sup></b></li>
    <li>For 30 points : <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>2</sup></b>, <b>2</b> ≤ <b>K</b> ≤ <b>10<sup>2</sup></b>, <b>1</b> ≤ <b>L</b> ≤ <b>10<sup>4</sup></b></li>
    <li>For 50 points : <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b>, <b>2</b> ≤ <b>K</b> ≤ <b>10<sup>3</sup></b>, <b>1</b> ≤ <b>L</b> ≤ <b>10<sup>18</sup></b></li>
<li><b>L</b> will not exceed the total number of possible dishes.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
3 3 1
3 3 2
3 3 3
3 3 4

<b>Output:</b>
1 1 1
1 1 2
1 1 3
1 2 1
</pre>
<h3>Explanation</h3>
<p>
First 4 dishes in order have ingredients (1,1,1), (1,1,2), (1,1,3), and (1,2,1).
</p>

<pre><b>Input:</b>
4
4 3 1
4 3 2
4 3 3
4 3 4

<b>Output:</b>
1 1 1 1
1 1 1 2
1 1 1 3
1 1 2 1
</pre>
<h3>Explanation</h3>
<p>
First 4 dishes in order have ingredients (1,1,1,1), (1,1,1,2), (1,1,1,3), and (1,1,2,1).
</p>