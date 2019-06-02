---
category_name: easy
problem_code: FTRIP
problem_name: 'Field Trip'
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
problem_author: vamsi_kavala
problem_tester: pieguy
date_added: 27-03-2013
tags:
    - may13
    - probability
    - simple
    - simple
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/FTRIP'
time:
    view_start_date: 1368440891
    submit_start_date: 1368441000
    visible_start_date: 1368441000
    end_date: 1735669800
    current: 1493558147
layout: problem
---
All submissions for this problem are available.Alice's school is planning to take some students from her class on a field trip. Alice is really excited about it. There are a total of **S** students in her class. But due to budget constraints, the school is planning to take only **N** students for the trip. These students will be picked randomly. And each student has equal chance of being picked.

Alice's friend circle has **M** students including her. Though she is excited about the field trip, she will enjoy it only if there are atleast **K** of her friends with her on the trip. She is wondering what are the chances of that happening. She needs your help. Tell her the probability that she will enjoy given that she goes on the trip.

### Input:

First line of input contains a single integer **T**, the number of test cases.

Each test starts with a single line having 4 space separated integers, **S**, **N**, **M** and **K**./>

### Output:

For each test case, output a line containing the required probability. The answer will be accepted if the relative error is not more than 10-6.
/>

### Constraints:

<pre>
1 ≤ <b>T</b> ≤ 100
1 ≤ <b>S</b> ≤ 1000
1 ≤ <b>N</b> ≤ <b>S</b>
1 ≤ <b>M</b> ≤ <b>S</b>
0 ≤ <b>K</b> < <b>M</b>

</pre>
### Example:

**Input:**

<pre>
3
10 10 5 3
10 4 6 4
3 2 2 1


</pre>
**Output:**

<pre>
1.000000
0.000000
0.500000
</pre>
### Explanation:

**Case #1:**
Every student will be taken to the trip. So all her 4 friends will accompany her to the trip no matter what. 

**Case #2:**
Alice wants 4 out of her 5 friends to come along with her which isn't possible because the school is willing to pick only 4 students for the trip./>
