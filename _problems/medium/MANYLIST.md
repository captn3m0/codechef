---
category_name: medium
problem_code: MANYLIST
problem_name: 'Many Lists'
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
problem_author: xcwgf666
problem_tester: logic_iu
date_added: 24-08-2015
tags:
    - hard
    - ltime28
    - segment
    - sets
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/MANYLIST'
time:
    view_start_date: 1440923400
    submit_start_date: 1440923400
    visible_start_date: 1440923400
    end_date: 1735669800
    current: 1493557777
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME28/mandarin/MANYLIST.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME28/russian/MANYLIST.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME28/vietnamese/MANYLIST.pdf)

There are **N** sets numbered **1** to **N**, all initially empty.

Your task is to perform two kinds of queries:

- **0 l r x** : add the number **x** to all the sets numbered from **l** to **r**. (Note that a set, by definition, can never contain duplicate elements. So a number is only added to a set if it was not already present.)
- **1 q** : output the size of the set numbered **q**.

### Input

The first line contains two space separated integers **N** and **M** denoting the number of lists and the number of the queries respectively.

The following **M** lines describe the queries. Each of these lines describes exactly one query in the format specified above.

### Output

For each query of type **1**, output the size of the specified set.

### Constraints

- Subtask 1 (14 points): **1** ≤ **N, M** ≤ **100**
- Subtask 2 (25 points): **1** ≤ **N, M** ≤ **1000**
- Subtask 3 (61 points): **1** ≤ **N, M** ≤ **2.5 \* 105**
- **1** ≤ **l** ≤ **r** ≤ **N**
- **1** ≤ **q**, **x** ≤ **N**

### Example

```
<b>Input:</b>
<tt>5 5
0 2 4 4
0 3 5 5
0 1 5 5
1 5
1 3</tt>

<b>Output:</b>
<tt>1
2</tt>


```
### Explanation

Have a look at the sets during the operations:

- Initially, all the sets are empty: {{}, {}, {}, {}, {}}.
- In the first query we add **4** to sets numbered 2 to 4 to get: {{}, {4}, {4}, {4}, {}}.
- In the second query we add **5** to the sets numbered 3 to 5 to get: {{}, {4}, {4, 5}, {4, 5}, {5}}.
- In the third query we add **5** to all the sets to get: {{5}, {4, 5}, {4, 5}, {4, 5}, {5}}.
- The **5**th set is {5}, its size is **1**.
- The **3**rd set is {4, 5}, and its size is **2**.