---
category_name: medium
problem_code: DIGITLIS
problem_name: 'Digit Longest Increasing Subsequences'
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
problem_author: alex_2oo8
problem_tester: kingofnumbers
date_added: 5-08-2016
tags:
    - alex_2oo8
    - cook78
    - dp
    - easy
    - lis
editorial_url: 'https://discuss.codechef.com/problems/DIGITLIS'
time:
    view_start_date: 1485109800
    submit_start_date: 1485109800
    visible_start_date: 1485109800
    end_date: 1735669800
    current: 1493557625
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK78/mandarin/DIGITLIS.pdf), [Russian](http://www.codechef.com/download/translated/COOK78/russian/DIGITLIS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK78/vietnamese/DIGITLIS.pdf) as well.

Recently Chef learned about [Longest Increasing Subsequence](https://en.wikipedia.org/wiki/Longest_increasing_subsequence). To be precise, he means longest **strictly** increasing subsequence, when he talks of longest increasing subsequence. To check his understanding, he took his favorite **n**-digit number and for each of its **n** digits, he computed the length of the longest increasing subsequence of digits ending with that digit. Then he stored these lengths in an array named **LIS**.

For example, let us say that Chef's favourite **4**-digit number is **1531**, then the **LIS** array would be **\[1, 2, 2, 1\]**. The length of longest increasing subsequence ending at first digit is **1** (the digit **1** itself) and at the second digit is **2** (**\[1, 5\]**), at third digit is also **2** (**\[1, 3\]**), and at the **4**th digit is **1** (the digit **1** itself).

Now Chef is wondering, how many different **n**-digit numbers (without leading zeros) are there that have exactly the given **LIS** array? As this number could be very large, output it modulo **(109 + 7)**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

For each test case, the first line contains an integer **n** denoting the number of digits in Chef's favourite number.

The second line will contain **n** space separated integers denoting **LIS** array, i.e. **LIS1, LIS2, ..., LISn**.

### Output

For each test case, output a single integer ― count of different **n**-digit numbers having the given **LIS** array, modulo **(109 + 7)**.

### Constraints

- **1** ≤ **T** ≤ **2 000**
- **1** ≤ **n** ≤ **1 000**
- Sum of **n** over all **T** testcases is denoted by **S**
- **1** ≤ **S** ≤ **10 000**
- It is guaranteed that at least one **n**-digit number having the given **LIS** array exists.

### Example

```
<b>Input:</b>
4
1 
1
2 
1 2
2 
1 1
3 
1 2 3

<b>Output:</b>
10
36
54
84

```
### Explanation

**Example case 1.** All one-digit numbers have the same **LIS** array, so the answer is **10**: **0, 1, 2, 3, ..., 9**.

**Example cases 2 & 3.** Overall we have **90** two-digit numbers (from **10** to **99**). Numbers with second digit strictly greater than first digit have **LIS** array **\[1, 2\]** and there are **36** such numbers. All the other two-digit numbers have **LIS** array **\[1, 1\]**.

An example of how array **LIS** is constructed

We will take **7**-digit number **1730418**, its **LIS** array is **\[1, 2, 2, 1, 3, 2, 4\]**:

index LIS length 1 **1**730418 1 2 **17**30418 2 3 **1**7**3**0418 2 4 173418 1 5 **1**7**3**0**4**18 3 6 1734**1**8 2 7 **1**7**3**0**4**1**8** 4