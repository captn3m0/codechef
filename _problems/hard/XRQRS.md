---
category_name: hard
problem_code: XRQRS
problem_name: 'Xor Queries'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: gomelfk
problem_tester: shiplu
date_added: 6-12-2014
tags:
    - data
    - gomelfk
    - jan15
    - medium
    - trie
editorial_url: 'http://discuss.codechef.com/problems/XRQRS'
time:
    view_start_date: 1421055000
    submit_start_date: 1421055000
    visible_start_date: 1421055000
    end_date: 1735669800
    current: 1493554567
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN15/mandarin/XRQRS.pdf) and [Russian](http://www.codechef.com/download/translated/JAN15/russian/XRQRS.pdf).

Given an initially empty integer array (1-indexed) and some queries:

- **Type 0**: Add the integer number **x** at the end of the array.
- **Type 1**: On the interval **L..R** find a number **y**, to maximize (**x [xor](http://en.wikipedia.org/wiki/Bitwise_operation#XOR) y**).
- **Type 2**: Delete last **k** numbers in the array
- **Type 3**: On the interval **L..R**, count the number of integers less than or equal to **x**.
- **Type 4**: On the interval **L..R**, find the **kth** smallest integer (**kth** order statistic).

### Input

- The first line contains a single integer **M** denoting number of queries.
- The following **M** lines contain queries, form of queries is as follows.
- Query type 0 has the form **"0 x"**.
- Query type 1 has the form **"1 L R x"**.
- Query type 2 has the form **"2 k"**.
- Query type 3 has the form **"3 L R x"**.
- Query type 4 has the form **"4 L R k"**.

Note that, there will be no invalid query in the input. ### Output

For each Query of type 1, 3 and 4 output the result in a single line.

### Constraints


11. Let **N** denote numbers of elements in before executing the query.
12. **1 ≤ M ≤ 5 \* 105**
13. **1 ≤ x ≤ 5 \* 105**
14. **1 ≤ L ≤ R ≤ N**
15. For query type 2, **1 ≤ k ≤ N**  and for query type 4, **k ≤ R-L+1**
### Subtasks

- Subtask #1 (40 points): **1 ≤ M ≤ 5 \* 104**
- Subtask #2: (60 points): **1 ≤ M ≤ 5 \* 105**

### Example

<pre><b>Input:</b>
10
0 8
4 1 1 1
0 2
1 2 2 7
1 2 2 7
0 1
3 2 2 2
1 1 2 3
3 1 3 5
0 6

<b>Output:</b>
8
2
2
1
8
2

</pre>