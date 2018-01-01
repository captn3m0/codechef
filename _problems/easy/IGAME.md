---
languages_supported:
    - NA
title: IGAME
category: NA
old_version: true
problem_code: IGAME
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

After a long period of relaxation Alice and Bob decided to play a game. This time of course not a number game. The rules of the game are as follows:

There is a vehicle situated at the point **(m, n)** of a rectangular grid. Only one corner of the rectangular grid is defined, i.e. the left-top point **(0, 0)**, which is also known as the origin. The grid extends infinitely towards east and infinitely towards south. Alice and Bob are both sitting in a vehicle, initially situated at the point **(m, n)**. The game they are playing ends as soon as one of them reaches **(p, q)**.

Now, Alice and Bob have to drive the vehicle in their respective turn. In their own turn they can move the vehicle, from **(x, y)** to **(x', y)**or **(x, y')**; where **p ≤ x' < x** and **q ≤ y' < y**. They can also move the vehicle to the point **(x-a, y-a)**, where **0 < a ≤ min(x-p, y-q)**. Also, **0 ≤ p < m** and **0 ≤ q < n**. The winner is the game is the one who drives the vehicle to **(p, q)**.

Cunning Alice uses a biased coin for tossing purpose and always plays first. It is assumed that both Alice and Bob play optimally in their respective turns.

### Input

The first line contains a single integer T denoting the number of test cases. T test cases follow. Each test case consists of a single line consisting of four space separated integers m, n, p, q respectively.

### Output

For each test case print a string - either "Alice" or "Bob" (without the quotes), denoting the winner.

### Constraints

1 ≤ T ≤ 1000
1 ≤ m, n ≤ 1000
0 ≤ p < m
0 ≤ q < n

### Sample Input

<pre>2
1 1 0 0
2 4 1 2


</pre>### Sample Output
<pre>Alice
Bob


</pre>### Explanation
In the second test case, initially the vehicle is at co-ordinate (2, 4). Alice now has four possible moves. Alice can move the vehicle to position (1, 4), (1, 3), (2, 3) and (2, 2). For all moves that Alice can do, Bob can move the vehicle to the position (1, 2), winning the game.
