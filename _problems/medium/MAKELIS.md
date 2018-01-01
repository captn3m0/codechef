---
category_name: medium
problem_code: MAKELIS
problem_name: 'Longest Increasing Subsequences'
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
problem_author: kevinsogo
problem_tester: 'xcwgf666,antoniuk1'
date_added: 30-05-2016
tags:
    - dynamic
    - kevinsogo
    - lis
    - medium
    - snckpa16
    - subsequence
editorial_url: 'http://discuss.codechef.com/problems/MAKELIS'
time:
    view_start_date: 1465140600
    submit_start_date: 1465140600
    visible_start_date: 1465140600
    end_date: 1735669800
    current: 1493557923
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/SNCKPA16/mandarin/MAKELIS.pdf), [Russian](/download/translated/SNCKPA16/russian/MAKELIS.pdf) and [Vietnamese](/download/translated/SNCKPA16/vietnamese/MAKELIS.pdf) as well.

Chef recently learned about the classic **Longest Increasing Subsequence** problem. However, Chef found out that while the _length_ of the longest increasing subsequence is unique, the longest increasing subsequence itself is not necessarily unique; for example, in the array **\[1, 3, 2, 4\]**, there are two longest increasing subsequences: **\[1, 3, 4\]** and **\[1, 2, 4\]**.

Chef decided to investigate on this more, and now he has sufficient mastery in it that he was able to come up with a problem:

Given an integer **K**, output an integer **N** and a _permutation_ of the array **\[1, 2, ..., N\]** such that there are **exactly** **K** longest increasing subsequences. Chef also requires that **1** ≤ **N** ≤ **100**, otherwise he found the problem is too easy.

In case there are multiple possible answers, any one will be accepted.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

Each test case consists of a single line containing a single integer **K**.

### Output

For each test case, output two lines. The first line contains a single integer, **N**. The second line contains **N** space separated integers denoting the permutation of **\[1,2,...,N\]**.

### Constraints

- **1** ≤ **T** ≤ **2×104**
- **1** ≤ **K** ≤ **105**
 
### Example

 ```
<b>Input:</b>
<tt>2
1
2
</tt>
<b>Output:</b>
<tt>5
1 2 3 4 5
4
1 3 2 4
</tt>
<pre>### Explanation
**Example case 1.** Here, **K** = 1. The array **\[1, 2, 3, 4, 5\]** indeed contains exactly one longest increasing subsequence: the whole sequence itself.

**Example case 2.** Here, **K** = 2. As explained in the problem statement, the array **\[1, 3, 2, 4\]** contains exactly two longest increasing subsequences: **\[1, 3, 4\]** and **\[1, 2, 4\]**.
