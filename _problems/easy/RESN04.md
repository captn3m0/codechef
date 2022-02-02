---
{"languages_supported":{"0":"NA"},"title":"RESN04","category":"NA","old_version":true,"problem_code":"RESN04","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
Alice and Bob play the following game :



There are N piles of stones with Si stones in the ith pile. Piles are numbered from 1 to N. Alice and Bob play alternately, with Alice starting. In a turn, the player chooses any pile i which has atleast i stones in it, and removes exactly i stones from it. The game ends when there is no such pile. The player who plays last wins the game. Assuming Alice and Bob play optimally, who will win the game?

<h3>Input</h3>
</p><p>

The first line contains the number of test cases T (&lt;= 100). There follow 2T lines, 2 per test case. The first line of each test case conains N (&lt;= 100), the number of piles. The second line contains N space seperated integers, specifying the number of stones in pile 1, pile 2, ..., pile N. There will be atleast 1 and atmost 1000 stones in any pile.
<h3>Output</h3>
</p><p>
Output T lines, one per test case. For each test case, output "ALICE" if Alice wins the game, and "BOB" if Bob wins the game.
<h3>Example</h3>

<pre>
<b>Input:</b>
2
1
1
2
1 1

<b>Output:</b>
ALICE
ALICE
</pre></p>    