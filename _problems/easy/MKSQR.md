---
languages_supported:
    - NA
title: MKSQR
category: NA
old_version: true
problem_code: MKSQR
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

### Statement

You are give a set of 2-d vectors (x,y) \[ -10^8 ≤ x,y ≤ 10^8, x ≠ y \] of size n (1 ≤ n ≤ 50000 ). Lets denote the ith vector as vi. 
You are to determine if the following system of equations has a solution : 
 a1\*v1 + a2\*v2 + a3\*v3 + ... ai\*v1 + ... an\*vn = (k,k) for some arbitrary k.  
All ai's are non-negative integers \[ 0 ≤ ai ≤ 10^16 \] and 
ALL ai's CANNOT BE ZERO ;). 
In other words, you need to find some linear combination of these vectors with positive coefficient such that you end up with a vector(a,b) with a=b.

### Input

First line of the input contains an integer t ( 1 ≤ t ≤ 100 ) which denotes the number of test cases to follow. 
For each test case, the first line contains n ( number of vectors in the set) . n lines follow, each containing a pair of space separated integers a and b which denote the vector(a,b).

### Output

Output should contain exactly t lines, with "YES" or "NO" ( without the quotes - see the sample test case for more details ).

### Sample Input

<pre>
2
3
0 1
-1 0
1 0

4
1 2
10 -6
-5 -1
1 -1
</pre>### Sample Output

<pre>
YES
YES
</pre>### Explanation

Test case 1 : a1 = 0 , a2 = 1, a3 = 1. 
Test case 2 : a1 = 2 , a2 = 0 , a3 = 1, a4 = 3.
