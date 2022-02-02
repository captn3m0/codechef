---
{"languages_supported":{"0":"NA"},"title":"DCE01","category":"NA","old_version":true,"problem_code":"DCE01","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Under the moon light, over the smooth dark water surface, Titanic was sailing along. Quite beautifully, wih sparkling light, it seemed to be flying.<br />
But air does not have ice bergs. <br />
A sudden crashing sound and a piece of ice floating by. But the depth is far greater than what it looks on the surface. <br />
Our ship is hit and has taken serious damages. The iceberg has damaged one of the sectors in the lowermost level. ( Where were the Lookers looking from the Look Out?? !! )
<br />
The captain has assigned you the job of finding the total time in sinking of the ship. <br />
The ship is considered sunk only when all the sectors at all levels are drowned completely in water. <br />

A ship is represented in sectors as below: <br />
<pre>
+ + + + +     
 + + + +
  + + +
</pre><br />
n is the number of sectors in the topmost level, k is the number of levels. <br />

The first(topmost) level contains n sectors, 2nd contains n-1 sectors, and the k-th(lowermost) sector contains n-k+1 sectors.<br />
A sector can only drown when one of the following conditions are met: <br />
* a neighbor of the sector is completely drowned. <br />
* both the sectors under a sector are completely drowned. <br />
<pre>
   +  a  +
     b  c  
</pre>

 "a" will drown when both "b" and "c" are drowned.<br />


<h3>Input</h3>
</p><p>The first line contains the number of test cases (about 10). t test cases follow. <br />
For each test case, the first line contains three integers n(&lt;=1000), k(
The next k lines contain the integers denoting the time taken for the sectors in k-th level to drown completely.<br />

<h3>Output</h3>
</p><p>Display t lines each having the single integer, the total time after which, the ship will be completely submerged in water.

<h3>Example</h3>

<pre>
<b>Input:</b>
1
7 2 3
2 3 1 7 5 9 6
4 6 5 4 7 2


<b>Output:</b>
33
</pre>
<br /><br />
<b>Explanation:</b>
The sinking time of all the sectors for this example are:
<pre>
17  15  12 16 21  27  33
  15  11   5   9  16  18
</pre>
<br />Hence the answer 33.</p>    