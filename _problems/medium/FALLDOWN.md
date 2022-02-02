---
languages_supported:
    - NA
title: FALLDOWN
category: NA
old_version: true
problem_code: FALLDOWN
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Do you know what b'ak'tun means ? Its an enormous cycle in the Mayan calendar, roughly around 400 solar years. The 13th b'ak'tun is going to end this December and our chef Remy is worried about it. What can a chef do if the world is going to end soon ? Enough of making recipes, time to visit the restaurants around the world. He prepares a list of restaurants along with their ratings. This is given as a 2D array A having R rows and C columns. A\[i\]\[j\] has the rating of the jth restaurant in the ith row. Rows are numbered 1 to R from top to bottom and columns are numbered 1 to C from left to right.

Remy can start his journey from any restaurant in the top row ( row# 1 ) and end at any restaurant in the bottom row ( row# R ). He is afraid that the world may end from top to bottom, and so he will never go up from a restaurant. He can only move left, right or down ( i.e., to cell (i,j-1) or (i,j+1) or (i+1,j) ) in each step. Along the path he takes, he sums up the ratings of all the restaurants visited. Of course, each visited restaurant's rating should be added *exactly once*, even if he visits it again along the path. Find the maximum possible sum of ratings.
( Read the Input section for details on reading / generating A )

### Input

First line contains T, number of test cases. T cases follow. In each test case, first line contains R C I, number of rows, number of columns and the method of taking input, respectively.

If I == 1, R lines follow, each containing C integers, representing the grid A

If I == 2, next line contains 4 integers X P Q M. Generate the grid A using the following method.

<pre>
Initialize, cur = X
for i : 0 to R-1
     for j : 0 to C-1
     {
         cur = ( cur * P + Q ) % M;
         A[i][j] = X - cur
     }

( * is used for multiplication and % is the modulo operator. )
<i>The writer's solution does not depend on the factors X, P, Q, M used for input generation.
They are used just to decrease the size of input files ( Max 8MB ).</i>

</pre>
### Output

For each test case, output the maximum possible sum of ratings along a path that starts in the top row and ends in the bottom row.

### Constraints

1 ≤ T ≤ 5
1 ≤ R, C ≤ 2012
-500 ≤ A\[i\]\[j\] ≤ 500
1 ≤ P, Q ≤ 1,000,000
1 &lt; X &lt; M ≤ 500

### Example

<pre>
<b>Input:</b>
2
3 5 1
1 1 -5 3 1
-1 1 1 -1 3
2 -3 2 -1 1
3 4 2
10 13 13 29

<b>Output:</b>
10
3
</pre>

**Explanation:**
The path with maximum sum of ratings in Case 1 is shown in bold 
   1  1 -5 **3** **1**   -1  **1**  **1** **-1**  **3**    2 -3  **2** -1  1  


***Warning :** "Large input / output. Be careful with certain languages. Eg: Prefer using scanf/printf to cin/cout for C++"*

***Note :** There are multiple test sets, and the judge shows the sum of the time taken over all test sets of your submission, if Accepted.*
