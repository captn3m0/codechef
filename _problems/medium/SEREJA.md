---
category_name: medium
problem_code: SEREJA
problem_name: 'Sereja and Data Structures '
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: Rubanenko
problem_tester: laycurse
date_added: 2-08-2012
tags:
    - Rubanenko
    - dec12
    - medium
    - simple
editorial_url: 'http://discuss.codechef.com/problems/SEREJA'
time:
    view_start_date: 1355220899
    submit_start_date: 1355220899
    visible_start_date: 1355218200
    end_date: 1735669800
    current: 1493557931
layout: problem
---
All submissions for this problem are available.Sereja is a little student from the University of Kyiv. He studies computer science. He is rather experienced programmer and he knows a lot of advanced algorithms. The only thing he likes more than advanced algorithms is [segment tree data structure](http://en.wikipedia.org/wiki/Segment_tree).

Every evening he goes to the loveliest place in Kyiv - The Chef's cafe. Chef is also interested in computer science, so they often discuss different problems. Last evening Sereja told Chef following problem: given an array **A1**, **A2**, ..., **AN** of **N** integers. The task is to find the product of ranges of the segments **\[i, j\]** over 1 ≤ **i** < **j** ≤ **N**, where the range of the segment **\[i, j\]** means max(**Ai**, **Ai+1**, ..., **Aj**) - min(**Ai**, **Ai+1**, ..., **Aj**).

Both Sereja and Chef couldn't find any efficient algorithm for this problem with segment tree. They gave up thinking of it, and Chef said we may calculate this value only for a **random array**, that means **all elements of the array are generated uniformly and independently at random**. Sereja were surprised to hear that, and he wanted to know about details. However Chef is very busy at the moment, so he asked you to solve this problem for a random array.

### Input

The first line contains a single integer **N**, then **N** integers **A1**, **A2**, ..., **AN** follow on the second line.

### Output

Output a single line containing the required product modulo 1000000007 (109+7), since the answer can be very large.

### Constraints

2 ≤ **N** ≤ 100000 (105)
0 ≤ **Ai** < 1000000007 (109+7)
All test cases, except Example, are created by the method described in Test Case Generation.

### Example

<pre>
<b>Input 1:</b>
3
1 2 4

<b>Output 1:</b>
6

<b>Input 2:</b>
5
5 5 5 5 5

<b>Output 2:</b>
0

</pre>### Explanation

In **Input 1**, we should consider 3 segments **\[i, j\]** = **\[1, 2\]**, **\[2, 3\]**, **\[1, 3\]**.
 The range of segment **\[1, 2\]** is max(1,2) - min(1,2) = 1.
The range of segment **\[2, 3\]** is max(2,4) - min(2,4) = 2.
The range of segment **\[1, 3\]** is max(1,2,4) - min(1,2,4) = 3.
Therefore, we obtain the answer 1 \* 2 \* 3 = 6, and you should output 6 mod 1000000007 = 6.

In **Input 2**, we should consider 10 segments, but all ranges of such segments are 0. And, of course, the answer is 0 \* 0 \* 0 \* 0 \* 0 \* 0 \* 0 \* 0 \* 0 \* 0 = 0.

Note that Example is created by manually, so these arrays are not random arrays. It is quite unlikely that the official test cases contain an array with equal elements such as **Input 2**.

### Test Case Generation

There are 15 official test files.For every test file, **Ai** are chosen from 0 to 1000000006 (109+6) uniformly and independently at random.

The first 5 test files: **N** is chosen from 2 to 100 uniformly at random.
The next 5 test files: **N** is chosen from 2 to 100000 (105) uniformly at random.
The last 5 test files: **N** = 100000 (105)
