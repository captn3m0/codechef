---
{"category_name":"easy","problem_code":"CHSHIFU","problem_name":"Chef Shifu and Celebration","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":null,"date_added":"22-06-2016","tags":{"0":"wittyceaser"},"time":{"view_start_date":1467052140,"submit_start_date":1467052140,"visible_start_date":1467052140,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef Shifu wanted to celebrate the success of his new restaurant with all his employees. He was willing to host a party and he had decided the location of the party as well. However, Chef Shifu was a shy person and wanted to communicate with the least possible employees to inform them about the party, and that these employees could inform their friends.<br />
Note that an employee could only inform his/her immediate friends about the party, not his/her friends’ friends.<br />
Chef Shifu has a list of all the friendships among his employees. Help him find the minimum number of employees he should inform, so that every employee knows about the celebration party.</p>
<h3>Input</h3>
<p>First line contains a single integer <b>T</b> - the total number of testcases.<br/><br />
<b>T</b> testcases follow. For each testcase:<br/><br />
The first line contains 2 space-separated integers <b>N</b> and <b>M</b> - the total number of employees working under Chef Shifu and the number of friendship relations.<br/><br />
<b>M</b> lines follow - each line contains 2 space-separated integers <b>u</b> and <b>v</b>, indicating that employee <b>u</b> is a friend of employee <b>v</b> and vice-versa.<br/><br />
The employees are numbered from 1 to N, and each employee is assigned a distinct integer.</br/></br/></br/></br/></p>
<h3>Output</h3>
<p>For each testcase, print the <b>minimum</b> number of employees to be informed on a new line.</p>
<h3>Constraints</h3>
<p><b>Subtask 1: 5 points</b><br/><br />
1 ≤ <b>T</b> ≤ 5<br/><br />
1 ≤ <b>N</b> ≤ 4<br/><br />
0 ≤ <b>M</b> ≤ N*(N-1)/2<br/></br/></br/></br/></br/></p>
<p><b>Subtask 2: 35 points</b><br/><br />
1 ≤ <b>T</b> ≤ 5<br/><br />
1 ≤ <b>N</b> ≤ 15<br/><br />
0 ≤ <b>M</b> ≤ N*(N-1)/2<br/></br/></br/></br/></br/></p>
<p><b>Subtask 3: 60 points</b><br/><br />
1 ≤ <b>T</b> ≤ 5<br/><br />
1 ≤ <b>N</b> ≤ 20<br/><br />
0 ≤ <b>M</b> ≤ N*(N-1)/2</br/></br/></br/></p>
<h3>Example</h3>
<p><b>Input</b></p>
<pre>
2
3 3
1 2
2 3
1 3
4 3
1 2
2 3
3 4
</pre><p><b>Output</b></p>
<pre>
1
2
</pre><p><b>Explanation</b></p>
<p>
In testcase 1, since every employee is a friend of every other employee, we just need to select 1 employee.</p>
<p>In testcase 2, selecting employees 2 and 4 would ensure that all 4 employees are represented.<br />
Similarly, selecting employees 1 and 3 would also ensure that all 4 employees are selected.<br />
In both cases, we must select 2 employees in the best case.
</p>
