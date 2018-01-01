---
languages_supported:
    - NA
title: TREES
category: NA
old_version: true
problem_code: TREES
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Given a tree, you need to count how many subtrees exist such that the length of the longest path in the subtree is at most K.

Input :

The first line contains the number of test cases T. T test cases follow. For each test case, the first line contains N and K. The following N - 1 lines contain two integers ai and bi, indicating an edge between nodes ai and bi in the tree. There is a blank line after each test case. 

Output :

Output T lines, one corresponding to each test case, containing the required answer.

<pre>
Sample Input :
2
3 1
0 1
1 2

6 3
0 1
1 2
2 3
2 4
3 5


</pre><pre>
Sample Output :
5
23


</pre><pre>
Constraints :
1 <= T <= 2000
2 <= N <= 60
0 <= ai,bi < N
1 <= K <= N - 1

</pre>