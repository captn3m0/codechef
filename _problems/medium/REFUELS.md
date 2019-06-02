---
category_name: medium
problem_code: REFUELS
problem_name: 'Racing Refuels'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: null
date_added: 20-06-2017
tags:
    - errichto
time:
    view_start_date: 1498908900
    submit_start_date: 1498908900
    visible_start_date: 1498908900
    end_date: 1735669800
    current: 1514816996
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL17/mandarin/REFUELS.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL17/russian/REFUELS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL17/vietnamese/REFUELS.pdf) as well.

In racing, you refuel your car in the pitstops, and it’s very important to carefully plan pit stops.

1 unit of fuel is enough for exactly 1 lap. At the beginning of each lap, the number of units of fuel in your car must be a positive integer that doesn't exceed the tank capacity **N**, and it will decrease by 1 during a lap. After each lap, you can spend **P** seconds to visit a pit stop and refuel your car (add some fuel). It's allowed to start a lap with only 1 unit of fuel and thus finish it with 0 units — but you have to visit a pit stop right after that, unless it was the last lap of the race. You can start the race with any allowed (positive integer that doesn't exceed **N**) number of units of fuel.

The more fuel your car contains, the slower it is. If you start a lap with x units of fuel, you will finish this lap in **t**x seconds. You can assume that **t**x ≤ **t**x+1.

There are **Q** independent races, each described by two integers **K** and **P**, denoting the number of laps and the time needed to visit a pit stop in that race (let's say that in some races the pit stop crew is lazy and works slower). For each race, find the minimum possible number of seconds in which you can finish that race.

### Input

The first line of the input contains two integers **N** and **Q**, denoting the tank capacity and the number of races respectively.

The second line contains **N** integers **t**1, **t**2, ..., **t****N**, where **t**x denotes the time needed to finish a lap if you start it with x units of fuel.

Each of the next **Q** lines contains two integers **K** and **P**, denoting the number of laps and the number of seconds needed to visit a pit stop in one race.

### Output

For each of the **Q** races, in a separate line, print a single integer — the minimum possible number of seconds needed to finish the race. Please note the unusual constraint about the answer.

### Constraints

- 1 ≤ **N**, **Q** ≤ 300,000
- 1 ≤ **K**, **P**, **t**i ≤ 1013
- **t**i ≤ **t**i+1
- It's guaranteed that the answer fits in the signed 64-bit type.

### Example

<pre><b>Input:</b>
3 14
5 7 20
5 60
5 3
1 1
1 2
1 3
2 1
2 2
2 3
3 1
3 2
3 3
7 60
999999999 60
1000 123456789123

<b>Output:</b>
104
35
5
5
5
11
12
12
17
19
20
176
30666666576
41111110788607
</pre>
### Explanation

Your car fits up to **N** = 3 units of fuel. Let's take a look at the first two races.

**Race #1.** This race consists of **K** = 5 laps and you need **P** = 60 seconds to visit a pit stop. One optimal scenario is:

1. Start the race with 3 units of fuel.
2. Spend **t**3 = 20 seconds on the first lap. Now you have 2 units of fuel.
3. Spend **t**2 = 7 seconds on the second lap. Now you have 1 unit of fuel.
4. Spend **t**1 = 5 seconds on the third lap. Now you have 0 units of fuel.
5. Spend 60 seconds to visit a pit stop. Add 2 units of fuel there.
6. Spend **t**2 = 7 seconds on the 4-th lap.
7. Spend **t**1 = 5 seconds on the 5-th lap.

This total time is 20 + 7 + 5 + 60 + 7 + 5 = 104 seconds and it turns out to be the optimal answer.

**Race #2.** This race also consists of **K** = 5 laps, but this time you need only **P** = 3 seconds to visit a pit stop, so it might be better to visit a pit stop more often.
