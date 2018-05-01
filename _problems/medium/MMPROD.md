---
category_name: medium
problem_code: MMPROD
problem_name: 'Best Maximum Product'
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
problem_tester: 'kevinsogo,xcwgf666'
date_added: 7-06-2016
tags:
    - greedy
    - kevinsogo
    - simple
    - snckpb16
editorial_url: 'http://discuss.codechef.com/problems/MMPROD'
time:
    view_start_date: 1465831800
    submit_start_date: 1465831800
    visible_start_date: 1465831800
    end_date: 1735669800
    current: 1493557800
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPB16/mandarin/MMPROD.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPB16/russian/MMPROD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPB16/vietnamese/MMPROD.pdf) as well.

After learning to solve [maximum sum subarray](https://www.codechef.com/problems/MMSUM/) problem, it's time for you to solve the **maximum product subsequence**.

You're given an array of **N** integers, and a number **K**.

The **maximum K-product** of the array is the maximum product of any **K** length subsequence of the array. For example, the maximum 2-product of the array **\[-5, 3, 4, -6\]** is **30** because the product of the subsequence **\[-5, -6\]** is **30** and it is impossible to achieve larger subsequence product.

What is the **maximum **K**-product** you can achieve? Since the answer can be very large, output it modulo **109 + 7**.

_Note:_ Recall that the result of a modulo operation is always non-negative. For example, **-8 mod 5 = 2**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space separated integers **N** and **K**.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN**, denoting the elements of the array.

### Output

For each test case, output a single line containing the **maximum K-product** of the array.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **K** ≤ **N** ≤ **105**
- **-109** ≤ **Ai** ≤ **109**
- The sum of the **N**s over all the test cases in a single test file is ≤ **5×105**

### Example

<pre><b>Input:</b>
<tt>4
4 2
5 -3 -4 6
4 2
-5 3 4 -6
3 2
10000 100000 100000
2 1
-1 -2</tt>

<b>Output:</b>
<tt>30
30
999999937
1000000006</tt>
</pre>### Explanation

**Example case 1.** The maximum 2-product of the array **\[5, -3, -4, 6\]** is **30** and is achieved by the subsequence **\[5, 6\]**.

**Example case 2.** The maximum 2-product of the array **\[-5, 3, 4, -6\]** is **30** and is achieved by the subsequence **\[-5, -6\]**.

**Example case 3.** The maximum 2-product of the array **\[10000, 100000, 100000\]** is **10000000000** and is achieved by the subsequence **\[100000,100000\]**. Modulo **109 + 7**, this is **999999937**.

**Example case 4.** The maximum 1-product of the array **\[-1, -2\]** is **-1** and is achieved by the subsequence **\[-1\]**. Modulo **109 + 7**, this is **1000000006**.

The reason why **-1 mod (109 + 7) = 1000000006** is that for positive **m**, **a mod m** is defined as the smallest nonnegative integer **b** such that **a - b** is divisible by **m**.
