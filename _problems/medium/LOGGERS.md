---
{"languages_supported":{"0":"NA"},"title":"LOGGERS","category":"NA","old_version":true,"problem_code":"LOGGERS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Logging can be a very mundane job, but Alice and Bob have devised a game to help them
pass the time.  They take turns choosing a log, and cutting it into 2 smaller logs.
The sum of the lengths of the 2 logs equals the length of the original log.  The only
restriction is that neither of the resulting logs may be shorter than 1 meter in length (but
exactly 1 meter is fine).  In other words, non-integer lengths are allowed.  Alice makes the first cut, and the first logger who cannot
make a legal cut loses.</p>

<h3>Input</h3>
<p>Input begins with an integer T, the number of test cases (less than 450).  T test cases
follow, each on its own line.  Each test case begins with an integer N, the number of
logs at the start of the game.  N integers follow, giving the initial lengths of the logs.
There are at most 7 logs, and the total length of the logs will not exceed 250 meters.
Note that the initial lengths of the logs are integers, but logs may be cut to non-integer lengths.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the name of the winner of the game,
assuming both loggers choose their cuts optimally.</p>

<h3>Sample Input</h3>
<pre>3
1 2
2 3 4
3 7 8 9
</pre>

<h3>Sample Output</h3>
<pre>Alice
Alice
Bob
</pre>    