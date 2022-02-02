---
{"category_name":"easy","problem_code":"CAOS1","problem_name":"CAO Stage-1","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"xcwgf666","date_added":"16-07-2013","tags":{"0":"cakewalk","1":"kaushik_iska","2":"sept13"},"editorial_url":"http://discuss.codechef.com/problems/CAOS1","time":{"view_start_date":1379323800,"submit_start_date":1379323800,"visible_start_date":1379323800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Problem Statement</h3>
<p><b>Past</b></p>
<p>In the year of 2048, the Virtual Reality Massively Multiplayer Online Role-Playing Game (VRMMORPG), <strong>Code Art Online (CAO)</strong>, is released. With the Chef Gear, a virtual reality helmet that stimulates the user's five senses via their brain, players can experience and control their in-game characters with their minds.</p>
<p>On August the 2nd, 2048, all the players log in for the first time, and subsequently discover that they are unable to log out. They are then informed by Code Master, the creator of CAO, that if they wish to be free, they must reach the second stage of the game.</p>
<p>Kirito is a known star player of CAO. You have to help him log out.</p>
<p><b>Present</b><br />
<br/><br />
<i>Stage 1</i></br/></p>
<p>A map is described by a 2D grid of cells. Each cell is either labelled as a <b>#</b> or a <b>^</b>. <b>#</b> denotes a wall. A monster exists in a cell if the cell is not a wall and the cell is a <b>centre of Prime-Cross (CPC)</b>.</p>
<ul>
<li>Let <b>L</b> be the number of contiguous <b>^</b> to the left of <b>X</b>, in the same row as <b>X</b>.</li>
<li><b>R</b> be the number of contiguous <b>^</b> to the right of <b>X</b>, in the same row as <b>X</b>.</li>
<li><b>T</b> be the number of contiguous <b>^</b> above <b>X</b>, in the same column as <b>X</b>.</li>
<li><b>B</b> be the number of contiguous <b>^</b> below <b>X</b>, in the same column as <b>X</b>.</li>
</ul>

<p>
A cell <b>X</b> is said to be a <b>CPC</b> if there exists a prime number <b>P</b> such that <b>P ≤ minimum of [L, R, T, B]</b>.</p>
<p><b>Note:</b> While computing <b>L, R, T, B</b> for a cell <b>X</b>, you should not count the <b>^</b> of the cell <b>X</b>.</p>
<p>Given a map, you have to tell Kirito the number of cells where monsters exist.</p>
<p><b>Future</b></p>
<p>If you are done with this task, go help Kirito with Stage 2 :-)</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <strong>T</strong> denoting the number of test cases. The description of <strong>T</strong> test cases follows. Each case starts with a line containing two space separated integers <strong>R, C</strong> denoting the number of rows and columns in the map respectively. The next <strong>R</strong> lines contain <strong>C</strong> characters each, describing the map.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of cells where monsters exist.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>R</b> ≤ 50</li>
<li>1 ≤ <b>C</b> ≤ 50</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
5 5
^^^^^
^^^^^
^^^^#
^^^^^
^^^^^
5 7
^^#^^^^
^^#^#^#
#^^^^^^
^^#^^#^
^^^^^^^

<b>Output:</b>
0
1
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> There is no cell for which minimum of L, R, T, B is greater than some prime P.</p>
<p><b>Example case 2.</b> The cell at [3, 4], (1-based indexing) is the only CPC.</p>
