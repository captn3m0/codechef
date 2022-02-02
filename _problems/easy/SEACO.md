---
{"category_name":"easy","problem_code":"SEACO","problem_name":"Sereja and Commands","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"CPP 4.3.2","9":"CPP 6.3","10":"CPP14","11":"CS2","12":"D","13":"ERL","14":"FORT","15":"FS","16":"GO","17":"HASK","18":"ICK","19":"ICON","20":"JAVA","21":"JS","22":"LISP clisp","23":"LISP sbcl","24":"LUA","25":"NEM","26":"NICE","27":"NODEJS","28":"PAS fpc","29":"PAS gpc","30":"PERL","31":"PERL6","32":"PHP","33":"PIKE","34":"PRLG","35":"PYTH","36":"PYTH 3.5","37":"RUBY","38":"SCALA","39":"SCM guile","40":"SCM qobi","41":"ST","42":"TCL","43":"TEXT","44":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"28-05-2013","tags":{"0":"easy","1":"fenwick","2":"sept17","3":"sereja"},"editorial_url":"https://discuss.codechef.com/problems/SEACO","time":{"view_start_date":1505122200,"submit_start_date":1505122200,"visible_start_date":1505122200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/mandarin/SEACO.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/russian/SEACO.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/vietnamese/SEACO.pdf">vietnamese</a> as well.</h3>

<p>Sereja has an array <b>A</b> consisting of <b>n</b> integers. Initially, all the elements of array are zero.</p>

<p>Sereja writes down <b>m</b> commands on a piece of a paper. The commands are enumerated from <b>1</b> to <b>m</b>. These commands can be of the following two types of commands: 
<ul>
<li> <b>l r (1 ≤ l ≤ r ≤ n)</b> — Increase all elements of the array by one, whose indices belongs to the range <b>[l, r]</b></li> 
<li> <b>l r (1 ≤ l ≤ r ≤ m)</b> — Execute all the commands whose indices are in the range <b>[l, r]</b>. It's guaranteed that <b>r</b> is strictly less than the enumeration/number of the current command.</li> 
</ul>

</p>
<p>Can you please help Sereja in executing all the commands written on this piece of paper.</ul></p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line contains integers <b>n</b> and <b>m</b>. Next <b>m</b> lines contain Sereja's commands in the format, described in statement: <b>t</b>, <b>l</b>, <b>r</b>, where <b>t</b> - number of type (1 or 2).</ul></p>

<h3>Output</h3>
<p>
For each test case on different lines print an array <b>a</b>, after executing all the commands. The numbers have to be separated by spaces. As the numbers can be quite large, print them modulo <b>10<sup>9</sup> + 7</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>n, m</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #<b>1</b> (20 points): 1 ≤ <b>n, m</b> ≤ 10 </li>
<li>Subtask #<b>2</b> (30 points): 1 ≤ <b>n, m</b> ≤ 1000 </li>
<li>Subtask #<b>3</b> (50 points): original constraints </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
5 5
1 1 2
1 4 5
2 1 2
2 1 3
2 3 4
1 2
1 1 1
1 1 1
10 10
1 1 10
2 1 1
2 1 2
2 1 3
2 1 4
2 1 5
2 1 6
2 1 7
2 1 8
2 1 9

<b>Output:</b>
7 7 0 7 7
2
512 512 512 512 512 512 512 512 512 512
</pre>

<h3>Explanation:</h3>
<p>
<b>Example case 1.</b>.</p>
<p>After the first command, the resulting array is [1 1 0 0 0], after second [1 1 0 1 1].</p> 
<p>On third command, we repeat the 1'st and the 2'nd command, so that resulting array is [2 2 0 2 2]. </p>
<p>After fourth command, the array will looks like [4 4 0 4 4]. </p>
<p>Last command will apply 3'rd and 4'th commands, 
which by themselves will apply 1'st, 2'nd, 1'st, 2'nd, 3'rd(1'st, 2'nd), so resulting arrays is [7 7 0 7 7].</p>
</p>