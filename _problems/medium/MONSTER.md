---
{"category_name":"medium","problem_code":"MONSTER","problem_name":"Killing Monsters","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":null,"date_added":"4-11-2017","tags":{"0":"chemthan","1":"chemthan","2":"jan18","3":"medium"},"editorial_url":"https://discuss.codechef.com/problems/MONSTER","time":{"view_start_date":1516008600,"submit_start_date":1516008600,"visible_start_date":1516008600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/mandarin/MONSTER.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/russian/MONSTER.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/vietnamese/MONSTER.pdf">Vietnamese</a> as well.</h3>

<p>Chef is playing a game named "Killing monsters". In this game, at the beginning, there are <b>n</b> monsters arranged in a row (numbered 0 through <b>n-1</b> from left to right). The <b>i</b>-th monster initially has <b>h<sub>i</sub></b> health points. A monster dies if its health points become ≤ 0.</p>
<p>Chef is going to perform <b>q</b> actions. For each action, Chef chooses two numbers <b>x</b>, <b>y</b> and shoots all living monsters whose index <b>k</b> satisfies <b>k</b> & <b>x</b> = <b>k</b> (& denotes the bitwise AND operator). Each monster he shoots loses <b>y</b> health points.</p>
<p>After each action, please help Chef determine the number of living monsters.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>n</b> denoting the number of monsters.</li>
<li>The second line contains <b>n</b> space-separated integers <b>h<sub>0</sub>, h<sub>1</sub>, ..., h<sub>n-1</sub></b> denoting the initial health of monsters.</li>
<li>The third line contains a single integer <b>q</b> denoting the number of actions.</li>
<li><b>q</b> lines follow. Each of these lines contains two space-separated integers <b>x</b> and <b>y</b> describing one action.</li>
</ul></p>

<h3>Output</h3>
<p>For each action, print a single line containing one integer — the number of living monsters afterwards.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>n</b> ≤ 2<sup>17</sup></li>
<li>1 ≤ <b>h<sub>i</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
<li>1 ≤ <b>q</b> ≤ 2<sup>18</sup></li>
<li>0 ≤ <b>x</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>y</b> ≤ 10<sup>9</sup></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (10 points):</b> 
<ul>
<li>1 ≤ <b>n</b> ≤ 2<sup>10</sup></li>
<li>1 ≤ <b>q</b> ≤ 2<sup>11</sup></li>
</ul>
</p>

<p><b>Subtask #2 (20 points):</b>
<ul>
<li><b>h<sub>i</sub></b> = 1 for each valid <b>i</b></li>
<li><b>y</b> = 1 for each action</li>
</ul>
</p>

<p><b>Subtask #3 (70 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

5
1 2 3 4 5
5
1 1
2 2
3 3
4 4
5 5

<b>Output:</b>

4
4
2
2
1
</pre>
