---
category_name: challenge
problem_code: SEAARI
problem_name: 'Sereja and Progressions'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: alex_2oo8
date_added: 7-09-2013
tags:
    - sereja
time:
    view_start_date: 1476696600
    submit_start_date: 1476696600
    visible_start_date: 1476696600
    end_date: 1735669800
    current: 1525454422
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT16/mandarin/SEAARI.pdf), [Russian](http://www.codechef.com/download/translated/OCT16/russian/SEAARI.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT16/vietnamese/SEAARI.pdf) as well.

Sereja likes [arithmetic progressions](https://en.wikipedia.org/wiki/Arithmetic_progression) a lot. An infinite arithmetic progression **(a, r)** is determined by its initial term and difference of consecutive terms, denoted by **a, r** respectively.

He defines *mutual attraction* of some array **A** of size **N** with an infinite arithmetic progression **(a, r)**, as **|A1 - a| + |A2 - (a + r)| + .. + |Ai - (a + r \* (i - 1)| + .. + |AN - (a + r \* (N - 1)|**, where **|x|** denotes [absolute value](https://en.wikipedia.org/wiki/Absolute_value) of **x**.

He has an array **A** of size **N** with him. He wants to find some infinite arithmetic progression with which its *mutual attraction* is minimized. Also, he is allowed to perform following operations on this array.

1. Swap operation: Take any two indices **i, j** of the array **A**, and swap **Ai**, **Aj**
2. Delete operation: Delete some element of the array **A**. Please note that after the deletion, the indices of array are not re-enumerated or re-adjusted.

So, you have to help Sereja in deciding how these operations should be performed on **A** and also in finding the parameters **(a, r)** of the infinite arithmetic progression. Note that Sereja can perform at max **K** swap operations and **D** delete operations.

### Scoring

For each test file, there will be a single test case.

Your score for a single test file will be *mutual attraction* of the modified array **A** and the infinite arithmetic progression provided by you, divided by the initial size of array **N**. Your target is to minimize the score.

### Input

There will be a single test case.

First line of input contains three space separated integers **N, K, D**.

Next line contains **N** space separated integers denoting array **A**.

### Output

You can print at max **K + D + 2** lines.

In the first line, print two space separated real numbers denoting **a, r**, satisfying the constraints as mentioned in constraints section.

Then, you can print at max **K + D** lines, with each line having one of the following two formats.

- Swap operation = **1 i j**: i.e., 1 followed by the indices that you want to swap.
- Delete operation = **2 i**: i.e., 2 followed by index you want to delete.

Please end your output by printing -1 in a separate line.

Please note that you should ensure that indices that you are trying to swap or delete actually exist, otherwise you will get a WA verdict. The indices should be 1 based. Also note that after the deletion operation, the indices are **not** re-enumerated. Please see example input/output section for more details. Also note that if you make more than **K** swaps or more than **D** deletions, you will get a WA verdict.

### Constraints

- **-109 ≤ Ai ≤ 109**
- **-1010 ≤ a, r ≤ 1010**

### Example

<pre><b>Input:</b>
3 1 1
1 2 3

<b>Output:</b>
0 1
2 1
1 2 3
-1
</pre>
### Explanation

In this case, the array **A** is **\[1, 2, 3\]**. Sereja can perform at max one swap and at max one deletion operation.

He first delete index 1, the new array becomes **\[1, 2, 3\]**, in which index 1 is deleted.

After that he makes a swap operation between index 2 and 3. So, at the end the array will be \[1 3 2\], where the index 1 is deleted.

In the end, the non-deleted elements in the array will be \[3, 2\]. The *Mutual attraction* of this array with infinite arithmetic progression (0, 1) will be |3 - 0| + |2 - 1| = 4. So, he will get a score of 4 / 3 = 1.3333.

### Test Generation Scheme

There are total 20 test files and four groups of test files, i.e. 5 test files per group. During the contest, score of your program will be decided by only 20% of the files, i.e. by 4 files, each from one group. However verdict of your program will be based on all the test files, i.e. in order to get an AC, your program should work correctly on all the test files.

- Group 1: **N = 100, K = 20, D = 10**
- Group 2: **N = 103, K = 300, D = 100**
- Group 3: **N = 104, K = D = 2000**
- Group 4: **N = 105, K = D = 30000**

The array **A** will be generated uniformly randomly.
