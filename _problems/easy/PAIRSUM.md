---
languages_supported:
    - NA
title: PAIRSUM
category: NA
old_version: true
problem_code: PAIRSUM
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

We call an array of integers X of size N good if it can be partitioned into 2 arrays of size n/2, say p1\[\] and p2\[\], such that p1\[0\] + p2\[0\] = p1\[1\] + p2\[1\] = p1\[2\] + p2\[2\] = ... . Given an array Y, determine the size of its largest subset which is a good array.

### Input

The first line contains the integer N. The next line contains N space separated integers, which are the elements of the array X.

### Output

One number which is the size of the greatest subset as mentioned in the problem statement.

### Example

<pre>
<b>Input:</b>
6

1 4 2 3 8 10 
<b>Output:</b>
4
<b>Explanation:</b>
The array {1,4,2,3} is good, since you can form p1[] = {1,2} and p2[] = {4,3}. (satisfying 1 + 4 = 2 + 3)


</pre>