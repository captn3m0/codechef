---
category_name: medium
problem_code: CHNGSEQ
problem_name: 'Chang and Beautiful Sequences'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
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
problem_author: prateekg603
problem_tester: null
date_added: 25-06-2017
tags:
    - bit
    - combinatorics
    - cook84
    - hard
    - math
    - prateekg603
editorial_url: 'https://discuss.codechef.com/problems/CHNGSEQ'
time:
    view_start_date: 1500834600
    submit_start_date: 1500834600
    visible_start_date: 1500834600
    end_date: 1735669800
    current: 1514816017
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK84/mandarin/CHNGSEQ.pdf), [russian](http://www.codechef.com/download/translated/COOK84/russian/CHNGSEQ.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK84/vietnamese/CHNGSEQ.pdf) as well.

The beauty of any sequence of integers in the BitLand is defined as the product of the number of integers in the list and the Bitwise XOR of those integers. Our little Chef Chang liked this way of defining the beauty of a sequence and henceforth, came up with the following puzzle.

Find out how many sequences of non-negative integers of length **N** exist such that the sum of beauty values of all their subsequences modulo **109 + 7** equals a given integer **B**. Each element in the sequence should be strictly less than a given integer **C** (fixed to 220).

Since, the number of such sequences can be large, output this number modulo **109 + 7**.

Help the people of BitLand to solve this puzzle.

### Input

The first line of the input contains an integer **T** denoting number of test cases.

First line of each test case contains three space separated **N**, **B** and **C** as mentioned in the statement.

### Output

For each test case, output an integer corresponding to the answer to the test case in a separate line.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **106**
- **1** ≤ **B** ≤ **109 + 6**
- **C** = **220**

### Example

<pre>
<b>Input:</b>
3
2 0 1
2 3 2
2 2922 1024
<b>Output:</b>
1
2
616
</pre>### Explanation

**Example 1**. Only possible sequence will be 0 0. Its beauty value will be zero.

**Example 2**.The subsequences with beauty equal to 3 will be 0 1 and 1 0. So, the answer is 2.

**Example 3**. There are **616** sequences in total that have length **2** and each integer is less than **1024** such that sum of the beauty values of their subsequences modulo **109 + 7** is **2922**.

### Note

Please note that the above three examples don't have **C** = 220. These examples are just for making sure that you understand the problem correctly. In the test data it will be guaranteed that **C** is indeed 220.

### Example

**Input:**```

1
2 345 1048576

<b>Output:</b>
100
<pre>### Explanation

There are **100** sequences in total that have length **2** and each integer is less than **1048576** such that sum of the beauty values of their subsequences modulo **109 + 7** is **345**.
