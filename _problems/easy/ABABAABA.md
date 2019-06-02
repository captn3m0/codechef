---
category_name: easy
problem_code: ABABAABA
problem_name: ABABAABA
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
problem_author: xcwgf666
problem_tester: zedthirtyeight
date_added: 21-02-2016
tags:
    - ad
    - easy
    - ltime34
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/ABABAABA'
time:
    view_start_date: 1459011600
    submit_start_date: 1459011600
    visible_start_date: 1459011600
    end_date: 1735669800
    current: 1493558102
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME33/mandarin/ABABAABA.pdf), [Russian](http://www.codechef.com/download/translated/LTIME33/russian/ABABAABA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME33/vietnamese/ABABAABA.pdf) as well.

You are given a **uniformly randomly generated** string **S**, consisting of letters from the set **{"A", "B"}**. Your task is to find a string **T** that appears in **S** as a subsequence **exactly twice**.

In other words, you need to find such a string **T**, that there exist **exactly two** sets of indexes **i1, i2, ..., i|T|** and **j1, j2, ..., j|T|** such that there exists some **k**, where **ik ≠ jk** and **S{i1...i|T|} = S{j1...j|T|} = T**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first and only line of each test case contains a single string **S**.

The string **S** was generated **randomly**. For a generating string **S**, we first choose an integer **N** denoting a length of **S**. After that every symbol of the string **S** is chosen randomly from the set **{"A", "B"}** and the both symbols have equal probability to be chosen. Note that **N** is not choosen randomly.

### Output

For each test case, output a string that occurs **exactly twice** as a subsequence in **S**, or output **-1** if there is no such string. If there are more than one possible subsequences occurring exactly two times, you can print any one of them.

### Constraints

- **1** ≤ **T** ≤ **10**

### Subtasks

- **Subtask #1 (10 points)**: **2** ≤ **N** ≤ **3**
- **Subtask #2 (26 points)**: **2** ≤ **N** ≤ **10**
- **Subtask #3 (64 points)**: **2** ≤ **N** ≤ **5000**

### Example

<pre><b>Input:</b>
2
AAAA
BAB

<b>Output:</b>
-1
B
</pre>
### Explanation

**Test case #1**:

- The string "AAAA" appears once as a subsequence in itself.
- The string "AAA" appears four times as a subsequence in "AAAA"; possible positions: {2, 3, 4}, {1, 3, 4}, {1, 2, 4}, {1, 2, 3}.
- The strings "AA" and "A" also appear in "AAAA" as a subsequence strictly more than twice.

So, there is no string of "AAAA", which appears exactly twice. Hence answer is -1.

**Test case #2**: Two occurrences of "B" in "BAB" are {1} and {3} (1-based indexing).
