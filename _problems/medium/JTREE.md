---
category_name: medium
problem_code: JTREE
problem_name: JosephLand
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
problem_author: nurbakhyt
problem_tester: dpraveen
date_added: 29-06-2016
tags:
    - list
    - medium
    - nurbakhyt
    - sept16
time:
    view_start_date: 1473931800
    submit_start_date: 1473931800
    visible_start_date: 1473931800
    end_date: 1735669800
    current: 1493557702
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT16/mandarin/JTREE.pdf), [Russian](http://www.codechef.com/download/translated/SEPT16/russian/JTREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT16/vietnamese/JTREE.pdf) as well.

Nick lives in a country named JosephLand. JosephLand consists of **N** cities. City **1** is the capital city. There are **N - 1** **directed** roads. It's guaranteed that it is possible to reach capital city from any city, and in fact there is a unique path from any city to the capital city.

Besides, you can't cross roads for free. To pass a road, you must have a ticket. There are total **M** tickets. You can not have more than **one** ticket at a time! Each ticket is represented by three integers:

- **v** **k** **w** : you can buy a ticket with cost **w** in the city **v**. This ticket can be used at max **k** times. That means, after using this ticket for **k** roads ticket can't be used!

By the way, you can tear your ticket any time and buy a new one. But you are not allowed to buy a ticket if you are still having a ticket with you!

Nick's home is located in the capital city. He has **Q** friends, and he wants to invite all of them for dinner! So he is interested in knowing about how much each of his friends is going to spend in the journey! His friends are quite smart and always choose a route to capital city that **minimizes** his/her spending! Nick has to prepare dinner, so he doesn't have time to figure out himself, Can you please help him?

Please note that it's guaranteed that, one can reach the capital from any city using the tickets!

### Input

The first line of input contains two space separated integers **N** and **M**, denoting the number of cities in JosephLand, and the number of tickets, respectively.

The next **N - 1** lines contain two integers **ai**, **bi**, denoting that there is a road from city **ai** to **bi**.

The next **M** lines contain three integers **vi**, **ki**, **wi** denoting the ticket described above.

The next line contains a single integer **Q** denoting the number of Nick's friends.

The next **Q** lines contain a single integer each, **hi** denoting city, where Nick's **ith** friend lives.

### Output

Output **Q** lines: the answer for each friend.

### Constraints

- **1** ≤ **N, M, Q** ≤ **105**
- **1** ≤ **vi**, **ki** ≤ **N**
- **1** ≤ **wi** ≤ **109**
- **1** ≤ **hi** ≤ **N**

### Example

<pre><b>Input:</b><tt>
7 7
3 1
2 1
7 6
6 3
5 3
4 3
7 2 3
7 1 1
2 3 5
3 6 2
4 2 4
5 3 10
6 1 20
3
5
6
7
</tt>
<b>Output:</b><tt>
10
22
5</tt>
</pre>### Subtasks

- **Subtask #1 (10 points) : N, M, Q ≤ 102, wi ≤ 105**
- **Subtask #2 (15 points) : N, M, Q ≤ 103, wi ≤ 108**
- **Subtask #3 (25 points) : N, M, Q ≤ 5\*104, wi ≤ 109**
- **Subtask #4 (50 points)** : Original constraints

### Explanation

**Example #1:**

_Query 1._ There is only one ticket he/she can purchase in city 5 and it can be used 3 times. It's enough to reaching capital, thus overall cost is 10.

_Query 2._ There is only one ticket he/she can purchase in city 6 and it can be used only one time. Thus, he/she have to purchase another ticket in city 3 with cost 2. Overall cost is 22.

_Query 3._ There are two tickets he/she can purchase in city 7. One can buy either **2nd** ticket or **1**st ticket. He/She can buy the first ticket and travel, and buy one more ticket at city 3 by paying a cost of 2. Total cost for this combination is 5. For all other combination of buying tickets, he/she will have to spend at least 5 cost.
