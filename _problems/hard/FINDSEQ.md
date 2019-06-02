---
languages_supported:
    - NA
title: FINDSEQ
category: NA
old_version: true
problem_code: FINDSEQ
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Given an array **A** of **N** integers **A\[0\], A\[1\], ..., A\[N-1\]** and a string **B** which is a permutation of **"12345"**. 
You have to find a subsequence of 5 elements from **A** having **distinct values** such that their relative order is same as **B**. 
 Meaning that, if **(i0, i1, i2, i3, i4)** are the indexes of such a subsequence  **(0 <= i0 < i1 < i2 < i3 < i4 < N)** then:

3. A\[i0\] is the B\[0\]-th smallest element among the 5 numbers.
4. A\[i1\] is the B\[1\]-th smallest element among the 5 numbers.
5. A\[i2\] is the B\[2\]-th smallest element among the 5 numbers.
6. A\[i3\] is the B\[3\]-th smallest element among the 5 numbers.
7. A\[i4\] is the B\[4\]-th smallest element among the 5 numbers.
### Input

The first line of input contains **T(<=60)** which is the number of tests cases. The first line of each test case will be an integer **N (5<=N<=1000)** and a string **B** containing a permutation of **"12345"**. Next line will contain **N** integers **A\[0\], A\[1\], ..., A\[N-1\]**. Each of them will be between **-109 and +109** (inclusive).

### Output

For each test case output five space separated integers in ascending order which are the indexes **(i0, i1, i2, i3, i4)** of a five length subsequence described before. You may output any solution. If there is no solution just output "-1" without quotes.

### Example

<pre><b>Input:</b>
2
7 32145
6 17 5 3 13 8 10
7 12345
10 20 30 40 40 20 10

<b>Output:</b>
0 2 3 5 6
-1
</pre>


 **Explanation of 1st sample:** {0, 2, 3, 5, 6} is a valid solution because the values of those indexes {6, 5, 3, 8, 10} will have ranks {3, 2, 1, 4, 5} after sorting. But {0, 2, 3, 4, 5} is not a solution as the values {6, 5, 3, 13, 8} will have ranks {3, 2, 1, 5, 4} after sorting. 
 **Explanation of 2nd sample:** There is no five length subsequence in the array that will have ranks {1, 2, 3, 4, 5} after sorting.
