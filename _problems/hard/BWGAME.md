---
{"category_name":"hard","problem_code":"BWGAME","problem_name":"Black-white Board Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"xcwgf666","date_added":"2-03-2015","tags":{"0":"april15","1":"hard","2":"heaps","3":"matrices","4":"merging","5":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/BWGAME","time":{"view_start_date":-62170005200,"submit_start_date":-62170005200,"visible_start_date":1772159245,"end_date":1735669800},"layout":"problem"}
---
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/mandarin/BWGAME.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/russian/BWGAME.pdf">Russian</a>.</h3>
<p>Both Fedya and Alex love playing games. One of their favorite games is playing with permutations. Description of game is given below.</p>
<p>Initially, they have a <b>N</b> x <b>N</b> matrix with all cells being white. Before starting the game, Alex colors the matrix in following way. he chooses <b>N</b> pair of integer <b>L[i], R[i]</b> denoting that in the i-th row, columns from L[i] to R[i] (1 - based indexing) are colored black.
</p>
<p>The players play in rounds. In each round, both Alex and Fedor make a move. Alex moves first.</p>
<p>When a player makes a move, he needs to provide a permutation <b>P</b> of integer from <b>1</b> to <b>N</b> such that the number of inversions in this permutation is even for Alex (similarly odd for Fedya) and all the cells with the coordinates <b>(i, P<sub>i</sub>)</b> in the matrix are black. It is prohibited to try already used permutations.</p>
<p>If during a round, both Alex and Fedya fail to find the required permutation, the game ends in a draw. If both Alex and Fedya find the required permutation, the game goes on to the next round. If one of the players fails to find the necessary permutation and the other guy finds a permutation, the game ends and the guy who managed to find the permutation wins.</p>
<p>The guys are intelligent enough to find the required permutation each time if it exists i.e. both players play optimally.</p>
<p>Now they're trying some big matrices, but they've became too lazy to play and now just want to know how will the game end on the given matrix. Can you please help them?</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the side of the matrix.</p>
<p>The following <b>N</b> lines will contain pairs of integers of the form <b>L<sub>i</sub> R<sub>i</sub></b>, denoting the range of the cells that are black in the corresponding row.</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the answer to the problem. Output "Draw" if the game ends with a draw, "Alex" if Alex wins and "Fedor" if Fedya wins.</p>
<h3>Constraints</h3>
<p><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>N</b></p>
<p>
<b>Subtask 1 (13 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>7</b></li>
</ul>

<p>
<b>Subtask 2 (26 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
</ul>

<p>
<b>Subtask 3 (61 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>15</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
2
1 2
1 1

<b>Output:</b>
Fedor
</pre>
<h3>Explanation</h3>
<p>In the first round, Fedya picks the permutation <b>(2, 1)</b> which has odd number of inversions (<b>1</b>) and the cells <b> (1, 2)</b> and <b>(2, 1)</b> are black. Alex is unable to pick the appropriate permutation, thus, he loses and Fedya wins. So we print "Fedor".</p>
