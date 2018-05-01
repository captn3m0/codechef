---
category_name: medium
problem_code: DEVHAND
problem_name: 'Devu and his three Hands'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: kevinsogo
date_added: 7-02-2015
tags:
    - admin2
    - arithmetic
    - combinatorics
    - may15
    - medium
    - modular
editorial_url: 'http://discuss.codechef.com/problems/DEVHAND'
time:
    view_start_date: 1431941400
    submit_start_date: 1431941400
    visible_start_date: 1431941400
    end_date: 1735669800
    current: 1493557619
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY15/mandarin/DEVHAND.pdf) and [Russian](http://www.codechef.com/download/translated/MAY15/russian/DEVHAND.pdf).

As you have probably realized up to now that Devu is not a normal guy, he is a very weird and abnormal guy. Normally people have two hands, but Devu has three of them. So he wears three wrist watches on his hands.

Devu loves to write name of his friends on his wrist watches. So he want to attach a string corresponding to name of his friends on each wrist watch. He is a quite particular about natural beauty, so he will not attach strings such that one of the string on a watch is prefix (not necessarily proper prefix) of some other string on other watch. Also alphabet size of characters in the string is equal to first **K** English Alphabets. (i.e. 1 ≤ **K ≤ 26**).

Now Devu wonders in how many ways he can select three non empty strings of length less than or equal to **N** to attach with his wrist watches. As answer could be very large, he wants you to print answer modulo **10^9 + 7**.

### Input

First line of test case contains a single integer **T** corresponding to the number of test cases.
For each test case, there will be a single line containing two space separated integers **N, K**.

### Output

For each test case, print a single line corresponding to the answer of the problem.

### Constraints

- _Subtask #1: (3 points)_  **1** ≤ **T** ≤ **9**, **1** ≤ **N** ≤ **3**, **1** ≤ **K** ≤ **3**
- _Subtask #2: (20 points)_  **1** ≤ **T** ≤ **200**, **1** ≤ **N** ≤ **100**, **1** ≤ **K** ≤ **26**
- _Subtask #3: (30 points)_  **1** ≤ **T** ≤ **200**, **1** ≤ **N** ≤ **10^5**, **1** ≤ **K** ≤ **26**
- _Subtask #4: (47 points)_  **1** ≤ **T** ≤ **2000**, **1** ≤ **N** ≤ **10^9**, **1** ≤ **K** ≤ **26**

### Example

<pre><b>Input:</b>
3
1 2
1 3
2 2

<b>Output:</b>
0
6
36
</pre>### Explanation

**Example #1.** 
There is no valid arrangement of three strings to the watches, because at least one of the string will be equal to other which will violate the property stated in the problem.

**Example #2.** 
There are 6 possible arrangements of the strings to the watches.

- {"a", "b", "c"}
- {"a", "c", "b"}
- {"b", "a", "c"}
- {"b", "c", "a"}
- {"c", "a", "b"}
- {"c", "b", "a"}
