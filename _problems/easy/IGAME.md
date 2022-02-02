---
{"languages_supported":{"0":"NA"},"title":"IGAME","category":"NA","old_version":true,"problem_code":"IGAME","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p align="justify">After a long period of relaxation Alice and Bob decided to play a game.
This time of course not a number game. The rules of the game are as follows:</p>

<p align="justify">There is a vehicle situated at the point <strong>(m, n)</strong> of a rectangular grid.
Only one corner of the rectangular grid is defined, i.e. the left-top point <strong>(0, 0)</strong>,
which is also known as the origin. The grid extends infinitely towards east and infinitely towards south.
Alice and Bob are both sitting in a vehicle, initially situated at the point <strong>(m, n)</strong>.
The game they are playing ends as soon as one of them reaches <strong>(p, q)</strong>.</p>

<p align="justify">Now, Alice and Bob have to drive the vehicle in their respective turn.
In their own turn they can move the vehicle, from <strong>(x, y)</strong> to <strong>(x', y)</strong>
or <strong>(x, y')</strong>; where <b>p ≤ x' &lt; x</b> and <b>q ≤ y' &lt; y</b>.
They can also move the vehicle to the point <strong>(x-a, y-a)</strong>, where <b>0 &lt; a ≤ min(x-p, y-q)</b>.
Also, <b>0 ≤ p &lt; m</b> and <b>0 ≤ q &lt; n</b>.
The winner is the game is the one who drives the vehicle to <strong>(p, q)</strong>.</p>

<p align="justify">Cunning Alice uses a biased coin for tossing purpose and always plays first.
It is assumed that both Alice and Bob play optimally in their respective turns.</p>

<h3>Input</h3>
<p align="justify">The first line contains a single integer T denoting the number of test cases.
T test cases follow. Each test case consists of a single line consisting of four space separated integers m, n, p, q
respectively.</p>

<h3>Output</h3>
<p align="justify">For each test case print a string - either "Alice" or "Bob" (without the quotes), denoting the winner.</p>

<h3>Constraints</h3>
<p>1 ≤ T ≤ 1000<br />
1  ≤ m, n  ≤ 1000<br />
0 ≤ p &lt; m<br />
0 ≤ q &lt; n</p>

<h3>Sample Input</h3>
<pre>2
1 1 0 0
2 4 1 2

</pre>

<h3>Sample Output</h3>
<pre>Alice
Bob

</pre>

<h3>Explanation</h3>
<p align="justify">In the second test case, initially the vehicle is at co-ordinate (2, 4).
Alice now has four possible moves. Alice can move the vehicle to position (1, 4), (1, 3), (2, 3) and (2, 2).
For all moves that Alice can do, Bob can move the vehicle to the position (1, 2), winning the game.</p>    