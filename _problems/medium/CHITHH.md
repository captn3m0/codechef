---
category_name: medium
problem_code: CHITHH
problem_name: 'Chef and Science'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: furko
problem_tester: null
date_added: 15-09-2013
tags:
    - binary
    - furko
    - ltime04
    - medium
    - preprocessing
editorial_url: 'http://discuss.codechef.com/problems/CHITHH'
time:
    view_start_date: 1380445200
    submit_start_date: 1380445200
    visible_start_date: 1380445200
    end_date: 1735669800
    current: 1493557558
layout: problem
---
All submissions for this problem are available.Chef studied science at school. But now he was tired of it. He likes to solve problems on Codechef. Here and now, he decided to go to his favourite site and solve several interesting problems. But as it turned out Chef is not yet ready to solve the harder problems. So you have to help him.

If you take away all the foreword, then the task set is this: you have **N** non-negative numbers **A1, A2 ... AN** and **M** requests. Each request consists of three numbers **(l, v, k)**. **MagicInteger(l,v)** is equal to concatenation of the numbers **Ai**, such that **(i = l + v \* q & 1 <= i <= n & q >= 0)**. For each such request you have to write the **k-th** digit of **MagicInteger(l,v)**.

Concatanation example:
If you have **2** numbers **11, 22** - after concatenation you will have **1122**.
If you have **3** number **13, 44, 12** - after concatenation you will have **134412**.
One more example: **0, 3, 11, 0** - after concatenation you will have **03110**. First digit of this string is , not **3**.

### Input

The first line contains an integer **N** denoting the number of integers in the given array. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the given array. The third line has a single integer **M** denoting the number of requests. The next **M** lines contains three space separated numbers in each line **(l, v, k)** denoting each request.

### Output

For each request output a single line containing **k-th** digit of **MagicInteger(l, v)**. If the length of **MagicInteger(l,v)** is smaller than **k**, you need to output "**So sad**" without quotes.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **M** ≤ **105**
- ≤ **Ai** ≤ **109**
- **1** ≤ **l, v** ≤ **105**
- **1** ≤ **k** ≤ **106**

### Example

<pre><b>Input:</b>
4
0 1 2 3
5
1 1 2
1 2 2
1 2 1
2 2 3
4 100000 1

<b>Output:</b>
1
2
0
So sad
3

</pre>### Scoring
Subtask 1 (30 points): **N ≤ 1000**

Subtask 2 (25 points): **V ≤ 100**

Subtask 3 (45 points): Look at constraints
