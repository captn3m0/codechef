---
category_name: easy
problem_code: CLETAB
problem_name: 'Cleaning Tables'
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
problem_author: 'vinayak garg'
problem_tester: null
date_added: 3-07-2014
tags:
    - aug14
    - greedy
    - simple
    - vinayak
editorial_url: 'http://discuss.codechef.com/problems/CLETAB'
time:
    view_start_date: 1407749400
    submit_start_date: 1407749400
    visible_start_date: 1407749400
    end_date: 1735669800
    current: 1493558130
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG14/mandarin/CLETAB.pdf) and [Russian](http://www.codechef.com/download/translated/AUG14/russian/CLETAB.pdf).

Haku has been newly hired by Chef to clean tables at his restaurant. So whenever a customer wants a table, Haku must clean it.

But Haku happens to be a lazy boy. So in the morning, when the restaurant is opened, all the tables are dirty from night before.

The customer don't leave the table unless they are politely requested to do so. And customers can order meal later again. So if they were already having a table, they can be served on the same table \[Haku doesn't have to clean :)\]. But if they don't have a table then they must be given some table \[Haku must clean :(\]

The restaurant has **N** tables. When a customer requires a table, he/she can occupy any unoccupied table. However if all tables are occupied, then Haku is free to ask politely any customer to leave his/her table. And the freed table can be given to the waiting customer.

Now Chef has the psychic ability to tell the order of customer meal requests for the entire day. Given this list, help Haku find the minimum number of times he has to clean the tables.

### Input

First line contains integer **T**, number of test cases.
First line of each test case contains 2 integers **N**, number of tables and **M**, number of customer orders. Followed by **M** integers on next line, which is the order in which customers ask for meal. Customers are referenced by integer **C**.

### Output

For each test case output the minimum number of times Haku must clean the table(s).

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N** ≤ 200
- 1 ≤ **M** ≤ 400
- 1 ≤ **C** ≤ 400

### Example

<pre><b>Input:</b>
4
2 4
1 2 3 4
3 2
4 1
3 6
1 2 1 3 4 1
3 5
1 2 1 3 4

<b>Output:</b>
4
2
4
4
</pre>### Explanation

**Example case 1.** In the starting all tables i.e. 2 tables are unoccupied. When customer 1 asks for table, he can be given any of the 2 tables. Haku has to clean either of the table. Next customer 2 can occupy the other free table. Haku must clean second time. When customer 3 comes Haku can ask either customer 1 or 2 to leave. Suppose he asks customer 1 to leave. Then he has to clean table for the third time. When customer 4 comes, Haku can ask customer 2 or 3 to leave. In either case Haku will have to clean the table for the fourth time. Phew!!

**Example case 4.** Suppose the tables are listed as \[-, -, -\]. A possible optimal order of allocating tables can be \[1, -, -\] -> \[1, 2, -\] -> \[1, 2, -\] -> \[1, 2, 3\] -> \[4, 2, 3\]. So Haku will have to clean table for order no. 1, 2, 4 and 5. That is 4 times.
