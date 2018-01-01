---
category_name: easy
problem_code: POTATOES
problem_name: 'Farmer Feb'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: mischievous_me
problem_tester: shiplu
date_added: 5-01-2014
tags:
    - ad
    - april14
    - cakewalk
    - mischievous_me
editorial_url: 'http://discuss.codechef.com/problems/POTATOES'
time:
    view_start_date: 1397467923
    submit_start_date: 1397467923
    visible_start_date: 1397467923
    end_date: 1735669800
    current: 1493558174
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL14/mandarin/POTATOES.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL14/russian/POTATOES.pdf).

Farmer Feb has three fields with potatoes planted in them. He harvested **x** potatoes from the first field, **y** potatoes from the second field and is yet to harvest potatoes from the third field. Feb is very superstitious and believes that if the sum of potatoes he harvests from the three fields is a prime number ([http://en.wikipedia.org/wiki/Prime\_number](http://en.wikipedia.org/wiki/Prime_number)), he'll make a huge profit. Please help him by calculating for him the minimum number of potatoes that if harvested from the third field will make the sum of potatoes prime. At least one potato should be harvested from the third field.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. Each of the next **T** lines contain 2 integers separated by single space: **x** and **y**.

### Output

For each test case, output a single line containing the answer.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **x** ≤ **1000**
- **1** ≤ **y** ≤ **1000**

### Example

<pre><b>Input:</b>
2
1 3
4 3

<b>Output:</b>
1
4

</pre>### Explanation
In example case 1: the farmer harvested a potato from the first field and 3 potatoes from the second field. The sum is 4. If he is able to harvest a potato from the third field, that will make the sum 5, which is prime. Hence the answer is 1(he needs one more potato to make the sum of harvested potatoes prime.)
