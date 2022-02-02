---
{"languages_supported":{"0":"NA"},"title":"INSOMA2","category":"NA","old_version":true,"problem_code":"INSOMA2","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p>Magazines and newspapers often have letter matrices in which certain words need to be located. Umesh, a puzzle fanatic at IIT Roorkee, had an idea for a new kind of searching puzzle. In the letter matrix provided, words can be located along any set of diagonals, with repetition of past selected letters.</p>
<p>For example, in the letter matrix:</p>
<p> </p>
<pre>B X A X X<br />X A X X X<br />X B B X X<br />X A X A X<br />X X B X X<br /><br /><br /></pre><p> </p>
<p>The string ABA can be found in 14 different ways – corresponding to the following locations:</p>
<p> </p>
<pre>A	        B	        A<br />(1,1)	(0,0)	(1,1)<br />(1,1)	(2,2)	(3,1)<br />(1,1)	(2,2)	(3,3)<br />(1,1)	(2,2)	(1,1)<br />(3,1)	(2,2)	(3,1)<br />(3,1)	(2,2)	(3,3)<br />(3,1)	(4,2)	(3,1)<br />(3,1)	(4,2)	(3,3)<br />(3,1)	(2,2)	(1,1)<br />(3,3)	(2,2)	(3,3)<br />(3,3)	(2,2)	(1,1)<br />(3,3)	(2,2)	(3,1)<br />(3,3)	(4,2)	(3,1)<br />(3,3)	(4,2)	(3,3)<br /></pre><p> </p>
<p> So, given a matrix of size NxN, you need to find out the total number of locations of a particular string. The input and output formats are as follows:</p>
<h3>Input</h3>
<p>Line 1: N. 1 &lt;= N &lt;= 1000<br /> Line 2 to N+1: Elements of the NxN matrix in row major order (separated by a space)<br /> Line N+2: The string to search. Maximum length of this string will be N2.</p>
<h3>Output</h3>
<p>Line 1: The number of ways in which the string can be found in the matrix.</p>
<h3>Example</h3>
<pre><b>Input:</b><br />5<br />B X A X X<br />X A X X X<br />X B B X X<br />X A X A X<br />X X B X X<br />ABA<br /><br /><b>Output:</b><br />14<br /></pre><p>
</p>    