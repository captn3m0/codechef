---
category_name: hard
problem_code: TICKETS
problem_name: 'Selling Tickets'
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: subra
date_added: 11-03-2012
tags:
    - hard
    - may12
    - pieguy
editorial_url: 'http://discuss.codechef.com/problems/TICKETS'
time:
    view_start_date: 1336723380
    submit_start_date: 1336723380
    visible_start_date: 1336728600
    end_date: 1735669800
    current: 1493556996
layout: problem
---
All submissions for this problem are available.Chef has prepared a large number of unique dishes for a fancy dinner. Patrons from all over the world are interested in purchasing tickets for the dinner. Each interested patron has specified 2 dishes that they are interested in eating for dinner. As long as a patron is served at least one of their 2 preferred dishes, they will be happy. Chef wants to sell as many tickets as possible while being able to guarantee that all patrons are happy. Unfortunately, Chef has no control over who buys the tickets, only how many will be sold. How many tickets can Chef sell?

### Input

Input will begin with an integer T, the number of test cases. Each test case begins with 2 integers N and M, the number of dishes and number of patrons, respectively. M lines follow, each containing 2 distinct integers between 1 and N, inclusive. The numbers on the i-th line represent the preferred dishes of the i-th patron. Each test case is followed by a blank line.

### Output

For each test case, output a single integer indicating the maximum number of tickets Chef can sell while still being able to guarantee that every patron will be happy no matter which patrons buy tickets.

### Sample Input

<pre>3
6 4
1 2
1 2
3 4
5 6

6 5
1 2
1 2
1 2
3 4
5 6

4 5
1 2
1 3
1 4
2 3
3 4
</pre>### Sample Output

<pre>
4
2
4

</pre>In the second example, Chef cannot sell 3 tickets because it's possible that 3 patrons will arrive all preferring dishes 1 or 2.

### Constraints

- T ≤ 15
- 2 ≤ N ≤ 200
- 0 ≤ M ≤ 500
