---
category_name: medium
problem_code: TRIPCOST
problem_name: 'Optimal Trip'
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
problem_author: utkarsh_lath
problem_tester: Rubanenko‎
date_added: 12-07-2013
tags:
    - easy
    - greedy
    - ltime02
    - utkarsh_lath
editorial_url: 'http://discuss.codechef.com/problems/TRIPCOST'
time:
    view_start_date: 1375002000
    submit_start_date: 1375002000
    visible_start_date: 1375002000
    end_date: 1735669800
    current: 1493557950
layout: problem
---
All submissions for this problem are available.Chef has decided to take a break, and go for a ride. He is currently in city , and he wants to get to city **N**.
The cities along the road from  to **N** are numbered **0, 1, 2, 3, ... N-1, N** in increasing order of distance from city .
The distance between cities **i** and **i-1** is denoted by **di**.

However, as is always the case, it is unsafe to travel at night, so he will have to break his journey over multiple days.
Chef may travel at most **D** distance in any day, so he will have to book hotel for overnight stay in some of the cities.
On any day, Chef will begin his journey from some city and end his journey at some other city.
Chef wants to reach city **N** in as few days as possible, so he has to plan his trip accordingly.
Let **L** be the minimum number of days in which he can reach city **N**.

Chef knows the cost of overnight stay in each city. The cost of overnight stay in city **i** is **ci**.
Chef will need to get all his hotel bills re-embersed, and his boss might get suspicious if cost for any single day exceeds a threshold.

Chef knows that his boss wants him to reach as soon as possible. Thus, if it is possible for Chef to go from  to **N** in **L** days with no restriction on where Chef stays, then his boss will want him to reach in exactly **L** days. However, if the boss puts a threshold value **i** then we know that the Chef may not be able to reach in **L** days (since he may not be allowed to stay at some hotels). Help him him find the minimum threshold value **C** such that if he only stays in hotels of cost <= **C**, it is possible for him to reach the destination **N** in exactly **L** days (remember, here **L** is the minimum number of days needed by Chef if there were absolutely no restrictions on where he stays).

Formally, let **L** be the minimal number of days it takes Chef to get from city  to city **N**. Let **F(i)** be the minimal number of days it takes Chef to get from city  to city **N** if it's not allowed to pay more than **i** for a single stay in hotel. Find the smallest **C** that will still allow Chef to get to city **N** without losing time. In other words **F(C)=L**. Find and output **L** as well.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
The first line of each test case has two space separated integers **N** and **D**.
**N** lines follow, each having two space separated integers, **di** and **ci**.

### Output

For each test case, output a separate line containing the values of **L** and **C**.

### Constraints

- 1 ≤ **T** ≤ 15
- 2 ≤ **N** ≤ 105
- 1 ≤ **D** ≤ 109
- 1 ≤ **di** ≤ **D**
- 1 ≤ **ci** ≤ **N**
- The sum of **N** over all test cases in any file is at most **4\*105**.

### Subtack 1 (30 points)

**N** ≤ 103

### Subtack 2 (30 points)

**di** = 1, **D** = 9

### Subtask 3 (40 points): 

 _No special constraints_

Example:

### Sample Input

2

4 5

2 4

1 2

3 3

1 1

5 6

2 1

4 4

2 2

2 3

4 5
/>/>/>/>/>/>/>/>/>/>/>/>

### Sample output

2 2

3 2
/>/>

### Explanation

For test case# 1, the optimal trip is  → **2** → **4**

For test case# 2, the optimal trip is  → **1** → **3** → **5**
/>/>
