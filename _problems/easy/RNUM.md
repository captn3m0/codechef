---
{"category_name":"easy","problem_code":"RNUM","problem_name":"Rupsa and Number army","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abhra73","problem_tester":null,"date_added":"16-05-2015","tags":{"0":"abhra73","1":"ad","2":"snck151b"},"editorial_url":"http://discuss.codechef.com/problems/RNUM","time":{"view_start_date":1432954800,"submit_start_date":1432954800,"visible_start_date":1432954800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151B/mandarin/RNUM.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151B/russian/RNUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151B/vietnamese/RNUM.pdf">Vietnamese</a></h3>


<p>Princess Rupsa came across a very interesting game. In the game, you have to face against a number army consisting of <b>N</b> distinct integers <b>A<sub>1</sub>, A<sub>2</sub>, , , A<sub>N</sub></b>. In one move, you can shoot one magic bullet aiming at an alive enemy number, say <b>X</b>. The magic bullet will kill <b>X</b> and it will also kill <b>X + 1</b> and <b>X - 1</b> if they are alive when the bullet is shot. Game ends when the entire number army is killed.</p>

<p>Princess Rupsa wants to find out the minimum and maximum number of moves that can be played in the game. But since she has recently found her true love and is in hurry to meet him, you must help her to solve the problem as fast as possible.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>		
<li>The first line of each test case contains a single integer <b>N</b>. </li>
<li>The second line contains <b>N</b> space-separated integers denoting <b>A<sub>1</sub></b> to <b>A<sub>N</sub></b>.</li>
</ul> 

<h3>Output</h3>
<ul><li>
For each test case, output a single line containing two space separated integer denoting the minimum and maximum number of moves required respectively.
</li></ul>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ N ≤ 10<sup>5</b></li>
<li><b>1 ≤ A<sub>i</sub> ≤ 10<sup>6</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
3
1 2 3

<b>Output:</b>
1 2
</pre>

<h3>Explanation</h3>
<ul>
<li>For minimum moves, you could aim for <b>2</b>, killing <b>1</b>, <b>2</b> and <b>3</b> in the same move.</li>
<li>For maximum moves, you could aim for <b>1</b>, killing <b>1</b> and <b>2</b> in the first move and then aim for <b>3</b> in the second move.</li>  
</ul>