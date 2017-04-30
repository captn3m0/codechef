---
category_name: hard
problem_code: TASUFFIX
problem_name: 'Very Long Suffix Array'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: keshav_57
date_added: 15-05-2013
tags:
    - binary
    - cook36
    - hard
    - splay
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TASUFFIX'
time:
    view_start_date: 1374431400
    submit_start_date: 1374431400
    visible_start_date: 1374431400
    end_date: 1735669800
    current: 1493556868
layout: problem
---
All submissions for this problem are available. Let S = s1, s2, ...,sn be a string and let S\[i, j\] denote the substring si, si+1, ... sj. The **suffix array** A of S is an array of integers giving the starting positions of suffixes of S in lexicographical order. This means, the entry A\[i\] contains the starting position of the i-th smallest(lexicographically) suffix of S. In other words, for all 1 < i ≤ n: S\[A\[i - 1\], n\] < S\[A\[i\], n\].

Let us take an example. Suppose S = "12323". Then all suffixes of S are "12323", "2323", "323", "23", "3". If we sort the suffixes lexicographically, we get "12323", "23", "2323", "3", "323". Therefore the suffix array, which gives the starting positions of suffixes in lexicographic order, will be A = 1, 4, 2, 5, 3.

There is exactly one suffix array for each string. However, several strings can give the same suffix array. In this problem, given a suffix array A of length **N**, you have to calculate the number of strings S whose suffix array is A.

However, N can be very large, so the array A is not given directly. You should initialize the array A as A\[i\] = i for all 1 ≤ i ≤ N and apply **M** operations to it in order to obtain the desired suffix array A. Each operation can be of one of the following types:

- **0 u v**: Remove the sub-sequence A\[u,v\] and bring it to the front. After this operation, the N elements would be in the following order: 
   A\[u\], A\[u + 1\], ...
  A\[v\], A\[1\], A\[2\], ... A\[u - 1\], A\[v + 1\], A\[v + 2\], ... A\[N\]. />
- **1 u v**: Flip A\[u,v\]. After this operation, the N elements would be in the following order: 
   A\[1\], A\[2\], ... A\[u-1\], A\[v\], A\[v-1\], ... A\[u+1\], A\[u\], A\[v+1\], A\[v+2\], ... A\[N\]. />

For this problem, a string is **an array of positive integers**. Additionally, the number of different integers used in a string must be same as the largest integer in the string. For example: (1, 2, 2) and (4, 5, 1, 2, 3) are valid strings while (1, 1, 3) and (-1, 0, 1, 2) are not.

Since the result can be extremely large, you just have to print it modulo **1,000,000,007(109 + 7)**

### Input

The first line of the input contains 2 space separated integers, **N** and **M**. **N** is the length of suffix array, and **M** is the number of operations.
Each of the next **M** lines contains 3 space separated integers representing an operation of one of the two types.

### Output

Output a single line containing the number of strings corresponding to the given suffix array modulo **1,000,000,007(109 + 7)** .

### Constraints

- **1** ≤ **N** ≤ **1,000,000,000 (109)**
- ≤ **M** ≤ **100,000 (105)**
- For all operations, **1** ≤ **u** ≤ **v** ≤ **N**

### Example

```
<b>Input:</b>
4 2
1 2 3
0 3 4
<b>Output:</b>
4

```
### Explanation

The initial array is (1, 2, 3, 4).
After the first operation the array becomes (1, 3, 2, 4).
After the second operation the array becomes (2, 4, 1, 3).
The 4 possible strings are (2, 1, 2, 2), (2, 1, 3, 2), (3, 1, 3, 2), (3, 1, 4, 2).