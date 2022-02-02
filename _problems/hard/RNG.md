---
{"category_name":"hard","problem_code":"RNG","problem_name":"Random Number Generator","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":15,"source_sizelimit":50000,"problem_author":"cgy4ever","problem_tester":"laycurse","date_added":"12-12-2014","tags":{"0":"cgy4ever","1":"fft","2":"hard","3":"march15"},"editorial_url":"http://discuss.codechef.com/problems/RNG","time":{"view_start_date":1426498200,"submit_start_date":1426498200,"visible_start_date":1426498200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/mandarin/RNG.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/russian/RNG.pdf">Russian</a>.</h3>
<p>You may know how to write a random number generator (RNG) after solving <a href="http://www.codechef.com/MARCH15/problems/SEAPROAR">this problem (SEAPROAR)</a>.</p>
<p>Another way to write a RNG is to use linear recurrence relation. e.g. let's consider the following linear recurrence: </p>
<div style="margin-left: 3em;"><b>A<sub>i</sub> = (A<sub>i−1</sub> × C<sub>1</sub> + A<sub>i−2</sub> × C<sub>2</sub> + ... + A<sub>i−k</sub> × C<sub>k</sub>) mod 104857601</b>, for <b>i = k+1, k+2, ...,</b></div>
<p>  where <b>k</b> is a positive integer. </p>
<p>
You are given initial values <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>k</sub></b> and the coefficients <b>C<sub>1</sub>, C<sub>2</sub>, ..., C<sub>k</sub></b>. Then the RNG can be used to generate any <b>A<sub>i</sub></b> for <b>i</b> larger than <b>k</b>.
</p>
<p>Your task is to calculate <b>A<sub>N</sub></b> for a given <b>N</b>.</p>
<h3>Input</h3>
<p>There is exactly one test case in each test file.</p>
<p>The first line of input contains two space-separated integers <b>k</b> and <b>N</b> as described in the statement. The second line contains <b>k</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>k</sub></b> denoting the initial values as defined in the problem statement.
</p><p> Then the third line contains <b>k</b> space-separated integers <b>C<sub>1</sub>, C<sub>2</sub>, ..., C<sub>k</sub></b>, denoting the coefficients.
<h3>Output</h3>
</p><p>Print a single integer denoting value of <b>A<sub>N</sub></b>.</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1 ≤ N ≤ 10<sup>18</sup></b></li>
<li><b>0 ≤ A<sub>i</sub>, C<sub>i</sub> &lt; 104857601</b></li>
</ul>
<p></p>
<p><b>Subtask 1: 10 points</b></p>
<ul>
<li><b>1 ≤ k ≤ 3000</b></li>
</ul>
<p></p>
<p><b>Subtask 2: 90 points</b></p>
<ul>
<li><b>1 ≤ k ≤ 30000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3 5
1 2 3
4 5 6

<b>Output:</b>
139
</pre><h3>Explanation</h3>
<p><b>A<sub>1</sub> = 1.</b><br /><b>A<sub>2</sub> = 2.</b><br /><b>A<sub>3</sub> = 3.</b><br /><b>A<sub>4</sub> = (A<sub>3</sub> × C<sub>1</sub> + A<sub>2</sub> × C<sub>2</sub> + A<sub>1</sub> × C<sub>3</sub>) mod 104857601 = (3 × 4 + 2 × 5 + 1 × 6) mod 104857601 = (12 + 10 + 6) mod 104857601 = 28.</b><br /><b>A<sub>5</sub> = (A<sub>4</sub> × C<sub>1</sub> + A<sub>3</sub> × C<sub>2</sub> + A<sub>2</sub> × C<sub>3</sub>) mod 104857601 = (28 × 4 + 3 × 5 + 2 × 6) mod 104857601 = (112 + 15 + 12) mod 104857601 = 139.</b><br /></p>
