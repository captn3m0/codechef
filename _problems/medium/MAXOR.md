---
category_name: medium
problem_code: MAXOR
problem_name: 'Good Pairs'
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
    - kotlin
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
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: arpa
problem_tester: null
date_added: 28-07-2017
tags:
    - arpa
    - dp
    - ltime50
editorial_url: 'https://discuss.codechef.com/problems/MAXOR'
time:
    view_start_date: 1501349400
    submit_start_date: 1501349400
    visible_start_date: 1501349400
    end_date: 1735669800
    current: 1514816022
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME50/mandarin/MAXOR.pdf), [russian](http://www.codechef.com/download/translated/LTIME50/russian/MAXOR.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME50/vietnamese/MAXOR.pdf) as well.

You are given **N** integers: **A1**, **A2**, ..., **AN**. You need to count the number of pairs of indices (**i**, **j**) such that 1 ≤ **i** j ≤ **N** and **Ai** | **Aj** ≤ max(**Ai**, **Aj**).

**Note:** **Ai** | **Aj** refers to [bitwise OR](https://en.wikipedia.org/wiki/Bitwise_operation#OR).

### Input

- The first line of the input contains an integer **T**, denoting the number of test cases. The description of each testcase follows.
- The first line of each testcase contains a single integer: **N**
- The second line of each testcase contains **N** integers: **A1**, **A2**, ..., **AN**.

### Output

For each test case, output a single line containing the answer for that test case.

### Constraints

- 1 ≤ **T** ≤ 20
- 1 ≤ **N** ≤ 106
- 0 ≤ **Ai** ≤ 106
- 1 ≤ Sum of **N** over all test cases ≤ 106

### Subtasks

**Subtask #1** (20 points): - 1 ≤ **N** ≤ 103

**Subtask #2** (80 points): - Original constraints

### Example

<pre><b>Input:</b>
1
3
1 2 3

<b>Output:</b>
2
</pre>### Explanation

There are three possible pairs of indices which satisfy 1 ≤ **i** j ≤ **N**: (1, 2), (1, 3) and (2, 3). Let us see which of those satisfy **Ai** | **Aj** ≤ max(**Ai**, **Aj**):

- (1, 2): **A1** | **A2** = 1 | 2 = (01)2 | (10)2 = (11)2 = 3. But max(**A1**, **A2**) = max(1, 2) = 2, and 3 ≤ 2 is not correct. Hence this is not a valid pair.
- (1, 3): **A1** | **A3** = 1 | 3 = (01)2 | (11)2 = (11)2 = 3. And max(**A1**, **A3**) = max(1, 3) = 3, and 3 ≤ 3 is correct. Hence this is a valid pair.
- (2, 3): **A2** | **A3** = 2 | 3 = (10)2 | (11)2 = (11)2 = 3. And max(**A2**, **A3**) = max(2, 3) = 3, and 3 ≤ 3 is correct. Hence this is a valid pair.

So there are a total of 2 valid pairs, and hence the answer is 2.
