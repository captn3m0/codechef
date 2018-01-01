---
category_name: hard
problem_code: TESTERS
problem_name: Vacation
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
problem_author: Rubanenko
problem_tester: laycurse
date_added: 23-12-2012
tags:
    - Rubanenko
    - feb13
    - hard
    - tree
editorial_url: 'http://discuss.codechef.com/problems/TESTERS'
time:
    view_start_date: 1360583767
    submit_start_date: 1360583767
    visible_start_date: 1360582602
    end_date: 1735669800
    current: 1493556868
layout: problem
---
All submissions for this problem are available.Everybody knows that there are a lot of complicated problems on CodeChef and it’s quite difficult to solve them. However, very few people know that testing these problems is much more elaborate process than solving. Hosting Chef’s great contests would be impossible without his testers - Anton and Hiroto. The number of problems they solved and tested probably won’t fit in 32-bit integer. These guys do very big amount of work and of course they also need to have a rest. They are having vacation for the next ten days. Of course, they’ve chosen ChefLand as a place to go.

There are **N** cities in ChefLand and every city is denoted by its integer number. Surprisingly these numbers are not to be distinct. Anton is fond of Math so he quickly counted **the sum of squares of all positive integer divisors** for every this number; let’s call this sum for number that denotes **ith** city **S(i)**. Hiroto considers city **i** to be beautiful if **S(i)** is **odd**, otherwise it is ugly for him.

It’s important to mention that the cities of ChefLand are connected by **bidirectional** roads. It took Hiroto a couple of seconds to notice that there are exactly **N-1** roads and that it’s possible to reach every city from every other city by existing roads.

Our testers want their vacation to consist of interesting trips. Formally trip is a path between two cities (Anton swears that there is an unique path between each pair of cities, so let’s trust him:)); the length of the trip is a number of cities it consists of. Furthermore, visiting of a single city is also a trip of length 1. The time of having any trip is equal to its length. Hiroto considers a trip to be interesting if the number of beautiful cities in it is not less than the number of ugly cities.

Anton and Hiroto want to try every interesting trip. Since our testers are very smart and provident, they want to know the exact time it will take them to go through all the interesting trips. Note that if they had a trip from **A** to **B** then they are not interested in having trip from **B** to **A**.

### Input

The first line contains single integer **N** – the number of cities in ChefLand. Then **N-1** lines follow – description of the roads. Each road is described by a pair of integers in **\[1, N\]** range. Then you are given **N** numbers in the next line. **Ith** of them is the number that denotes city **i**.

### Output

The first and only line of the output should contain the total length of all the interesting trips.

### Constrains

**1 ≤ N ≤ 300000 (3\*105)**

**1 ≤ Number that denotes any city ≤ 1500000 (1.5\*106)**

### Example

<pre>
<b>Input:</b>
3
1 2
1 3
3 1 1 

<b>Output:</b>
9
<p>
</p><h3>Explanation</h3>
Here we have <b>S(2)=S(3)=1</b> and <b>S(1)=10 (1 + 3<sup>2)</sup></b>, so the first city is ugly and other two are beautiful. 
(2, 2) – 1
(3, 3) – 1
(1, 2) – 2
(1, 3) – 2
(2, 3) – 3
1+1+2+2+3=9
The (1, 1) trip is not interesting. 


</pre>