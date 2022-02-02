---
{"languages_supported":{"0":"NA"},"title":"CUTSQRS","category":"NA","old_version":true,"problem_code":"CUTSQRS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p align="justify">
Two players take it in turns to cut off squares from a rectangle. If the lengths of the sides of the rectangle are <i>a</i> and <i>b</i> (a&lt;=b) at the beginning of a player's turn, he may cut off as many squares with a side of length <i>a</i> as he likes (but at least 1 square), provided the square he is cutting off has at least three of its sides lying on the sides of the rectangle he is trimming. After every cut, the cut off square is removed from the rectangle. When the last part of the rectangle is removed, the game ends and the person who cut it off wins.
</p>
<p>
Michael, a friend of the players', is taking down a log of the games they are playing in the form of a sequence of consecutive numbers, each number denoting how many squares a player cut off in his turn. Since the game is rather slow, Michael is getting a little bored and he has started writing a detailed analysis of the game in his notebook. For given starting dimensions a and b, he always writes down:
</p>
<div align="left">
<ul>
<li>the number of different possible game sequences,
</li><li>the number of different possible game sequences in which the starting player wins,
</li><li>the word 'first' if the starting player can win (provided he does not make any mistakes) regardless of what the other player does, and the word 'second' in all other cases.
</li></ul>
</div>
<p>
After writing for several hours Michael began to worry whether he had enough room left in his notebook for all the information he wanted to write down. Please help him answer this question.
<h3>Input</h3>
</p><p align="justify">
An integer t denoting the number of test cases, (t&lt;=10000) followed by t pairs of integers a, b, (1&lt;=a&lt;=b&lt;=10<sup>9</sup>) given in separate lines. 
</p>
<h3>Output</h3>
<p align="justify">
For each test case, output the number of characters Michael has to write down (excluding spaces).
</p>
<h3>Example</h3>
<pre>
<b>Sample input:</b>
2
1 1
2 3

<b>Sample output:</b>
7
8
</pre>
<p>
(In the first case Michael has to write '1 1 first', in the second case '2 1 second'.)
</p>    