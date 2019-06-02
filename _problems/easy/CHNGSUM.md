---
category_name: easy
problem_code: CHNGSUM
problem_name: 'Chang and Perfect Quadruples'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: prateekg603
problem_tester: null
date_added: 25-06-2017
tags:
    - cook84
    - medium
    - prateekg603
editorial_url: 'https://discuss.codechef.com/problems/CHNGSUM'
time:
    view_start_date: 1500834600
    submit_start_date: 1500834600
    visible_start_date: 1500834600
    end_date: 1735669800
    current: 1514816001
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK84/mandarin/CHNGSUM.pdf), [russian](http://www.codechef.com/download/translated/COOK84/russian/CHNGSUM.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK84/vietnamese/CHNGSUM.pdf) as well.

Chang was not able to sleep well last night as he was thinking about a problem which still remains unsolved. Since he has only a day left to solve this problem and hand it to the interviewer, you being his friend decide to help him solve this so that he can clear this round and get a much-needed job. The problem is as follows.

Given a list **L** of **N** integers, Chang defines a perfect quadruple **(i, j, k, l)** such that:

- **i, j, k, l** are the indices of the list
- **i ≤ j**

You need to find the summation of **F(i, j, k, l)** over all perfect quadruples **(i, j, k, l)**. **F(i, j, k, l)** is calculated as the product of maximum element in range **\[i, j\]** and the minimum element in range **\[k, l\]**. Since, the answer can be large, print it modulo **10^9 + 7**.

### Input

The first line of the input contains a single integer **N** denoting the number of elements in the list.

The second line contains **N** space-separated integers **L1**, **L2**, ..., **LN** denoting the elements of the list.

### Output

Ouput an integer corresponding to the answer to the only test case in a line.

### Constraints

- **1** ≤ **N** ≤  **106**
- **1** ≤ **Li** ≤  **109**

### Example

<pre><b>Input:</b>
3
2 1 3

<b>Output:</b>
19
</pre>
### Explanation

The perfect Quadruples and their individual contribution is calculated as.

<pre><b>F(1, 1, 2, 2) = 2*1 = 2</b>
<b>F(1, 1, 2, 3) = 2*1 = 2</b>
<b>F(1, 1, 3, 3) = 2*3 = 6</b>
<b>F(1, 2, 3, 3) = 2*3 = 6</b>
<b>F(2, 2, 3, 3) = 1*3 = 3</b>
</pre>
All these values sum up to **19**.
