---
{"category_name":"easy","problem_code":"CNOTE","problem_name":"Chef and Notebooks","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"laycurse","date_added":"29-09-2014","tags":{"0":"basic","1":"cakewalk","2":"ma5termind","3":"march15"},"editorial_url":"http://discuss.codechef.com/problems/CNOTE","time":{"view_start_date":1426498200,"submit_start_date":1426498200,"visible_start_date":1426498200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/mandarin/CNOTE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/russian/CNOTE.pdf">Russian</a>.</h3>
<p>Chef likes to write poetry. Today, he has decided to write a <b>X</b> pages long poetry, but unfortunately his notebook has only <b>Y</b> pages left in it. Thus he decided to buy a new CHEFMATE notebook and went to the stationary shop. Shopkeeper showed him some <b>N</b> notebooks, where the number of pages and price of the <b>i</b><sup>th</sup> one are <b>P<sub>i</sub></b> pages and <b>C<sub>i</sub></b> rubles respectively. Chef has spent some money preparing for Ksen's birthday, and then he has only <b>K</b> rubles left for now.</p>
<p>Chef wants to buy a single notebook such that the price of the notebook should not exceed his budget and he is able to complete his poetry.</p>
<p>Help Chef accomplishing this task. You just need to tell him whether he can buy such a notebook or not. Note that Chef can use all of the <b>Y</b> pages in the current notebook, and Chef can buy only one notebook because Chef doesn't want to use many notebooks.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases are follow.</p>
<p>The first line of each test case contains four space-separated integers <b>X</b>, <b>Y</b>, <b>K</b> and <b>N</b>, described in the statement. The <b>i</b><sup>th</sup> line of the next <b>N</b> lines contains two space-separated integers <b>P<sub>i</sub></b> and <b>C<sub>i</sub></b>, denoting the number of pages and price of the <b>i</b><sup>th</sup> notebook respectively.</p>
<h3>Output</h3>
<p>For each test case, Print "<b>LuckyChef</b>" if Chef can select such a notebook, otherwise print "<b>UnluckyChef</b>" (quotes for clarity).</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ Y &lt; X ≤ 10<sup>3<sup></sup></sup></b></li>
<li><b>1 ≤ K ≤ 10<sup>3</sup></b></li>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ P<sub>i</sub>, C<sub>i</sub> ≤ 10<sup>3</sup></b></li>
</ul>
<p></p>
<p><b>Subtask 1: 40 points</b></p>
<ul>
<li>Sum of <b>N</b> over all test cases in one test file does not exceed <b>10<sup>4</sup></b>.</li>
</ul>
<p></p>
<p><b>Subtask 2: 60 points</b></p>
<ul>
<li>Sum of <b>N</b> over all test cases in one test file does not exceed <b>10<sup>6</sup></b>.</li>
</ul>
<h3>Sample</h3>
<pre>
<b>Input</b>
3
3 1 2 2
3 4
2 2    
3 1 2 2
2 3
2 3    
3 1 2 2
1 1
1 2

<b>Output</b>
LuckyChef
UnluckyChef
UnluckyChef
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> In this case, Chef wants to write <b>X = 3</b> pages long poetry, but his notebook has only <b>Y = 1</b> page. And his budget is <b>K = 2</b> rubles, and there are <b>N = 2</b> notebooks in the shop. The first notebook has <b>P<sub>1</sub> = 3</b> pages, but Chef cannot buy it, because its price is <b>C<sub>1</sub> = 4</b> rubles. The second notebook has <b>P<sub>2</sub> = 2</b> pages, and its price is <b>C<sub>2</sub> = 2</b> rubles. Thus Chef can select the second notebook to accomplish the task. He will write <b>1</b> page of poetry in the old notebook, and <b>2</b> page of poetry in the new notebook.</p>
<p><b>Example case 2.</b> Chef cannot buy any notebook, because the prices exceed the Chef's budget.</p>
<p><b>Example case 3.</b> No notebook contains sufficient number of pages required to write poetry.</p>
