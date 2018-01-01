---
category_name: hard
problem_code: BINOMSUM
problem_name: 'Day Schedule'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
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
    - kotlin
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
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: null
date_added: 23-08-2017
tags:
    - chemthan
    - combinatorics
    - fft
    - hard
    - nov17
time:
    view_start_date: 1510579800
    submit_start_date: 1510579800
    visible_start_date: 1510579800
    end_date: 1735669800
    current: 1514817001
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/NOV17/mandarin/BINOMSUM.pdf), [Russian](http://www.codechef.com/download/translated/NOV17/russian/BINOMSUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV17/vietnamese/BINOMSUM.pdf) as well.

In Chef's world, a single day lasts **K** hours. There is only one restaurant near Chef's home, and he always eats there. Chef always has his breakfast in the first hour of the day, and it takes him exactly 1 hour to have it. He always has **L** different dishes for breakfast. Through the rest of the day, Chef has some other smaller meals. Each small meal consists of only a single dish and he finishes eating it in exactly one hour. Each of the remaining hours, he does some activities. There are **A** different activities that Chef can do (play games, watch TV,... or even sleep). And each of those activities takes exactly one hour.

Chef never eats twice in a row in a day, but he can do the same activity consecutively. Note that, he might eat on the last hour of a day, and then eat in the first hour of the next day, because they are on different days.

Assume that on the first day, the restaurant has **D** different dishes for Chef to choose from. Each of the next days, a new dish is added to their menu. The Chef wants to plan his schedule for each of the **T** days, starting from the first day. That is, he wants to decide what dishes he's going to have for breakfast, when and what he'll have for his small meals, and what activities he'll do. Help him calculate sum of the number of different plans he can make for each day. That is, you need to find (the number of different plans possible for day 1) + (the number of different plans possible for day 2) + ... + (the number of different plans possible for day **T**). Of course, the answer maybe large, so print only the remainder modulo **P**.

### Input

- The first line contains four space-separated integers **K, A, P, Q**, where **Q** denotes the number of queries.
- Then **Q** lines follow, each line containing three space-separated integers: **L, D, T**.

### Output

Each query, output the answer on a new line.

### Constraints

- 2 ≤ **K** ≤ 105
- 1 ≤ **A** ≤ 109
- 108 + 7 ≤ **P** ≤ 109 + 7, **P** is a prime.
- 1 ≤ **Q** ≤ 500
- 1 ≤ **L** ≤ **D** ≤ **D** + **T** - 1 ≤ 107

### Subtasks:

- Subtask #1 (5 points): **L** ≤ **D** ≤ **D** + **T** - 1 ≤ 105
- Subtask #2 (10 points): **K** = 2
- Subtask #3 (25 points): **K** ≤ 1000
- Subtask #4 (60 points): Original constrains

### Example

<pre><b>Input:</b>
3 2 1000000007 1
1 1 2

<b>Output:</b>
22

</pre>### Explanations:
There are 3 hours in a day, and 2 activities to choose from. Let the activities be A1 and A2. Let the dishes be D1 and D2. On Day 1, only D1 is available. We will denote a plan for the day by a triplet (X, Y, Z). For example (D1, A1, A2) means that on the first hour, the Chef eats dish D1 (which is his breakfast), then the next hour he does the first activity and on the last hour of the day he does the second activity.

All possible plans for the first day are as follows:

- (D1, A1, A1)
- (D1, A1, A2)
- (D1, A1, D1)
- (D1, A2, A1)
- (D1, A2, A2)
- (D1, A2, D1)

So there are total of 6 possible plans for Day 1.

On the second day, the only difference is that D2 is also available at the restaurant. All possible plans for the second day are as follows:

- (D1, A1, A1)
- (D1, A1, A2)
- (D1, A1, D1)
- (D1, A1, D2)
- (D1, A2, A1)
- (D1, A2, A2)
- (D1, A2, D1)
- (D1, A2, D2)
- (D2, A1, A1)
- (D2, A1, A2)
- (D2, A1, D1)
- (D2, A1, D2)
- (D2, A2, A1)
- (D2, A2, A2)
- (D2, A2, D1)
- (D2, A2, D2)

So, there are 16 possible plans for Day 2. So, the answer is the sum of these two, which is 6 + 16 = 22. Hence that's the output.
