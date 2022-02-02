---
{"category_name":"school","problem_code":"NOTINCOM","problem_name":"Nothing in Common","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"errichto","date_added":"11-01-2017","tags":{"0":"basic","1":"cakewalk","2":"ltime44","3":"sets","4":"xcwgf666"},"editorial_url":"https://discuss.codechef.com/problems/NOTINCOM","time":{"view_start_date":1485622800,"submit_start_date":1485622800,"visible_start_date":1485622800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME44/mandarin/NOTINCOM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME44/russian/NOTINCOM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME44/vietnamese/NOTINCOM.pdf">Vietnamese</a> as well.</h3>

<p>Alice has quarreled with Berta recently. Now she doesn't want to have anything in common with her!</p>
<p>Recently, they've received two collections of positive integers. The Alice's integers were <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>, while Berta's were <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, ..., <b>B<sub>M</sub></b>.</p>
<p>Now Alice wants to throw away the minimal amount of number from her collection so that their collections would have no common numbers, i.e. there won't be any number which is present in both collections. Please help Alice to find the minimal amount of numbers she would need to throw away.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space-separated integer numbers <b>N</b> and <b>M</b> denoting the amount of numbers in Alice's and Berta's collections respectively.</p>

<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the numbers of Alice. </p>

<p>The third line contains <b>M</b> space-separated integers <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, ..., <b>B<sub>M</sub></b> denoting the numbers of Berta. </p>

<h3>Output</h3>
<p>For each test case, output a single line containing the minimal amount of numbers Alice needs to throw away from her collection so that she wouldn't have any numbers in common with Berta.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b>  ≤ <b>10<sup>6</sup></b></li>
<li>All numbers are distinct within a single girl's collection.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (47 points)</b>: <b>T</b> = <b>25</b>, <b>1</b> ≤ <b>N, M</b> ≤ <b>1000</b></li>
<li><b>Subtask #2 (53 points)</b>: <b>T</b> = <b>5</b>, <b>1</b> ≤ <b>N, M</b> ≤ <b>100000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
3 4
1 2 3
3 4 5 6
3 3
1 2 3
4 5 6</tt>

<b>Output:</b>
<tt>1
0</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> If Alice throws away the number <b>3</b> from her collection, she would obtain <b>{1, 2}</b> which is disjoint with <b>{3, 4, 5, 6}</b>.</p>
<p><b>Example case 2.</b> Girls don't have any number in common initially. So there is no need to throw away any number.</p>
