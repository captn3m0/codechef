---
languages_supported:
    - NA
title: RESN03
category: NA
old_version: true
problem_code: RESN03
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

John likes playing the game Permutation Jumping. First he writes down a permutation A of the first n numbers. Then, he chooses any cell to start on. If he is currently at cell x and hasnt visited the cell A\[x\], he jumps to cell A\[x\]. He keeps doing this till he cannot move to the cell A\[x\], because he has already visited it. In the end, he counts all the cells that he visited during the game, including the cell on which he started.

He does not want the game to go on for too long, and thus he wishes that irrespective of the choice of his starting cell, he does not ever have to visit more than K cells. On the other hand, he does not want the game to be too short either. Thus, irrespective of the choice of his starting cell, he should be able to visit atleast two cells.

Now he wonders how many permutations could he have chosen in the first place which would allow him to have the game duration as above. i.e. He should visit atleast 2 cells and atmost K cells, no matter which cell he started on.

### Input

The first line contains the number of test cases T (T &lt;= 1000). The next T lines contain 2 space seperated integers N and K. (2 &lt;= K &lt;= N &lt;= 100)

### Output

Output T lines, one corresponding to each test case. For each test case output a single integer which is the answer for the corresponding test case. Since the answer can be very large, output the answer modulo 1000000007.

### Example

<pre>
<b>Input:</b>
2
4 2
6 4

<b>Output:</b>
3
145
</pre>