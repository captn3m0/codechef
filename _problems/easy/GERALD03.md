---
category_name: easy
problem_code: GERALD03
problem_name: 'Chef Goes Through Segments'
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
problem_author: gerald
problem_tester: rustinpiece
date_added: 13-11-2013
tags:
    - cook41
    - easy
    - gerald
    - greedy
editorial_url: 'http://discuss.codechef.com/problems/GERALD03'
time:
    view_start_date: 1387737000
    submit_start_date: 1387737000
    visible_start_date: 1387737000
    end_date: 1735669800
    current: 1493558150
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/COOK41/mandarin/GERALD03.pdf)

###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/COOK41/russian/GERALD03.docx)

### Problem Statement

Chef has a sequence of **N** segments: \[**L1**, **R1**\], \[**L2**, **R2**\], ..., \[**LN**, **RN**\]. He wants to transform the first segment to the last one (with index **N**). His plan is to do this big deal with a number of transformations: firstly he will transform
the first segment to the second one, then to the third one, then to the fourth one, and so on till **N**-th one.

Chef can use operation of a single type: shift one segment border by one unit. So, if he has segment \[**L**, **R**\], he can transform it into one of the following segments: \[**L + 1**, **R**\] (we will denote such operation with string L+), \[**L**, **R + 1**\] (will be denoted as R+), \[**L - 1**, **R**\] (L-), \[**L**, **R - 1**\] (R-). Chef doesn't like empty segments, therefore he cannot use any operation that makes a segment empty (**L = R**).

Chef really wants to transform his segment as fast as possible. Please, help him. Find the sequence with minimal number of operations that transforms his segment. If there are multiple such sequences pick the lexicographically minimal one.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. 

The first line of each test case contains a single integer **N** denoting the number of segments Chef has. 
The following **N** lines contain pairs of integers. The **i**-th line contains integers **Li**, **Ri**, denoting **i**-th Chef's segment.

### Output

For each test case print an answer - two lines. The first line should contain the minimal number of operations. The second line should contain the sequence of operations
without any whitespaces.

### Constraints

- **1** ≤ **T**, **N** ≤ **1000**.
- **-1000** ≤ **Li** < **Ri** ≤ **1000**.

The total sum of **N** values for all test cases doesn't exceed 1000.

### Example

```
<b>Input:</b>
4
3
-1 0
0 1
3 5
1
0 1
3
-2 -1
-2 -1
-2 0
4
4 6
3 5
-1 1
1 2

<b>Output:</b>
9
R+L+R+L+R+L+R+L+R+
0

1
R+
13
L-R-L-L-L-L-R-R-R-R-L+R+L+

```