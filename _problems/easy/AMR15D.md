---
category_name: easy
problem_code: AMR15D
problem_name: Bhallaladeva
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
problem_author: suh_ash2008
problem_tester: null
date_added: 11-10-2015
tags:
    - acmamr15
    - basic
    - dynamic
    - easy
    - sorting
    - suh_ash2008
editorial_url: 'http://discuss.codechef.com/problems/AMR15D'
time:
    view_start_date: 1453401000
    submit_start_date: 1453401000
    visible_start_date: 1453401000
    end_date: 1735669800
    current: 1493558104
layout: problem
---
All submissions for this problem are available.Bhallaladeva was an evil king who ruled the kingdom of Maahishmati. He wanted to erect a 100ft golden statue of himself and he looted gold from several places for this. He even looted his own people, by using the following unfair strategy:

There are **N** houses in Maahishmati, and the **ith** house has **Ai** gold plates. Each gold plate costs exactly 1 **Nimbda**, which is the unit of currency in the kingdom of Maahishmati. Bhallaladeva would choose an integer **K**, and loots all the houses in several steps. In each step:

1. He would choose a house **i** which hasn't been looted yet, pay the owner exactly **Ai** Nimbdas, and take away all the gold plates in that house (Hence, he also ends up looting this house).
2. He would now choose **atmost K** houses which haven't been looted yet and take away all the gold plates from these houses without paying a single Nimbda (Yes, he takes all of them for free).

He repeats the above steps until all the **N** houses have been looted. Your task is to devise a strategy for Bhallaladeva to loot the houses in some order, so that the number of nimbdas he has to pay is **minimium**. You'll also be given multiple values of **K** (**Q** of them to be precise), and you need to find the minimum number of nimbdas for each of these values.

### Input

The first line of input consists of a single integer **N** denoting the number of houses in Maahishmati. The second line of input consists of **N** space separated integers denoting **A1, A2, ..., AN**, where **Ai** denotes the number of gold plates in the **ith** house. The third line of input consists of a single integer **Q** denoting the number of values of **K** to follow. Each of the following **Q** lines consist of a single integer, where the value on the **ith** line denotes the value of K for the **ith** query.

### Output

Output exactly **Q** integers on separate lines, where the output on the **ith** line denotes the answer for the **ith** value of **K**.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **Q** ≤ **105**
- 0 ≤ **K** ≤ **N-1**
- **1** ≤ **Ai** ≤ **104**

### Example

<pre><b>Input:</b>
4
3 2 1 4
2
0
2

<b>Output:</b>
10
3
</pre>
### Explanation

**For the first query**, **K = 0**. Hence, Bhallaladeva cannot take gold plates from any of the houses for free. It will cost him 3 + 2 + 1 + 4 = **10** nimbdas.

**For the second query**, **K = 2**. In the first step Bhallaladeva can pay **2** nimbdas for gold plates in house number 2, and take the gold in houses 1 and 4 for free (Note that house 1 has 3 gold plates and house 4 has 4 gold plates). Now, he has looted houses 1, 2 &amp; 4. Now in the second step, he loots house 3, by paying **1** nimbda. Hence, the total cost = 1 + 2 = **3**. Note that there might be multiple ways to achieve the minimum cost, and we have explained only one of them.
