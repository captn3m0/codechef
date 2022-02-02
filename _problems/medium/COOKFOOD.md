---
{"category_name":"medium","problem_code":"COOKFOOD","problem_name":"Cooking dishes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"utkarsh_lath","problem_tester":"Rubanenko‎","date_added":"12-07-2013","tags":{"0":"ltime02","1":"simple","2":"utkarsh_lath"},"editorial_url":"http://discuss.codechef.com/problems/COOKFOOD","time":{"view_start_date":1375002000,"submit_start_date":1375002000,"visible_start_date":1375002000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>As you might know, cooking is the process of taking a food item and subjecting it to various processes(like heating, roasting, baking etc).<br />
A food item gets prepared after it has been subjected to <b>exactly N processes</b>.<br />
The <b>order in which the processes are applied matters</b>(heating and then baking is different from baking and then heating). Also, the same processes cannot be aplied twice in succession. For example, heating → baking → heating is allowed, but heating → heating → baking is not allowed because 'heating' comes twice in succession.</p>
<p>
Any given sequence <b>A<sub>1</sub>, A<sub>2</sub>, A<sub>3</sub>, ... A<sub>N</sub></b> of <b>N</b> processes can be used to cook a food item if and only if <b>A<sub>i</sub> ≠ A<sub>i+1</sub></b> for all <b>1 ≤ i ≤ N-1</b>.</p>
<p>
The chefs kitchen has got <b>K</b> equipments for <b>K</b> different processes.</p>
<p>
Chef has to cook two dishes in parallel.<br />
This means that if the first dish is prepared by applying processes <b>A<sub>1</sub>, A<sub>2</sub>, A<sub>3</sub>, ... A<sub>N</sub></b> in this order, and the second dish made by processes <b>B<sub>1</sub>, B<sub>2</sub>, B<sub>3</sub>, ... B<sub>N</sub></b>, then <b>A<sub>i</sub> ≠ B<sub>i</sub> for any 1 ≤ i ≤ N</b>, because otherwise chef would need two equipments for the process A<sub>i</sub>.</p>
<p>
Needless to say, 1 ≤ A<sub>i</sub>, B<sub>i</sub> ≤ K, no two consecutive elements of <b>A</b> are same, and no two consecutive elements of <b>B</b> are same.</p>
<p>
Given N, K your task is to find the number of ways in which in which he can prepare the two dishes. Since the number of ways can be very huge,  you have to report it modulo 1000000007.</p>
<p><h3> Input Description</h3>
</p><p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
Each test case is described by line containing two space separated integers, <b>N</b> and <b>K</b> as per the problem description.</p>
<p><h3> Output Description </h3>
</p><p>For each Test case, output a separate line containing the answer modulo 1000000007.</p>
<p><h3>Sample Input</h3>
</p><p>3<br/><br />
2 2<br/><br />
2 3<br/><br />
1 3<br/></br/></br/></br/></br/></p>
<p><h3>Sample Output</h3>
</p><p>2<br/><br />
18<br/><br />
6<br/></br/></br/></br/></p>
<p><h3>Explanation</h3>
</p><p>For first test case, there are two ways:<br />
a) A = {1, 2} and B = {2, 1} and b) A = {2, 1} and B = {1,2}.<br />
<br/><br />
For third test case, A and B are of length 1. A<sub>0</sub> can take three different values and for each value of A<sub>0</sub>, B<sub>0</sub> can take any of the other two values.</br/></p>
<p><h3>Constraints</h3>
<ul>
<li><b>T</b> ≤ 100 </li>
<li>1 ≤ <b>N, K</b> ≤ 10<sup>9</sup></li>
</ul>
</p><p><h3>Subtask 1 (30 points): </h3>
</p><p><b>N</b>, <b>K</b> ≤ 5</p>
<p><h3>Subtask 2 (20 points):</h3>
</p><p><b>N</b>, <b>K</b> ≤ 10000<br/><br />
the answer(without taking modulo 1000000007) will be at most 10<sup>4</sup>.</br/></p>
<p><h3>Subtask 3 (25 points): </h3>
</p><p><b>N</b>, <b>K</b> ≤ 10000</p>
<p><h3>Subtask 4 (25 points): </h3>
</p><p><i>No special constraints</i></p>
<p></p>