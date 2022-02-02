---
{"languages_supported":{"0":"NA"},"title":"NUKES","category":"NA","old_version":true,"problem_code":"NUKES","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
There are K nuclear reactor chambers labelled from 0 to K-1. Particles are bombarded onto chamber 0. The particles keep collecting in the chamber 0. However if at any time, there are more than N particles in a chamber, a reaction will cause 1 particle to move to the immediate next chamber(if current chamber is 0, then to chamber number 1), and all the particles in the current    chamber will be be destroyed and same continues till no chamber has number of particles greater than N. Given K,N and the total number of particles bombarded (A), find the final distribution of particles in the K chambers. Particles are bombarded one at a time. After one particle is bombarded, the set of reactions, as described, take place. After all reactions are over, the next particle is bombarded. If a particle is going out from the last chamber, it has nowhere to go and is lost.

<h3>Input</h3>
</p><p>
The input will consist of one line containing three numbers A,N and K separated by spaces.
A will be between 0 and 1000000000 inclusive.
N will be between 0 and 100 inclusive.
K will be between 1 and 100 inclusive.
All chambers start off with zero particles initially.

<h3>Output</h3>
</p><p>
Consists of K numbers on one line followed by a newline. The first number is the number of particles in chamber 0, the second number is the number of particles in chamber 1 and so on.

<h3>Example</h3>

<pre>
<b>Input:</b>
3 1 3
<b>Output:</b>
1 1 0
</pre>

<b>Explanation</b>
Total of 3 particles are bombarded. After particle 1 is bombarded, the chambers have particle distribution as
 "1 0 0". After second particle is bombarded, number of particles in chamber 0 becomes 2 which is greater
 than 1. So, num of particles in chamber 0 becomes 0 and in chamber 1 becomes 1. So now distribution is
 "0 1 0". After the 3rd particle is bombarded, chamber 0 gets 1 particle and so distribution is "1 1 0" after all
particles are bombarded one by one.</p>    