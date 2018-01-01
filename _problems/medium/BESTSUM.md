---
languages_supported:
    - NA
title: BESTSUM
category: NA
old_version: true
problem_code: BESTSUM
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

 Given a sequence of positive integers _a1_, _a2_, , _aN_, and 1 _i_ _j_ _N_, the partial sum from _i_ to _j_ is _ai_ + _ai+1_ + + _aj_.

 In this problem, you will be given such a sequence and two integers _P_ and _K_. Your task is to find the smallest partial sum modulo _P_ that is at least _K_.

For example, consider the following sequence of integers:

<pre>
    12     13     15     11     16     26     11


</pre> Here _N_ = 7. Suppose _K_ = 2 and _P_ = 17. Then, the answer is 2 because 11+16+26 = 53 and 53 mod 17 is 2. On the other hand, if _K_ = 0 the answer is 0 since 15 + 11 + 16 + 26 = 68 and 68 mod 17 is 0.
Input format

The first line contains three integers _N_, _K_ and _P_. This is followed by _N_ lines each containing a single integer.

You may assume 1 _N_ 100000.

Output format

A single integer indicating the minimum possible segment sum modulo _P_ that is at least _K_.

Example:

Sample Input

<pre>
7 2 17
12
13
15
11
16
26
11

</pre>Sample Output
<pre>
2

</pre>