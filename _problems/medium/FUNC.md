---
category_name: medium
problem_code: FUNC
problem_name: 'Chef and Functions'
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
problem_author: viv001
problem_tester: shiplu
date_added: 8-01-2014
tags:
    - binary
    - june14
    - medium
    - number
    - viv001
editorial_url: 'http://discuss.codechef.com/problems/FUNC'
time:
    view_start_date: 1402911000
    submit_start_date: 1402911000
    visible_start_date: 1402911000
    end_date: 1735669800
    current: 1493557919
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE14/mandarin/FUNC.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE14/russian/FUNC.pdf).

 Chef has just been introduced to functions and he has been experimenting a lot with the different kinds of functions. In the process, the chef has come up with an interesting problem for you.

 Chef defines a function  **root(i, x)**  which gives the greatest integer less than or equal to the  **i th** root of a positive integer  **x** . For example,  **root(2, 4)**  is  **2**  and  **root(2, 2)**  is  **1** .

 Now the chef defines another function  **val(x, A, N)**  as follows : 

/>/>

 **val(x, A, N) = root(1, x)\*A\[1\] + root(2, x)\*A\[2\] + ... + root(N, x)\*A\[N\]**  

/>/>

where  **A**  is an array of integers of size  **N**  (indexed from 1 onwards) and  **x**  is a positive integer.

 You are given the array  **A**  and its size  **N** . You need to find out the value of  **val(x, A, N)**  for several values of  **x** . Since this number can be very large, print the result modulo  **109 + 7** .

### Input

 The first line contains an integer **T** denoting the number of test cases. Each test case begins with a line containing two integers **N** and  **Q**  denoting the size of array **A** and the number of queries. The second line of each test case consists of **N** space separated integers where the **ith** integer represents **A\[i\]**. The third line of each test case consists of **Q** space separated integers denoting the value of  **x**  for the **ith** query.

### Output

 For each test case, print in a single line  **Q**  integers, where the **ith** integer represents the answer to the **ith** query. ( i.e  **val(x, A, N) % ( 109 + 7 )**  )

### Constraints

- **1** ≤ **T** ≤  **10**
- **1**  ≤  **N** ≤  **104**
- **1**  ≤  **Q** ≤  **15000**
- **-109** ≤  **A\[i\]**  ≤  **109**
- **1**  ≤  **x**  ≤  **1018** for each number in the query.


/>

### Example

```
<b>Input:</b>
1
3 2
4 5 6
8 30
<br></br><b>Output:</b>
54 163
<br></br>/>/>
```
### Explanation

**Query 1.**

 **(root(1,8)\*4 + root(2,8)\*5 + root(3,8)\*6) % 1000000007 = (8\*4 + 2\*5 + 2\*6) % 1000000007 = 54 % 1000000007 = 54 

/>** />

**Query 2.**

 **(root(1,30)\*4 + root(2,30)\*5 + root(3,30)\*6) % 1000000007 = (30\*4 + 5\*5 + 3\*6) % 1000000007 = 163 % 1000000007 = 163 

/>**/>