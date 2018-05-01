---
category_name: medium
problem_code: CHEFDTRE
problem_name: 'Chef and Sets'
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
problem_author: furko
problem_tester: xcwgf666
date_added: 26-06-2015
tags:
    - data
    - furko
    - ltime25
    - medium
    - order
    - treap
editorial_url: 'http://discuss.codechef.com/problems/CHEFDTRE'
time:
    view_start_date: 1435480200
    submit_start_date: 1435480200
    visible_start_date: 1435480200
    end_date: 1735669800
    current: 1493557521
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME25/mandarin/CHEFDTRE.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME25/russian/CHEFDTRE.pdf).

Chef passed all the exams. This month was really tiring. So, he decided to relax for a little bit. Well, there is no better way to relax than to play with sets of numbers.

Chef loves to solve problems about sets. That does not mean that he is any good at it. Anyway, he opened his favorite problemset archive, and there he found a task that he thinks is best suited to him.

### Problem description

You are given **N** sets and **Q** queries. Initially, each set consists only of a **single** element. The sets are indexed from **1** to **N**, and the **i**th set contains the number **i**. Each query may be one of the following two types.

- **UNION a b** - merge the **ath** and the **bth**. The new set will hold the index **N** + number of union operations before this one + **1**. Also, after this operation, the **ath** set and the **bth** set will no longer exist.
- **GET a k** - find the **kth** smallest element in the set indexed **a**

Please help our dear Chef! :)

### Input

The first line of the input contains two integers **N** and **Q** denoting the number of sets in the very beginning and the number of queries. Each of the next **Q** lines contains one query per line - either **UNION a b"** or **GET a k**.

### Output

For each query of second type (i.e. **GET**) output the number that you've found.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **Q** ≤ **2 \* 105.**
- All the queries are valid, that is, for any query **GET i p**, the **i**th set exists, and has a size of at least **p**; and for any query **UNION a b**, the sets indexed as **a** as well as **b** exist.
- Subtask 1 (35 points): **1** ≤ **N, Q** ≤ **500**
- Subtask 2 (65 points): **1** ≤ **N** ≤ **105**, **1** ≤ **Q** ≤ **2 \* 105**

### Example

<pre><b>Input:</b>
<tt>7 8
UNION 1 2
UNION 8 3
GET 4 1
UNION 4 5
GET 10 2
GET 9 3
GET 9 2
GET 9 1</tt>

<b>Output:</b>
<tt>4
5
3
2
1</tt>
</pre>### Explanation

- Initially, the sets are: {1}, {2}, {3}, {4}, {5}, {6}, {7}.
- After the first query: {}, {}, {3}, {4}, {5}, {6}, {7}, {1, 2}.
- After the second query the configuration of sets is: {}, {}, {}, {4}, {5}, {6}, {7}, {}, {1, 2, 3}.
- The third query: the set {4} contains only one number so the answer is **4**
- The configuration of sets after the fourth query: {}, {}, {}, {}, {}, {6}, {7}, {}, {1, 2, 3}, {4, 5}
- The fifth query: the second smallest element in {4, 5} is **5**.
- For queries **6**, **7**, **8**, the set is {1, 2, 3}.
