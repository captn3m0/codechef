---
category_name: easy
problem_code: DRANGE
problem_name: 'Range of Data'
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
problem_author: vamsi_kavala
problem_tester: laycurse
date_added: 1-07-2012
tags:
    - ad
    - aug12
    - difference
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/DRANGE'
time:
    view_start_date: 1344677112
    submit_start_date: 1344677112
    visible_start_date: 1344677400
    end_date: 1735669800
    current: 1493558141
layout: problem
---
All submissions for this problem are available.Alice has **N** pieces of paper. These papers are numbered from **1** to **N**. She writes down the numbers **1** to **N** in order (one number on each paper), i.e. paper _i_ has number _i_ written on it. Bob messes the numbers on these papers. He either **adds** a constant to a number or **subtracts** a constant from the number. He performs **M** such operations. Each operation is of the form: **w x y z** where each of them is an integer. If **w = 1**, then Alice has to **add z** to every number on papers **x** to **y** (_both inclusive_). If **w = 2,** then Alice has to **subtract z** from every number on papers **x** to **y** (_both inclusive_). After doing this, Bob challenges Alice to tell him the range of this data, where _range_ denotes the count of numbers from the smallest number to the largest (See [here](http://www.wikihow.com/Find-the-Range-of-a-Data-Set) for more details). Your task is to help Alice in finding the range.

### Input:

First line of input contains a single integer **T**, the number of test cases.
Each test case starts with a line containing two space separated integers **N** and **M**.
Then follow **M** lines. Each of these lines is of the form **w x y z**. Each separated by a single space.

### Output:

For each test case output a single line containing the range of the new data set after Bob's modifications.

### Constraints:

<pre>1 ≤ T ≤ 20
1 ≤ M ≤ 10000
1 ≤ N ≤ 1000000
1 ≤ x ≤ y ≤ N
0 ≤ z ≤ 100000
</pre>### Example:
<pre>
<b>Input</b>
1
10 2
2 3 6 4
1 5 9 1

<b>Output:</b>
11


</pre>**Explanation:** Initially the papers are as follows: 1 2 3 4 5 6 7 8 9 10. First operation decreases the numbers on paper number 3,4,5 and 6 by 4. Now, the papers look like: 1 2 -1 0 1 2 7 8 9 10. The second operation increases the numbers on papers 5 to 9 by 1. The numbers will now be 1 2 -1 0 2 3 8 9 10 10. Thus, the range is 10 - (-1) = 11.