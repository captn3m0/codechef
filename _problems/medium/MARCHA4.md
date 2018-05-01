---
languages_supported:
    - NA
title: MARCHA4
category: NA
old_version: true
problem_code: MARCHA4
tags:
    - NA
layout: problem
---
**The following problem appeared in the [CodeChef March '09 Challenge.](http://www.codechef.com/MARCH09/)**

Johnny was asked by his math teacher to compute _n__n_ (_n_ to the power of _n_, where _n_ is an integer), and has to read his answer out loud. This is a bit of a tiring task, since the result is probably an extremely large number, and would certainly keep Johnny occupied for a while if he were to do it honestly. But Johnny knows that the teacher will certainly get bored when listening to his answer, and will sleep through most of it! So, Johnny feels he will get away with reading only the first _k_ digits of the result before the teacher falls asleep, and then the last _k_ digits when the teacher wakes up.

Write a program to help Johnny to compute the digits he will need to read out.

### Input

The first line contains _t_, the number of test cases (about 30000). Then _t_ test cases follow.

Each test case consists of one line containing two numbers _n_ and _k_ (1 ≤ _n_ ≤ 109, 1 ≤ k ≤ 9). It is guaranteed that _k_ is not more than the number of digits of _nn_.

### Output

For each test case, print out one line containing two numbers, separated by a space, which are the first and the last _k_ digits of _nn_.

### Example

<pre>
<b>Input</b>
2
4 2
9 3

<b>Output</b>
25 56
387 489
</pre>