---
category_name: easy
problem_code: KINGSHIP
problem_name: 'Chef and Kingship'
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
problem_author: shiplu
problem_tester: rustinpiece‎
date_added: 31-01-2014
tags:
    - ad
    - cook43
    - graph
    - shiplu
    - simple
editorial_url: 'http://discuss.codechef.com/problems/KINGSHIP'
time:
    view_start_date: 1392575400
    submit_start_date: 1392575400
    visible_start_date: 1392575400
    end_date: 1735669800
    current: 1493558156
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK43/mandarin/KINGSHIP.pdf) and [Russian](http://www.codechef.com/download/translated/COOK43/russian/KINGSHIP.pdf) as well.

Chef is the new king of the country Chefland. As first and most important responsibility he wants to reconstruct the road system of Chefland. There are **N** (**1** to **N**) cities in the country and each city **i** has a population **Pi**. Chef wants to build some bi-directional roads connecting different cities such that each city is connected to every other city (by a direct road or through some other intermediate city) and starting from any city one can visit every other city in the country through these roads. Cost of building a road between two cities **u** and **v** is **Pu x Pv**. Cost to build the road system is the sum of cost of every individual road that would be built.

Help king Chef to find the minimum cost to build the new road system in Chefland such that every city is connected to each other.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

First line contains an integer **N** denoting the number of cities in the country. Second line contains **N** space separated integers **Pi**, the population of **i**-th city.

### Output

For each test case, print a single integer, the minimum cost to build the new road system on separate line.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **105**
- **1** ≤ **Pi** ≤ **106**

### Example

<pre><b>Input:</b>
2
2
5 10
4
15 10 7 13

<b>Output:</b>
50
266

</pre>