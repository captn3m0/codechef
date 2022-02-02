---
{"category_name":"medium","problem_code":"QSET","problem_name":"Queries on the String","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":"shiplu","date_added":"28-05-2014","tags":{"0":"darkshadows","1":"jan15","2":"medium","3":"number","4":"segment"},"editorial_url":"http://discuss.codechef.com/problems/QSET","time":{"view_start_date":1421055000,"submit_start_date":1421055000,"visible_start_date":1421055000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/QSET.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/QSET.pdf">Russian</a>.</h3>
<p>You have a string of <b>N</b> decimal digits, denoted by numbers <b>A<sub>1</sub>,A<sub>2</sub>, ..., A<sub>N</sub></b>.
</p>
<p>Now you are given <b>M</b> queries, each of whom is of following two types.<br/></br/></p>
<ul>
<li>Type 1: <b>1 X Y</b>: Replace <b>A<sub>X</sub></b> by <b>Y</b>.</li>
<li>Type 2: <b>2 C D</b>: Print the number of sub-strings divisible by 3 of the string denoted by <b>A<sub>C</sub>,A<sub>C+1</sub> ...<br />
A<sub>D</sub></b>.<br />
<br/><br />
Formally, you have to print the number of pairs <b>(i,j)</b> such that the string <b>A<sub>i</sub>,A<sub>i+1</sub>...A<sub>j</sub></b>,<br />
<b>(C ≤ i ≤ j ≤ D)</b>, when considered as a decimal number, is divisible by 3.
</br/></li>
</ul>

<h3>Input</h3>
<ul>
<li>There is only one test case.</li>
<li>First line of input contains two space separated integers <b>N, M</b>.</li>
<li>Next line contains a string of <b>N</b> digits, denoting string <b>A</b>.</li>
<li>For next <b>M</b> lines, each line contains a query.</li>
<li>Each query is given by three space separated integers.</li>
<li>The first integer denotes type of the query. For each query of type 1, next two integers denote <b>X<sub>i</sub>, Y<sub>i</sub></b>.<br />
For each query of type 2, next two integers denote <b>C<sub>i</sub>, D<sub>i</sub></b>.
</li>
</ul>
<h3>Output</h3>
<p>For each query of type 2, print the required answer in a single line.</p>
<h3>Constraints</h3>
<ul>
<li><b>0 ≤ A<sub>i</sub> ≤ 9</b></li>
<li><b>1</b> ≤ <b>X<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>Y<sub>i</sub></b> ≤ <b>9</b></li>
<li><b>1</b> ≤ <b>C<sub>i</sub></b> ≤ <b>D<sub>i</sub></b> ≤ <b>N</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (10 points): <b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>3</sup></b> and only type 2 queries.</li>
<li>Subtask #2 (15 points): <b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>3</sup></b></li>
<li>Subtask #3 (20 points): <b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>5</sup></b> and only type 2 queries</li>
<li>Subtask #4 (55 points): <b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 3
01245
2 1 3
1 4 5
2 3 5

<b>Output:</b>
3
1
</pre><h3>Explanation</h3>
<p>
For first query, the sub-strings S[1,1]="0", S[1,3]="012" and S[2,3]="12" are divisible by 3.<br />
After second query, the string A becomes "01255".<br />
For third query, only sub-string S[3,5]="255" is divisible by 3.
</p>
