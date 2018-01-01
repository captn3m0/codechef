---
category_name: medium
problem_code: SQNUMBF
problem_name: 'Square in numbers'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: karanaggarwal
date_added: 13-06-2016
tags:
    - ltime37
    - medium
    - number
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/SQNUMBF'
time:
    view_start_date: 1466874000
    submit_start_date: 1466874000
    visible_start_date: 1466874000
    end_date: 1735669800
    current: 1493557933
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME37/mandarin/SQNUMBF.pdf), [Russian](http://www.codechef.com/download/translated/LTIME37/russian/SQNUMBF.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME37/vietnamese/SQNUMBF.pdf) as well.

Leha is a bright mathematician. Today he is investigating whether an integer is divisible by some square number or not.

He has a positive integer **X** represented as a product of **N** integers **a1, a2, .... aN**. He has somehow figured out that there exists some integer **P** such that the number **X** is divisible by **P2**, but he is not able to find such **P** himself. Can you find it for him? If there are more than one possible values of **P** possible, you can print any one of them.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. **T** test cases follow.

The first line of each test case contains one integer **N** denoting the number of intgers in presentation of **X**.

The second line contains **N** space-separated integers **a1, a2, .... aN**.

### Output

For each test case, output a single integer **P** deoting the answer for this test case. Note that **P** must be in range from **2** to **1018** inclusive. It's guaranteed that at least one answer exists. If there are more than one possible answers, print any.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **100**
- **1** ≤ **ai** ≤ **1018**

### Subtasks

- **Subtask 1\[19 points\]:** **1** ≤ **a1\*a2\*...\*aN** ≤ **106**
- **Subtask 2\[22 points\]:** **1** ≤ **a1\*a2\*...\*aN** ≤ **1012**
- **Subtask 3\[23 points\]:** **1** ≤ **ai** ≤ **1012**
- **Subtask 4\[36 points\]:** no additional constraints

### Example

<pre><b>Input:</b>
1
3
21 11 6

<b>Output:</b>
3

</pre>### Explanation
**Example case 1.** **X = 21 \* 11 \* 6 = 1386**. It's divisible by 9 which is a square number, as **9 = 32**. So **P = 3**.
