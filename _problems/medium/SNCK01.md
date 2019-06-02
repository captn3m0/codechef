---
languages_supported:
    - NA
title: SNCK01
category: NA
old_version: true
problem_code: SNCK01
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

<pre><b>[Problem Idea : Varun Jalan]</b>
</pre>
Two players A and B play the following game.

1\) First, a matrix M of size N\*M is chosen, and filled with non-zero numbers.

2\) Player A starts the game and the players play alternately.

3\) In his turn, a player chooses any row which has atleast one non zero nuumber in it. In this row, the leftmost non zero number is chosen. Let this number be K. The player subtracts any number between 1 and K inclusive from it.

4\) The game ends when all the numbers in the matrix M are 0.

5\) The player who plays last wins the game.

Given N,M and the initial matrix, determine who wins the game.

Assume that both players play optimally.

### Input:

The first line contains the number of test cases T.

Each test case consists of 2 numbers N and M. There follow N lines each having M integers. The jth number on the ith line is the number M\[i\]\[j\].

There is a blank line between consecutive test cases.

### Output:

Output T lines, one for each case. Output "FIRST" if player A wins, else output "SECOND".

### Constraints :

T <= 1000

1 <= N,M <= 50

The initial matrix values are between 1 and 50 inclusive.

Time limit : 2 seconds.

### Sample Input :

<pre>3
2 2
1 1
1 1

1 3
2 1 1

2 2
3 2
3 2

</pre>
### Sample Output:

<pre>SECOND
FIRST
SECOND
<br></br><br></br><br></br>
</pre>