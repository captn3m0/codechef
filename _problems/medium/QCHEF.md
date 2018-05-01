---
category_name: medium
problem_code: QCHEF
problem_name: 'Chef and Problems'
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
problem_author: gomelfk
problem_tester: laycurse
date_added: 30-10-2014
tags:
    - gomelfk
    - march15
    - medium
    - sqrt
editorial_url: 'http://discuss.codechef.com/problems/QCHEF'
time:
    view_start_date: 1426498200
    submit_start_date: 1426498200
    visible_start_date: 1426498200
    end_date: 1735669800
    current: 1493557868
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH15/mandarin/QCHEF.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH15/russian/QCHEF.pdf).

Chef was invited to the party of **N** people numbered from **1** to **N**. Chef knows the growth of all the people, i.e. he knows the growth of the **i**th person is denoted by an integer **Ai** not exceeding **M**.

Chef decided to have some fun. At first, he forms **K** groups of people. The **i**th group consists of all the people numbered from **Li** to **Ri**. Groups may overlap too.

For each group, Chef wants to know the following information: the maximum difference between the numberings of two people having same growth. Formally, Chef wants to know the following:

**max{|x − y| : Li ≤ x, y ≤ Ri** and **Ax = Ay}**

Please help Chef to have fun.

### Input

There is only one test case in one test file.

The first line of input contains three space-separated integers **N**, **M** and **K**, denoting the number of people, the maximum growth and number of groups respectively. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the growth of people. Then the **i**th line of the next **K** lines contains two space-separated integers **Li**, **Ri**, denoting the **i**th group.

### Output

For each group, output the integer denoting the maximum difference between numbering of two people having same growth in a single line.

### Constraints and Subtasks

- **1 ≤ Ai ≤ M**
- **1 ≤ Li ≤ Ri ≤ N**

**Subtask 1: 20 points**

- **1 ≤ N, M, K ≤ 1000 = 103**

**Subtask 2: 80 points**

- **1 ≤ N, M, K ≤ 100000 = 105**

### Example

<pre><b>Input:</b>
7 7 5
4 5 6 6 5 7 4
6 6
5 6
3 5
3 7
1 7

<b>Output:</b>
0
0
1
1
6
</pre>### Explanation

**Group 1.** There is only one person in the group. Thus the maximum difference of numbers should be 0.

**Group 2.** There are two persons in the group. Their growth are **A5 = 5** and **A6 = 7**. Thus there is no pair of persons who have the same growth. Thus the answer for this group will also be 0.

**Group 3.** There are three persons in the group. Their growth are **A3 = 6**, **A4 = 6** and **A5 = 5**. Here person **3** and person **4** has the same growth. Thus the answer is **|4 − 3| = 1**.

**Group 4.** There are more persons than the group **3**. But they has different growth, other than person **3** and person **4**.Thus the answer is also **|4 − 3| = 1**.

**Group 5.** This group contains all the people, and person **1** and person **7** has the same growth **A1 = A7 = 4**. So the answer is **|7 − 1| = 6**.
