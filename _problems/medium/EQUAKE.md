---
category_name: medium
problem_code: EQUAKE
problem_name: Earthquake
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: null
date_added: 27-06-2014
tags:
    - aug14
    - lazy
    - medium
    - pavel1996
    - segment
editorial_url: 'http://discuss.codechef.com/problems/EQUAKE'
time:
    view_start_date: 1407749400
    submit_start_date: 1407749400
    visible_start_date: 1407749400
    end_date: 1735669800
    current: 1493557641
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/AUG14/mandarin/EQUAKE.pdf) and [Russian](http://www.codechef.com/download/translated/AUG14/russian/EQUAKE.pdf).

Earthquake in Bytetown! Situation is getting out of control!

All buildings in Bytetown stand on straight line. The buildings are numbered **0, 1, ..., N−1** from left to right.

Every hour one shake occurs. Each shake has **3** parameters: the leftmost building that was damaged during this shake, the corresponding rightmost building, and the force of the shake. Each time all the buildings in the disaster area are damaged equally. Let's consider this process in details.

At any moment every building has the number that indicates its height (may have leading zeroes). This number corresponds to some string consisting of digits. When some shake affects to the building its string circularly rotates to the left by the value of the force of the shake and its height corresponds to the value of new string. Pay attention that after rotation string may have leading zeroes. For instance: a building with height **950** got in disaster area with force **2**, Then its string become **095**, so height in reality is **95**. If it was one more shake with force **1**, then its height would become **950** again.

Major of Bytetown got some ideas how to protect residents, so sometimes he needs such kind of stats: find height of the highest building on some interval. You are given information about all the heights before the very first shake and then you get queries of two types:

- *Type 0*, described by **0 Li Ri Fi**: Shake occurred on interval **\[Li, Ri\]** with force **Fi**.
- *Type 1*, described by **1 Li Ri**: The major wants to know the biggest height on interval **\[Li, Ri\]**.
 
Here, of course, the interval **\[L, R\]** contains all the building **k** such that **L ≤ k ≤ R**.

You want to get a promotion and promised to complete this task. Now it's time to do it!

### Input

Each test file contains only one test case.

 The first line of input contains an integer **N** denoting the number of buildings in Bytetown. The second line contains **N** space-separated integers **A0, A1, ..., AN−1** denoting the initial height of the buildings. The third line contains an integer **M** denoting the number of queries. Each of next **M** lines starts with 0 or **1**, where 0 denotes a query *Type 0* and **1** denotes a *Type 1* query. If it's a *Type 0* query then **3** integers follows **Li**, **Ri**, **Fi**, denoting number of the leftmost building, number of the rightmost building and force of this shake. If it's a *Type 1* query then **2** integers follows **Li**, **Ri**, denoting numbers of the leftmost building and the rightmost building of necessary segment.

### Output

For each *Type 1* query, output an integer denoting the answer for the query without leading zeroes.

### Constraints

- **1 ≤ N ≤ 800000 = 8 × 105**
- **1 ≤ M ≤ 200000 = 2 × 105**
- **0 ≤ Ai 4**
- **0 ≤ Li ≤ Ri**
- **0 ≤ Fi ≤ 60**
- **Ai** does not have leading zeroes

### Example

<pre><b>Input:</b>
3
17 3140 832
8
1 0 2
0 0 2 1
1 1 2
1 0 0
0 0 2 2
1 0 2
0 1 1 1
1 0 2
<b>Output:</b>
3140
1403
71
832
3140
</pre>
### Explanation

The initial array: **\[17, 3140, 832\]**.

The first query is a *Type 1* query with numbers of buildings 0 and **2**, so the answer is the maximum of the array: **3140**.

The second query is a *Type 0* query with numbers of buildings 0 and **2**, and force **1**, so the array turns to: **\[71, 1403, 328\]**.

The third query is a *Type 1* query again with numbers of buildings **1** and **2**, so the answer is the maximum of **1403** and **328**: **1403**
