---
category_name: easy
problem_code: CARPTUN
problem_name: 'Car-pal Tunnel'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: abizerl123
problem_tester: r_64
date_added: 30-01-2018
tags:
    - abizerl123
    - dynamic
    - feb18
    - math
    - simple
editorial_url: 'https://discuss.codechef.com/problems/CARPTUN'
time:
    view_start_date: 1518427800
    submit_start_date: 1518427800
    visible_start_date: 1518427800
    end_date: 1735669800
    current: 1525198882
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/FEB18/mandarin/CARPTUN.pdf), [Russian](http://www.codechef.com/download/translated/FEB18/russian/CARPTUN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB18/vietnamese/CARPTUN.pdf) as well.

There is a straight road that passes through **N** short tunnels. At the entrance to the first tunnel, there are **C** cars lined up in a row waiting to enter the series of tunnels. The distance between each pair of consecutive tunnels is **D** metres (the lengths of each tunnel and each car are negligible) and the velocity of each car is **S** metres per second.

Each tunnel contains a toll booth. In the **i**-th tunnel (1 ≤ **i** ≤ **N**), processing a car at the toll booth takes **Ai** seconds. Only one car can be processed at the same time. If there are multiple cars in the tunnel, they all have to wait for the first car to be processed; afterwards, the first car exits the tunnel, the second car starts being processed and all remaining cars have to wait again, etc. Whenever a car arrives in a tunnel, it has to wait at that tunnel's toll booth until all previous cars have been processed and then get processed itself.

The road and the tunnels are too narrow, so cars can't overtake each other at any time during the journey.

Chef is after Reziba once again. Reziba's car is the first car to enter the tunnels, while Chef's car is the last car to enter the tunnels.

Compute the final delay (in seconds) between the first (Reziba's) car and the last (Chef's) car immediately after Chef's car exits the last tunnel, i.e. after all the cars have passed through the tunnels. This delay is equal to the distance between the first and the last car divided by the cars' velocity, or equivalently to the difference between the times when the last car and the first car exit the last tunnel.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of tunnels.
- The second line contains **N** space-separated integers **A1, A2, ..., AN** denoting the time taken for processing a car at each toll booth.
- The third line contains three space-separated integers **C**, **D** and **S**.

### Output

For each test case, print a single line containing one real number — the time delay between the first and last car after all the cars have passed through all the tunnels. Your answer will be considered correct if its absolute error is less than 10-6.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N** ≤ 105
- 1 ≤ **Ai** ≤ 109 for each valid **i**
- 2 ≤ **C** ≤ 106
- 1 ≤ **D, S** ≤ 109

### Subtasks

**Subtask #1:**

- 1 ≤ **N** ≤ 1,000
- **C** = 2

**Subtask #2:** Original Constraints

### Example

<pre><b>Input:</b>

2
3
2 2 2
3 5 5
2
3 2
2 1 1

<b>Output:</b>

4.000000000
3.000000000
</pre>### Explanation

**Example case 1:** Each car takes 5/5 = 1 second to go from one tunnel to the next tunnel.

Since each car has to wait for equally long (2 seconds) in each tunnel, the delay between every two consecutive cars exiting each tunnel is 2 seconds.

As there are 3 cars, the total time delay between the first and the last car after the last tunnel is 4 seconds.
