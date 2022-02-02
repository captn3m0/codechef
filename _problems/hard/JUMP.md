---
{"category_name":"hard","problem_code":"JUMP","problem_name":"Jump mission","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"7-09-2015","tags":{"0":"convex","1":"dynamic","2":"hard","3":"kingofnumbers","4":"oct15"},"editorial_url":"http://discuss.codechef.com/problems/JUMP","time":{"view_start_date":1444642200,"submit_start_date":1444642200,"visible_start_date":1444642200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/mandarin/JUMP.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/russian/JUMP.pdf">Russian</a> </h3>
<p>
Chef the chief is participating in a hill jumping competition.
</p>
<p>
There are N hills arranged in a row, and each of them is assigned a unique index from 1 to <b>N</b> — the <b>i</b><sup>th</sup> hill has an index <b>P<sub>i</sub></b> on it. The height of the <b>i</b><sup>th</sup> hill is <b>H<sub>i</sub></b>.<br />
Chef starts at the first hill with a goal to reach the <b>N<sup>th</sup></b> hill by jumping over hills from left to right (he is not allowed to jump in the other direction), jumping from <b>i</b><sup>th</sup> hill to <b>j</b><sup>th</sup> costs (<b>H<sub>j</sub></b> - <b>H<sub>i</sub></b>)<sup>2</sup> energy.
</p>
<p>
When chief is on the <b>i</b><sup>th</sup> hill, he has to prepare a special dish for the community of that hill as a thanks for letting him use their resources. This will cost him <b>A<sub>i</sub></b> energy (some dishes are chief's favorites and preparing it refreshes chef that why <b>A<sub>i</sub></b> may be negative). To make things more challenging for Chef the chief, he is allowed to jump from <b>i</b><sup>th</sup> hill to <b>j</b><sup>th</sup> if and only if <b>i &lt; j</b> and <b>P<sub>i</sub> &lt; P<sub>j</sub></b>.
</p>
<p>
Help Chef choose the sequence of jumps that consume the minimum energy possible. (Note that it's possible at any moment that energy consumed is negative.)
</p>
<h3>Input</h3>
<p>
The first line of input contains a single integer <b>N</b>.<br />
The second line contains <b>N</b> space-separated integers <b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ... , <b>P<sub>N</sub></b>.<br/><br />
The third line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ... , <b>A<sub>N</sub></b>.<br/><br />
The fourth line contains <b>N</b> space-separated integers <b>H<sub>1</sub></b>, <b>H<sub>2</sub></b>, ... , <b>H<sub>N</sub></b>.<br/>
</br/></br/></br/></p>
<h3>Output</h3>
<p>Output a single line containing the answer to the problem i.e. the minimal possible amount of <b>consumed</b> energy.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>3 × 10<sup>5</sup></b></li>
<li><b>P</b> is a permutation of the first <b>N</b> integer numbers</li>
<li><b>P<sub>1</sub>=1</b> and <b>P<sub>N</sub>=N</b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>H<sub>i</sub></b> ≤ <b>6 × 10<sup>5</sup></b></li>
</ul>
</p>
<h3>Subtasks</h3>
<p><ul>
<li><b>Subtask 1</b> (5 points) : <b>2</b> ≤ <b>N</b> ≤ <b>20</b></li>
<li><b>Subtask 2</b> (15 points) : <b>2</b> ≤ <b>N</b> ≤ <b>5000</b></li>
<li><b>Subtask 3</b> (20 points) : <b>2</b> ≤ <b>N</b> ≤ <b>3 × 10<sup>5</sup></b>, <b>P<sub>i</sub></b> = <b>H<sub>i</sub></b> = <b>i</b></li>
<li><b>Subtask 4</b> (30 points) : <b>2</b> ≤ <b>N</b> ≤ <b>3 × 10<sup>5</sup></b>, <b>H<sub>i</sub></b> = <b>i</b></li>
<li><b>Subtask 5</b> (30 points) : original constraints</li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>5
1 4 3 2 5
0 1 3 0 0
1 2 3 4 5</tt>

<b>Output:</b>
<tt>10</tt>

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> jumping from first hill to 4<sup>th</sup> one then to 5<sup>th</sup>; the answer will be 0 + 0 + 0 + (4-1)^2 + (5-4)^2 = 10</p>
