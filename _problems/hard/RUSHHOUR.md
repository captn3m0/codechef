---
languages_supported:
    - NA
title: RUSHHOUR
category: NA
old_version: true
problem_code: RUSHHOUR
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Rush Hour is a popular puzzle game which is now available on many mobile devices.

There is a board of size M x N. The board is full of cars and trucks. Each car has size 1x2 and each truck has size 1x3. Cars and trucks can be either horizontal or vertical.

At each step, we can move a horizontal car or truck along its row if there is no other objects in its way. Similarly we can move a vertical car or truck along its column.

Among the cars, one belongs to the president. It is always horizontal. The object of the game is to get the president's car to the exit gate at the rightmost column in its row.

You need to write a solver for Rush Hour, which takes a map of the game and returns the minimum number of steps to solve it.

As an example, look at the figures below. The president's car is painted in yellow. It takes 5 steps to solve this game instance.

![](https://www.spoj.pl/content/paulmcvn:rushhour_small.png)

### Input

The first line contains the number of test cases (about 10). Each test case has the following form.

The first line contains three numbers M, N and K. M and N are the size of the board. K are the total number of cars and trucks. (6 <= M, N <= 12, 3 <= K <= 26)

Each line in the next M lines contains N characters. Each character can be '.' or 'a'..'z'. '.' stands for an empty square. 'a'..'z' represents the ID of the car of truck that occupies the square. The president's car is always 'a'.

It is guaranteed that the president's car initial position is not at the rightmost column.

The requirement of the game is guaranteed by the input, that is each object can only have size 1x2 or 1x3.

You can assume that there is always a solution and **the optimal number of steps to solve any puzzle instance given in the input is at most 10.**

Each test case's input is separated by a blank line.

### Output

For each test case, print in a single line the optimal number of steps to solve the corresponding puzzle.

### Test case generator

Note that in general, solving Rush Hour puzzle is very hard, so in this problem you are only required to solve random generated instances of the puzzle. We briefly describe how we generated the test cases.

Given M, N, K, for each car, we let it be horizontal or vertical with equal probability. The car's size is randomly picked from 2 to 3. The car's position is also chosen randomly. To make sure that a solution exists, we start with a state in which the president's car is already at the exit gate. After that, we perform some random steps (around 10000). The final state is used as the input data.

### Example

<pre>
<b>Input</b>
2

6 6 13
b.c..e
b.cdde
fghaal
fghjjl
.giikk
mmm...

6 6 10
......
.bb.cc
aad.hi
fed.hi
feg..j
f.g..j

<b>Output</b>
5
6
</pre>The first sample test case is explained in the figure.
