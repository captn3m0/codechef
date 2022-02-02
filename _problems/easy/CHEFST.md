---
{"category_name":"easy","problem_code":"CHEFST","problem_name":"Chef and the stones","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tapasjain01","problem_tester":"xcwgf666","date_added":"31-07-2015","tags":{"0":"ad","1":"arithmetic","2":"cakewalk","3":"dec15","4":"greedy","5":"tapasjain01"},"editorial_url":"http://discuss.codechef.com/problems/CHEFST","time":{"view_start_date":1450085400,"submit_start_date":1450085400,"visible_start_date":1450085400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/mandarin/CHEFST.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/russian/CHEFST.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/vietnamese/CHEFST.pdf">Vietnamese</a> as well.</h3>


<p>Chef has two piles of stones with him, one has <b>n<sub>1</sub></b> stones and the other has <b>n<sub>2</sub></b> stones. Fired up by boredom, he invented a game with the two piles.</p>

<p>
Before the start of the game Chef chooses an integer <b>m</b>.
</p>

<p>
In the <b>j</b>-th move: 
<ul>
<li> He chooses a number <b>x<sub>j</sub></b> such that <b>1 ≤ x<sub>j</sub> ≤ m</b>, and removes <b>x<sub>j</sub></b> stones from both the piles (this is only possible when both the piles have ≥ <b>x<sub>j</sub></b> stones).</li>
<li> The number chosen must be unique over all the moves in the game. That is, for all <b>k < j, x<sub>j</sub> ≠ x<sub>k</sub></b>.</li> 
</ul> </br>

The game stops when Chef is unable to make any more moves.
</p>

<p>Chef wants to make the moves in such a way that the sum of the number of stones remaining in the two piles is minimized. Please help Chef find this.
</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>Each test case consists of 1 line with three integers — <b>n<sub>1</sub>, n<sub>2</sub></b> and <b>m</b> — separated by single spaces.</li> 
</ul>

<h3>Output</h3>
<p>For each test case, output a single line containing the minimum sum of the number of stones of two piles.</p>

<h3>Constraints</h3>
<p><b>Subtask 1</b> : (5 pts)</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>0</b> ≤ <b>m</b> ≤ <b>18</b></li>
<li><b>0</b> ≤ <b>n<sub>1</sub>, n<sub>2</sub></b> ≤ <b>100</b></li>
</ul>

<p><b>Subtask 2</b> : (25 pts)</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>0</b> ≤ <b>m</b> ≤ <b>10000</b></li>
<li><b>0</b> ≤ <b>n<sub>1</sub>, n<sub>2</sub></b> ≤ <b>10000</b></li>
</ul>

<p><b>Subtask 3</b> : (70 pts)</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>m</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>0</b> ≤ <b>n<sub>1</sub>, n<sub>2</sub></b> ≤ <b>10<sup>18</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
1 1 1
1 2 1
4 5 2</tt>

<b>Output:</b>
<tt>0
1
3</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> : Remove 1 stone from each of the piles. Now 0 stones are remaining, so chef cannot remove any more stones from the piles. Hence, answer is 0+0 = 0</p>
<p><b>Example case 2.</b> : Again, remove 1 stone from both the piles to get (0,1) stones. Now chef cannot remove any more stones from pile 1, so he stops. Hence, answer is 0+1 = 1.</p>
<p><b>Example case 3.</b> : First remove 1 stone from both the piles to get (3,4) stones. Now, remove 2 stones from both the piles so that (1,2) stones are remaining. Now chef cannot remove any more stones owing to the condition that he cannot remove the same number of stones twice. So, the answer is 1+2 = 3.</p>