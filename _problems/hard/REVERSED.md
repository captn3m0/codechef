---
languages_supported:
    - NA
title: REVERSED
category: NA
old_version: true
problem_code: REVERSED
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Given three numbers A, B and C all having N digits, little Johnny needs to write a program to permute the digits of the number C so that the new number is greater than both A and B.

This problem would be so easy if Johnny's teacher didn't require that Johnny's program must be correct in both the real world and _the reversed world_. What happens once the world is reversed? One thing Johnny knows for sure is that all the numbers are also reversed. The second thing, the "greater than" relation becomes the "smaller than" relation.

For the sake of clarity, we will use aR to denote the number a in the reversed world (for instance, 113R = 311).

Thus Johnny task is now permute the digits of C so that the new number is greater than both A and B. In additional, the reverse of the new number should be smaller than both AR and BR. If there are multiple possible solutions, Johnny needs to find the smallest one.

As usual, please help Little Johnny with his task!

### Input

The first line contains a number T (about 10) which is the number of the test cases. Each test case has the following form.

The first line contains N (1 <= N <= 1000000).

The second line contains the number A.

The third line contains the number B.

The fourth line contains the number C.

Each test case's input is separated by a blank line.

### Output

For each test case, print the solution in a single line. If there is no solution, print the number -1.

### Example

<pre>
<b>Input:</b>
2

2
12
23
32

3
124
324
335

<b>Output:</b>
-1
353
</pre>