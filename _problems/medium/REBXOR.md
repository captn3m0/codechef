---
category_name: medium
problem_code: REBXOR
problem_name: 'Nikitosh and xor'
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
problem_author: rebryk
problem_tester: kevinsogo
date_added: 4-05-2015
tags:
    - bitwise
    - rebryk
    - sept15
    - trie
    - xor
editorial_url: 'http://discuss.codechef.com/problems/REBXOR'
time:
    view_start_date: 1442223000
    submit_start_date: 1442223000
    visible_start_date: 1442223000
    end_date: 1735669800
    current: 1493557875
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin](http://www.codechef.com/download/translated/SEPT15/mandarin/REBXOR.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT15/russian/REBXOR.pdf). Translations in Vietnamese to be uploaded soon.

Nikitosh the painter has a 1-indexed array **A** of **N** elements. He wants to find the **maximum** value of expression 

(**A\[l1\]** ⊕ **A\[l1 + 1\]** ⊕ **...** ⊕ **A\[r1\]**) + (**A\[l2\]** ⊕ **A\[l2 + 1\]** ⊕ **...** ⊕ **A\[r2\]**) where **1** ≤ **l1** ≤ **r1** &lt; **l2** ≤ **r2** ≤ **N**.

Here, **x** ⊕ **y** means the [bitwise XOR](https://en.wikipedia.org/wiki/Bitwise_operation#XOR) of **x** and **y**.

Because Nikitosh is a painter and not a mathematician, you need to help him in this task.

### Input

The first line contains one integer **N**, denoting the number of elements in the array.

The second line contains **N** space-separated integers, denoting **A1**, **A2**, ... , **AN**.

### Output

Output a single integer denoting the **maximum possible** value of the given expression.

### Constraints

- **2** ≤ **N** ≤ **4\*105**
- 0 ≤ **Ai** ≤ **109**

### Subtasks

- **Subtask 1** (40 points) : **2** ≤ **N** ≤ **104**
- **Subtask 2** (60 points) : Original constraints

### Example

<pre><b>Input:</b>
5
1 2 3 1 2

<b>Output:</b>
6

</pre>
### Explanation

Choose (**l1**, **r1**, **l2**, **r2**) = (1, 2, 3, 3) or (1, 2, 4, 5) or (3, 3, 4, 5).
