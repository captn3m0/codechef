---
languages_supported:
    - NA
title: TR1
category: NA
old_version: true
problem_code: TR1
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

**The problem statement has been updated**

There are N cities in Byteland numbered 1 to N with city 1 as the capital. The road network of Byteland has a tree structure. All the roads are bi-directional. Alice and Bob are secret agents working for the Bytelandian Security Agency (BSA). Each secret agent is assigned a random city each month, where he/she must be stationed for the complete month. At the end of each month, they come to the capital to submit their reports to the head of BSA. They always take the shortest path from their city to the capital. If Alice is assigned city A and Bob is assigned city B then they meet at a city C which is common to both their routes to the capital and then travel together from C to the capital.

Alice and Bob wish to spend maximum time together in any trip. So for any pair of assigned cities (A,B) they meet at a city C such that C is the farthest city from the capital and appears in the shortest path from capital to A and capital to B. Since this happens each month they compute this for each pair of assigned cities (A,B) and store it in a matrix M, where M\[A\]\[B\] = C, the city where they meet.

The importance of a city C(according to Alice and Bob), Im(C) is defined as the number of times C appears in their matrix M. Alice and Bob are interested in finding the importance of each city. Since this output can be large, output the sum S defined as S = (sum i=1 to N) i\*Im(i) modulo 1000000007.

### Input

First line of input contains an integer t (t<=25), the number of test cases. Each test case starts with an integer N (1<=N<=10000), the number of cities
 The next N-1 lines contain two space separated integers u v (1<=u,v<=N) denoting a road from u to v.

### Output

For each test case output the required sum S

### Example

<pre><b>Input:</b><br></br>3<br></br>5<br></br>1 2<br></br>1 3<br></br>2 4<br></br>2 5<br></br>3<br></br>1 2<br></br>1 3<br></br>1<br></br><br></br><b>Output:</b><br></br>41<br></br>12<br></br>1<br></br><br></br><b>Explanation</b><br></br>For the first test case, the matrix M is:<br></br>1 1 1 1 1<br></br>1 2 1 2 2<br></br>1 1 3 1 1<br></br>1 2 1 4 2<br></br>1 2 1 2 5<br></br><br></br>and the corresponding importance array is: 15 7 1 1 1 <br></br>so the required sum is 1*15 + 2*7 + 3*1 + 4*1 + 5*1 = 41<br></br><p>For the second test case, the matrix M is:<br></br>1 1 1<br></br>1 2 1<br></br>1 1 3<br></br>and so the Importance array is: 7 1 1 <br></br>So the required sum is 1*7 + 2*1 + 3*1 = 12</p><br></br><p>For the third test case, there is only one city, so the Matrix M just has one entry 1, so S = 1</p><br></br>
</pre>