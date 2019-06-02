---
category_name: medium
problem_code: LISLDS
problem_name: 'LIS and LDS'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: kevinsogo
problem_tester: 'kevinsogo,xcwgf666'
date_added: 7-06-2016
tags:
    - kevinsogo
    - lis
    - medium
    - snckpb16
editorial_url: 'http://discuss.codechef.com/problems/LISLDS'
time:
    view_start_date: 1465831800
    submit_start_date: 1465831800
    visible_start_date: 1465831800
    end_date: 1735669800
    current: 1493557755
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPB16/mandarin/LISLDS.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPB16/russian/LISLDS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPB16/vietnamese/LISLDS.pdf) as well.

Chef is very fascinated by the **Longest Increasing Subsequence** problem. He continues to find many interesting things about them. Along the way he also learned about **Longest Decreasing Subsequence** problem.

Once again, Chef has come up with another problem involving them:

Given three integers **A**, **B** and **N**, output a *permutation* of **\[1,2,...,N\]** such that length of the longest increasing subsequence in the permutation is **A** and the length of the longest decreasing subsequence is **B**.

In case there are multiple possible answers, any one of them will be accepted.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

Each test case consists of a single line containing three space separated integers **N**, **A** and **B**.

### Output

For each test case, output a single line containing **N** space separated integers, denoting the permutation of **\[1, 2, ..., N\]**. If no such permutation exists, output **-1** instead.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **N** ≤ **105**
- The sum of the **N**s over all the test cases in a single test file is ≤ **106**
- **1** ≤ **A**, **B** ≤ **N**

### Example

<pre><b>Input:</b>
<tt>2
6 3 2
4 3 3</tt>

<b>Output:</b>
<tt>3 5 1 6 2 4
-1</tt>
</pre>
### Explanation

**Example case 1.** In the array **\[3, 5, 1, 6, 2, 4\]**, the longest increasing subsequence has length **3** (e.g. **\[3,5,6\]**), and the longest decreasing subsequence has length **2** (e.g. **\[3, 2\]**).

**Example case 2.** You can check that no permutation of **\[1, 2, 3, 4\]** has longest increasing subsequence and longest decreasing subsequence of length **3** at the same time.
