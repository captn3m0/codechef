---
category_name: medium
problem_code: COMB4SUM
problem_name: 'Adding Special Sum'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: devuy11
problem_tester: adurysk
date_added: 9-06-2015
tags:
    - cook60
    - devuy11
    - easy
editorial_url: 'http://discuss.codechef.com/problems/COMB4SUM'
time:
    view_start_date: 1437330652
    submit_start_date: 1437330652
    visible_start_date: 1437330600
    end_date: 1735669800
    current: 1493557596
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/COOK60/mandarin/COMB4SUM.pdf) and [Russian](/download/translated/COOK60/russian/COMB4SUM.pdf) as well.

**Special Sum** of **4** numbers **(a, b, c, d)** is defined as:

 ```
<b>|a+b-c-d| + |a+c-b-d| + |a+d-b-c| + |c+d-a-b| + |b+d-a-c| + |b+c-a-d|</b>

<pre>where **|x|** denotes absolute value of **x**.
### Read problems statements in [Mandarin Chinese](/download/translated/COOK60/mandarin/COMB4SUM.pdf) and [Russian](/download/translated/COOK60/russian/COMB4SUM.pdf) as well.

**Special Sum** of **4** numbers **(a, b, c, d)** is defined as:

 ```
<b>|a+b-c-d| + |a+c-b-d| + |a+d-b-c| + |c+d-a-b| + |b+d-a-c| + |b+c-a-d|</b>

</pre>where **|x|** denotes absolute value of **x**.
Given an array **A** of size **N**, you need to find the sum of **Special Sum** of numbers taken over all quadruples of different indices of the array. 
 ![](https://s3.amazonaws.com/codechef_shared/download/specialsum.png)

### Input

First line contains **T**, the number of test cases to follow.

First line of each test case contains the only integer **N**.

Second line of each test case contains the array as **N** space separated integers.

### Output

For each test case output the sum as explained above.

### Constraints

- 1 ≤ **T** ≤ 100
- 4 ≤ **N** ≤ 1000
- 1 ≤ Elements of the array ≤ 105
- 1 ≤ Sum of **N** over all test case ≤ 2000
 
### Example

 ```
<b>Input:</b>
3
4
1 2 3 3
5
1 2 3 4 5
6
9 18 28 23 12 9

<b>Output:</b>
10
76
1176

<pre>### Explanation:
Test Case 1: SpecialSum(1,2,3,3) = 10 .

Test Case 2: SpecialSum(1,2,3,4) + SpecialSum(1,2,3,5) + SpecialSum(1,2,4,5)+ SpecialSum(1,3,4,5) + SpecialSum(2,3,4,5) are called.
