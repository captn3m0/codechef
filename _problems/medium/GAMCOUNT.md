---
{"category_name":"medium","problem_code":"GAMCOUNT","problem_name":"Counting Games","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":null,"date_added":"2-07-2016","tags":{"0":"kevinsogo"},"time":{"view_start_date":1468063200,"submit_start_date":1468063200,"visible_start_date":1468063200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/mandarin/GAMCOUNT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/russian/GAMCOUNT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/vietnamese/GAMCOUNT.pdf">Vietnamese</a> as well.</h3>
<p>Henry and Derek are waiting in a room. They have successfully qualified for the Snackdown Finals 2016, and decide to pass the time by playing a new game.</p>
<p>Before the game starts, they select <b>N</b> numbers: <b>v(0)</b>, <b>v(1)</b>, ..., <b>v(N-1)</b>. These numbers will stay fixed throughout the game.</p>
<p>The initial state of the game consists of <b>K</b> integers <b>x<sub>1</sub></b>, <b>x<sub>2</sub></b>, ..., <b>x<sub>K</sub></b>, each of which is in the range <b>[0, N-1]</b>. Thus, there are <b>N<sup>K</sup></b> distinct states all in all. Then the players take turns, starting with Henry. In a turn, a player selects one of the integers, say <b>x<sub>i</sub></b>, and decreases it by some <i>positive multiple</i> of <b>2<sup>v(x<sub>i</sub>)</sup></b>. However, this is only valid if the resulting number is nonnegative. A player loses if there are no more valid moves left.</p>
<p>Henry and Derek have gotten really good at playing this game, so much that they have figured out the optimal strategy, and they always play optimally! This made the game really boring for them, because the winner is solely determined by the initial state of the game. So instead of playing the game, they decided to just answer the following question instead:</p>
<p><b>Of all the <b>N<sup>K</sup></b> possible initial states, how many of them result in a win for Henry?</b></p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two integers, <b>N</b> and <b>K</b>.</p>
<p>The second line contains <b>N</b> space-separated integers <b>v(0)</b>, <b>v(1)</b>, ..., <b>v(N-1)</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing a single integer, the number of initial states that result in a win for Henry. This number can be very large, so output it modulo <b>10<sup>9</sup> + 7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>v(i)</b> ≤ <b>10<sup>4</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
2 3
1 0
5 3
2 0 1 0 0
5 3
2 0 1 0 1
</tt>
<b>Output:</b>
<tt>4
94
100</tt>
</pre><h3>Explanation</h3>
<p>In the first case, the following initial states result in a win for Henry: [1,1,1], [0,0,1], [0,1,0], [1,0,0].</p>
