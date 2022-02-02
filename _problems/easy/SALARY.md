---
{"category_name":"easy","problem_code":"SALARY","problem_name":"The Minimum Number Of Moves","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ballon_ziq","problem_tester":"anton_lunyov","date_added":"24-10-2012","tags":{"0":"ad","1":"ballon_ziq","2":"cakewalk","3":"jan13"},"editorial_url":"http://discuss.codechef.com/problems/SALARY","time":{"view_start_date":1358242651,"submit_start_date":1358242651,"visible_start_date":1358242651,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Little chief has his own restaurant in the city. There are <b>N</b> workers there. Each worker has his own salary. The salary of the <b>i</b>-th worker equals to <b>W<sub>i</sub></b> (<b>i</b> = <b>1</b>, <b>2</b>, ..., <b>N</b>). Once, chief decided to equalize all workers, that is, he wants to make salaries of all workers to be equal. But for this goal he can use only one operation: choose some worker and increase by 1 salary of each worker, except the salary of the chosen worker. In other words, the chosen worker is the loser, who will be the only worker, whose salary will be not increased during this particular operation. But loser-worker can be different for different operations, of course. Chief can use this operation as many times as he wants. But he is a busy man. That's why he wants to minimize the total number of operations needed to equalize all workers. Your task is to find this number.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains a single integer <b>N</b> denoting the number of workers. The second line contains <b>N</b> space-separated integers <b> W<sub>1</sub></b>, <b>W<sub>2</sub></b>, ..., <b>W<sub>N</sub></b> denoting the salaries of the workers.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimum number of operations needed to equalize all workers.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>100</b></li>
<li><b>1</b> &le; <b>N<sub></sub></b> &le; <b>100</b></li>
<li><b>0</b> &le; <b>W<sub>i</sub></b> &le; <b>10000</b> (<b>10<sup>4</sup></b>)</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
1 2 3
2
42 42

<b>Output:</b>
3
0
</pre><h3>Explanation</h3>
<p><b>Example Case 1.</b> Chief can equalize all salaries in 3 turns:</p>
<p>
<table border="1">
<tbody>
<tr>
<td>Turn ID</td>
<td>IDs of involved workers</td>
<td>Salaries after the move</td>
</tr>
<tr>
<td>1</td>
<td> 1 2</td>
<td> 2 3 3</td>
</tr>
<tr>
<td>2</td>
<td> 1 2</td>
<td> 3 4 3</td>
</tr>
<tr>
<td>3</td>
<td> 1 3</td>
<td> 4 4 4</td>
</tr>
</tbody>
</table>
</p>
<p><b>Example Case 2.</b> All salaries are already equal. He doesn't need to do anything.</p>
