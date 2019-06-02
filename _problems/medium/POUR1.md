---
languages_supported:
    - NA
title: POUR1
category: NA
old_version: true
problem_code: POUR1
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 


Given two vessels, one of which can accommodate *a* liters of water and the other which can accommodate *b* liters of water, determine the number of steps required to obtain exactly *c* liters of water in one of the vessels.


At the beginning both vessels are empty. The following operations are counted as 'steps':

- emptying a vessel,
- filling a vessel,
- pouring water from one vessel to the other, without spilling, until one of the vessels is either full or empty.



### Input


An integer *t*, 1<=*t*<=100, denoting the number of test cases, followed by *t* sets of input data, each consisting of three positive integers a (the number of liters the first container can hold), b (the number of liters the second container can hold), and c (the final amount of liters of water one vessel should contain), not larger than 40000, given in separate lines.

### Output


For each set of input data, output the minimum number of steps required to obtain c liters, or -1 if this is impossible.

### Example

Sample input:

<pre>2
5
2
3
2
3
4
</pre>
Sample output:

<pre>
2
-1
</pre>