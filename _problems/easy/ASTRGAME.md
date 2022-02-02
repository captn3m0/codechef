---
{"languages_supported":{"0":"NA"},"title":"ASTRGAME","category":"NA","old_version":true,"problem_code":"ASTRGAME","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Teddy and Tracy like to play a game based on strings. The game is as follows. Initially, Tracy writes a long random string on a whiteboard. Then, each player starting with Teddy makes turn alternately. Each turn, the player must erase a contiguous substring that exists in the dictionary. The dictionary consists of <i>N</i> words.</p>

<p>Of course, the player that can't erase any substring in his turn loses the game, and the other player is declared the winner.</p>

<p>Note that after a substring R is erased, the remaining substring becomes separated, i.e. they cannot erase a word that occurs partially to the left of R and partially to the right of R.

</p><p>Determine the winner of the game, assuming that both players play optimally.</p>

<h3>Input</h3>
<p>The first line contains a single integer <i>T</i>, the number of test cases. <i>T</i> test cases follow. The first line of each testcase contains a string <i>S</i>, the string Tracy writes on the whiteboard. The next line contains a single integer <i>N</i>. <i>N</i> lines follow. The <i>i</i>-th line contains a single string <i>w<sub>i</sub></i>, the <i>i</i>-th word in the dictionary.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the name of the winner of the game.</p>

<h3>Example</h3>
<pre>
<b>Input:</b>
3
codechef
2
code
chef
foo
1
bar
mississippi
4
ssissi
mippi
mi
ppi

<b>Output:</b>
Tracy
Tracy
Teddy
</pre>

<h3>Constraints</h3>
<ul>
<li>1 &lt;= <i>T</i> &lt;= 5</li>
<li>1 &lt;= <i>N</i> &lt;= 30</li>
<li>1 &lt;= |<i>S</i>| &lt;= 30</li>
<li>1 &lt;= |<i>w<sub>i</sub></i>| &lt;= 30</li>
<li><i>S</i> and <i>w<sub>i</sub></i> contain only characters 'a'-'z'</li>
</ul>    