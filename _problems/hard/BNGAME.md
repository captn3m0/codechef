---
{"category_name":"hard","problem_code":"BNGAME","problem_name":"Brand New Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"stzgd","date_added":"8-05-2014","tags":{"0":"easy","1":"ltime12","2":"stl","3":"two","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/BNGAME","time":{"view_start_date":1401006600,"submit_start_date":1401006600,"visible_start_date":1401006600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME12/mandarin/BNGAME.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME12/russian/BNGAME.pdf">Russian</a>.</h3>
<p>Consider the following game that is played on the field of the size of 1 x <b>N</b> cells. The cells are numbered from 1 to <b>N</b>. In the i-th cell there are two positive integers written - <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b>.</p>
<p>The game is as follows. Initially, the player stands at the fictive cell with the index <b>0</b> that is located right before all the <b>N</b> cells of the board. Then, he makes moves. Each move consists in moving by no more than by <b>K</b> cells forward. The goal of the game is to reach the fictive <b>N+1</b>-th cell that is located right after all the <b>N</b> cells.</p>
<p>After the <b>N+1</b>-th cell is reached, the player's penalty is calculated. The penalty equals to max(<b>A<sub>x</sub></b>) * max(<b>B<sub>y</sub></b>), where <b>x</b> and <b>y</b> are the indices of the cells that were visited in between (during the movement to the <b>N+1</b>-th cell).</p>
<p>Please find the minimal possible penalty that can be reached in this game.</p>
<h3>Input</h3>
<p>The first line of input contains two single space separated integer numbers - <b>N</b> and <b>K</b> respectively.</p>
<p>Then, there are <b>N</b> lines, each containing a pair of signle space separated integers - <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b> respectively.</p>
<h3>Output</h3>
<p>Output the minimal possible penalty on the first line.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b>, <b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>100</b> - 27 points.</li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b>, <b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>32000</b> - 20 points.</li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>5 * 10<sup>5</sup></b>, <b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>32000</b> - 53 points.</li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 3
1 5
2 4
3 3
4 2
5 1

<b>Output:</b>
9
</pre>