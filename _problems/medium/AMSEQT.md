---
category_name: medium
problem_code: AMSEQT
problem_name: 'Sequence Transmission'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: 'satej '
problem_tester: gamabunta
date_added: 17-05-2013
tags:
    - bit
    - cook34
    - dynamic
    - easy
    - satej
editorial_url: 'http://discuss.codechef.com/problems/AMSEQT'
time:
    view_start_date: 1368988200
    submit_start_date: 1368988200
    visible_start_date: 1368988200
    end_date: 1735669800
    current: 1493557455
layout: problem
---
All submissions for this problem are available.**WARNING: This problem has large input / output files. Use of faster I/O methods is recommended.**

Chef has encrypted the super secret recipe for his bitsoup into a sequence of **N** unsigned integers **A1**, **A2**, ... **AN**. Each of these are **M bit integers** - meaning, their binary representation will only have at most **M** bits.

Chef is now transmitting this recipe to the Sous Chef. He **partitions the sequence** into several **disjoint**, **contiguous** groups and sends them one by one. Each partition may contain one or more integers which are contiguous in the sequence. Chef can partition a sequence of **N** integers in many ways, but the receiving program of the Sous Chef has a constraint.

For each group of integers it receives, let **S** represent the sum of the integers in the group. The receiver program only accepts the group of integers if the **Mth least significant bit** of **S** is . See the explanation section for clarity.

Chef wants to know how many ways exist to partition the recipe such that the Sous Chef can receive it completely.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains two integers **N** and **M** denoting the length of Chef's sequence and the number of bits that are adequate to represent each number in the sequence. The second line contains **N** space-separated integers **A1**, **A2**, ... **AN** denoting the sequence.

### Output

For each test case, output a single integer denoting the number ways you can partition Chef's sequence such that the Sous Chef's receiving program will accept each partition. Since this number can be very large output this number modulo **1000000009**.

### Constraints

**1 ≤ T ≤ 10**
**1 ≤ N ≤ 200000**
**1 ≤ M ≤ 18**
**1 ≤ Ai < 2M**

### Sample

```

<b>Input:</b>
4
6 10
4 4 4 4 4 4
6 3
4 4 4 4 4 4
5 8
1 1 1 1 128
7 4
4 5 6 7 8 9 10

<b>Output:</b>
32
4
0
3


```
### Explanation

**Test Case 1.** You can partition the sequence in 32 ways. Note that the sum of all the numbers in the sequence is 24. The 10th bit in 24 is already 0. Any partition's sum will be less than or equal to 24 anyway, thus each partitioning way is valid. Thus the answer is 32.

If you don't see why the answer is 32, consider the following

- There is only 1 partition of { 4 }
- There are 2 partitions of { 4, 4 } => { {4}, {4} } and { {4,4} }
- There are 4 partitions of { 4, 4, 4 } => { {4}, {4}, {4} }, { {4}, {4,4} }, { {4,4}, {4} } and { {4,4,4} }
- There are 8 partitions of { 4, 4, 4, 4 } and so on..

**Test Case 2.**The following 4 ways are the only ways to partition the sequence so that the Sous Chef's program accepts all the partitions.

- { {4,4}, {4,4}, {4,4} } => The 3rd bit is 0 in 8, which is the sum of values in each of the partitions.
- { {4,4}, {4,4,4,4} } => The 3rd bit is 0 in 8 as well as 16, which is the sum of values in the two partitions respectively.
- { {4,4,4,4}, {4,4} }
- { {4,4,4,4,4,4} }

**Test Case 3.** There is no way you can put 128 in any partition with the given sequence such that the Sous Chef's receiver would accept the partition.

**Test Case 4.** The following 3 partitions are valid.

- { {4}, {5}, {6}, {7,8,9,10} }
- { {4}, {5}, {6,7,8}, {9,10} }
- { {4,5,6,7,8,9,10} }