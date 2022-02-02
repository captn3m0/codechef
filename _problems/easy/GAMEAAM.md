---
{"category_name":"easy","problem_code":"GAMEAAM","problem_name":"Subtraction Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"satej ","problem_tester":"gerald","date_added":"15-01-2014","tags":{"0":"cook42","1":"easy","2":"game","3":"satej","4":"sprague"},"editorial_url":"http://discuss.codechef.com/problems/GAMEAAM","time":{"view_start_date":1390158900,"submit_start_date":1390158900,"visible_start_date":1390158900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/mandarin/GAMEAAM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/russian/GAMEAAM.pdf">Russian</a> as well.</h3>
<p>Two players are playing a game. The game is played on a sequence of positive integer pairs. The players make their moves alternatively. During his move the player chooses a pair and decreases the larger integer in the pair by a positive multiple of the smaller integer in the pair in such a way that both integers in the pair remain positive. If two numbers in some pair become equal then the pair is removed from the sequence. The player who can not make any move loses (or in another words the player who encounters an empty sequence loses). Given the sequence of positive integer pairs determine whether the first player can win or not (assuming that both players are playing optimally).</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
Each test starts with an integer <b>N</b> denoting the number of pairs. Each of the next <b>N</b> lines contains a pair of positive integers. </p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single line containing "YES" if the first player can win and "NO" otherwise. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li>All other integers are between <b>1</b> to <b>10<sup>8</sup></b></li>
<li>The integers in each pair will be different</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
1
2 3
2
4 5
5 6
2
2 3
3 5

<b>Output:</b>
NO
NO
YES

</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> The first player don't have any choice other subtracting 2 from 3. So during the turn of the second player integer pair will be (2,1). The second player will win by subtracting 1 from 2. </p>
<p><b>Example case 2.</b> If the first player choose to move (4,5) to (4,1) the second player will make it to (1,1). If the first player choose to move (5,6) to (5,1) the second player will make it to (1,1). So regardless of the move of the first player, the second will always win.</p>
<p><b>Example case 3.</b> The first player will select pair (3,5) and make it to (3,2). Now both pairs are equal. So whatever the move of second player he will just mirror that move in another pair. This will ensure his win.</p>
