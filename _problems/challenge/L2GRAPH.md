---
contest_code: CHALLENGE
contest_name: null
problem_code: L2GRAPH
problem_name: 'Graphs in Euclidean Space'
languages_supported:
    - ''
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: friggstad
problem_tester: rajivka
date_added: 4-03-2011
time:
    view_start_date: 1302601646
    submit_start_date: 1302601646
    visible_start_date: 1302601646
    end_date: 1735669800
    current: 1497589294
tags:
    - NA
layout: problem
---
All submissions for this problem are available.The Chef is a bit tired of graphs. He has spent far too many days calculating shortest paths, finding bipartite matchings, minimum cuts, and optimizing over NP-hard problems. He needs a break. Unfortunately for him, the food services industry doesn't take breaks. Once again, the Chef has to navigate through an undirected graph to keep his business going.

In this particular problem, the layout of edges in the graph doesn't matter very much. All that really matters is the distances between pairs of nodes. Given this, you have a great idea that will help the Chef not worry about graphs at all during this latest task. Rather than presenting the graph to the Chef, you will present something else.

After some thought, you have settled on the following. You will present the nodes of the graph as distinct points in d-dimensional Euclidean space. Each node v will be represented by a d-tuple of numbers pv = (xv,1, ..., xv,d). The distance between two points is the usual Euclidean distance in d-dimensional space. That is, the distance between two points pu and pv representing nodes u and v is the square root of (xu,1 - xv,1)2 + ... + (xu,d - xv,d)2.

The quality of such an assignment of nodes into points in Euclidean space is measured as follows. Let a(u,v) be the length of the shortest path connecting node u to node v in the graph and let b(u,v) be the distance between points pu and pv in Euclidean space. Define K as the minimum value of b(u,v)/a(u,v) over all pairs of distinct nodes (u,v). Similarily, define L as the maximum value of b(u,v)/a(u,v) over all pairs of distinct nodes (u,v). The quality of the solution is then d\*L/K.

The idea behind this measurement is as follows. We want the distances between nodes in Euclidean space to be close to their distances in the original graph. So, K measures the greatest "contraction" between nodes when they are mapped into the Euclidean space. In the same way, L measures the greatest "stretch" between nodes. We put quotes around "contraction" and "stretch" because it could be that K > 1 or L Input

The first line consists of a single integer T ≤ 30 indicating the number of test cases to follow. Each test case begins with an integer n between 2 and 300. Then n lines follow, each containing n integers. This will be such that the j'th integer on the i'th row describes the distance of the shortest path between nodes i and j in the original graph. For i = j, this distance will be 0 and for i ≠ j this distance will be at least 1 and at most 10,000. Furthermore, the distance between i and j is equal to the distance between j and i because the graph is undirected. Since these represent shortest path distances, we also have that the distance from i to j is at most the distance from i to k plus the distance from k to j for any three nodes i,j,k.

### Output

For each test case you are to output n+1 lines. The first line contains a single integer d which must be between 1 and 20. Then n lines follow where the i'th such line contains d integers describing the coordinates of the i'th point in Euclidean space. Each of these d integers must have absolute value at most 1,000,000. Also, each of these n points must be distinct.

To emphasize, any output that conforms to this output specification will be considered valid. The score for this output will be calculated as described above.

### Scoring

Each test case will be given a score d\*L/K where d is the dimension provided in the output and K and L will be calculated in the manner described in the problem statement. The score for all test cases in a test file is simply the sum of the scores of each test case. ### Example

<pre>
<b>Input:</b>
2
3
0 1 2
1 0 2
2 2 0
4
0 10 13 14
10 0 11 18
13 11 0 15
14 18 15 0


<b>Output:</b>
2
2 0
0 2
0 0
1
0
1
2
3

</pre>### Explanation Of Sample Data

The provided answers are certainly not optimal for either test case, but they are valid solutions according to the output specification and such output would be accepted. The score for this output would be as follows.

In the first test case, we would have K = 1 since the Euclidean distance from the point representing node 2 to the points representing either 0 or 1 is exactly 2 and the Euclidean distance between the points representing nodes 0 and 1 exceeds 1. We also have L = sqrt(8)/1 since sqrt(8) is the distance between the points representing nodes 0 and 1 and 1 is distance between nodes 0 and 1 in the original graph. Thus, the score for this case is d\*L/K = 2\*sqrt(8) = 5.6568542.

In the second test case, the least ratio of Euclidean distance to original graph distance is between nodes 2 and 3. Their Euclidean distance is 1 and their original graph distance is 15 so K = 1/15. So, after scaling all Euclidean distance values by K, the worst graph distance to Euclidean distance ratio is between nodes 0 and 3. Their original graph distance was 14 and their Euclidean distance is only 3, so the value L is 3/14. Since d = 1, then the score for this test case is simply d\*K/L = 1\*3/14\*15 = 3.2142857.

### Test Data

There are roughly three types of test data. Some are hand-crafted to cause certain heuristics to perform poorly. Some are randomly generated from a variety of distributions. Some are known "worst-case" examples of graphs which cannot be represented very well in Euclidean space.
