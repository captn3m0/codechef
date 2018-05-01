---
category_name: medium
problem_code: PPXOR
problem_name: 'Polo the Penguin and the XOR'
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
problem_author: witua
problem_tester: rustinpiece
date_added: 30-09-2013
tags:
    - bitwise
    - cook39
    - easy
    - witua
    - xor
editorial_url: 'http://discuss.codechef.com/problems/PPXOR'
time:
    view_start_date: 1382293800
    submit_start_date: 1382293800
    visible_start_date: 1382293800
    end_date: 1735669800
    current: 1493557860
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/COOK39/russian/PPXOR.pdf)

Polo, the Penguin, likes the XOR operation. Please read [**NOTE**](#NOTE) if you are not familiar with XOR operation.

XOR-sum of a list of numbers is the result of XOR-ing all of them. XOR-sum of (**A\[1\]** XOR **A\[2\]** XOR ... XOR **A\[N\]**) is defined as **A\[1\]** XOR (**A\[2\]** XOR (**A\[3\]** XOR ( ... XOR **A\[N\]**))).

He has an array **A** consisting of **N** integers. Index in the array are numbered from **1** to **N**, inclusive. Let us denote by **F(L, R)**, the XOR-sum of all integers in the array **A** whose indices lie from **L** to **R**, inclusive, i.e. **F(L, R)** = **A\[L\]** XOR **A\[L+1\]** XOR ... XOR **A\[R\]**. Your task is to find the total sum of XOR-sums **F(L, R)** over all **L** and **R** such that **1 ≤ L ≤ R ≤ N**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains a single integer **N** denoting the size of **A**. The second line contains **N** space-separated integers **A\[1\]**, **A\[2\]**, ..., **A\[N\]**.

### Output

For each test case, output a single line containing the total sum to the corresponding test case.

### Constraints

- **1** ≤ **T** ≤ **100,000**
- **1** ≤ **N** ≤ **100,000**
- 0 ≤ **A\[i\]** ≤ **1,000,000,000 (10^9)**
- The total sum of all **N** over all test cases will not exceed **100,000**.

### Example

<pre><b>Input:</b>
1
2
1 2

<b>Output:</b>
6
</pre>### Explanation

**Example case 1.** **F(1, 1) = A\[1\] = 1**, **F(2, 2) = A\[2\] = 2** and **F(1, 2) = A\[1\]** XOR **A\[2\] = 1** XOR **2 = 3**. Hence the answer is **1 + 2 + 3 = 6**.

<a name="NOTE">
### NOTE

</a>

[XOR operation](http://en.wikipedia.org/wiki/Exclusive_or) is a bitwise "Exclusive OR" operation performed on two integers in binary representation. First, the shorter number is prepended with leading zeroes until the numbers have equal size in binary. Then the resulting number (also in binary) contains 0 in all positions where the corresponding bits coincide, and **1** on the rest of the positions.

 For example, **3** XOR **5** = **0112** XOR **1012** = **1102** = **6**.
