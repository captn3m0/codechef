---
{"languages_supported":{"0":"NA"},"title":"BIGPIZA","category":"NA","old_version":true,"problem_code":"BIGPIZA","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p align="justify">Did you know that the people of America eat around 100 acres of pizza per day ? Having read this fact on internet, two chefs from the Elephant city, Arjuna and Bhima are set to make pizza popular in India. They organized a social awareness camp, where <b>N</b> people ( other than these two ) sit around a large pizza. To make it more interesting, they make some pairs among these N people and the two persons in a pair, feed each other.<br />
</p><p align="justify">Each person should be a part of at most one pair and most importantly, to make feeding easy, any two pairs should not cross each other ( see figure for more clarity ). Arjuna and Bhima decided to play a game on making the pairs. In his turn, a player makes a pair ( selects two persons, as long as its valid ) and this pair start feeding each other. Arjuna and Bhima take turns alternately, by making a pair in each turn, and they  play optimally ( see Notes for more clarity ). The one who can not make a pair in his turn, loses. Given N, find who wins the game, if Arjuna starts first. <br />
<img src="http://farm6.static.flickr.com/5142/5702697471_007b748139.jpg" width="500" height="213" />

<h3>Notes</h3><ul><li>'Optimally' means, if there is a possible move a person can take in his turn that can make him win finally, he will always take that. You can assume both are very intelligent. </li></ul>
<br />
<h3>Input</h3>
</p><p>First line contains an integer T ( number of test cases, around 1000 ). Each of the next T lines contains an integer N ( 2 &lt;= N &lt;= 10000 )

<h3>Output</h3>
</p><p>For each test case, output the name of the winner ( either "Arjuna" or "Bhima" ( without quotes ) ) in a new line.

<h3>Example</h3>

<pre>
<b>Input:</b>
4
2
4
5
6

<b>Output:</b>
Arjuna
Arjuna
Bhima
Arjuna
</pre>
<br />
<b>Explanation:</b><br /><br />
Let the people around the table are numbered 1, 2, ... , N in clock-wise order as shown in the image <br /><br />
Case 1 : N = 2. Only two persons and Arjuna makes the only possible pair (1,2)<br /><br />
Case 2 : N = 4. Arjuna can make the pair (1,3). Bhima can not make any more pairs ( without crossing the pair (1,3) )<br /><br />
Case 3 : N = 5. No matter which pair Arjuna makes first, Bhima can always make one more pair, and Arjuna can not make any further<br /><br /></p>    